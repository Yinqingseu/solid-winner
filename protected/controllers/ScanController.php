<?php
/*
 * ⑫.漏洞扫描控制器
 * 漏洞扫描模块控制器C的定义
 * @author 殷青
 * @version 1.0
 * @since 2016-10-26
 */
class ScanController extends Controller{
    public $layout =  '//layouts/scan';
    /*
     * Index 漏洞扫描模块页面展示
     * @access public
     * @since 2016-10-26
     * @version 1.0
     */
    public function actionIndex()
    {
            $this ->render('index');
    }
      
    /*
     * Hole 漏洞库功能视图：查看漏洞库信息；编辑漏洞列表；上传漏洞文件；
     * @access public
     * @since 2016-11-24
     * @version 1.0
     */
    public function actionHole()
	{   
            $this->layout = '//layouts/hole';
            //创建漏洞模型对象  
            $holeModel =  ScanHoles::model();
            //获取全部记录数
            $total = $holeModel->count();
             $per = 1;
            //实例化分类对象
            $page = new Pagination($total, $per);
            //拼装sql语句，帮助我们获得每页信息
            $sqlb = "select top $per * from {{scan_holes}} where (id not in (select top  $page->limit id from {{scan_holes}} order by id))order by id";
            //执行sql语句获得煤业数据
            $holeInfos = $holeModel-> findAllBySql($sqlb);
            //获得页码列表
            $pageList = $page->fpage();
            foreach($holeInfos as $v){
                if($v->tag == 0){
                    $tag = '否';}
                else{
                $tag = '是';} 
              }
        //数据库与视图交互
            $this ->render('hole',array('holeModel'=>$holeModel,'holeInfos'=>$holeInfos,'tag'=>$tag,'pageList'=>$pageList));//
	} 
      
    /*
     * HoleShow 具体展示选中漏洞信息
     * @param mixed $id 具体展示的漏洞id
     * @access public
     * @since 2016-10-26
     * @version 1.0
     */
    public function actionHoleShow($id)
	{
              $this->layout = '//layouts/hole';
            //创建漏洞模型对象
            $holeModel = ScanHoles::model();
            //获取对应漏洞id的漏洞详细信息
            $sql = 'select * from {{scan_holes}} where id ='.$id;
            $holeInfos = $holeModel->findAllBySql($sql);
            if(!empty($holeInfos)){
                foreach($holeInfos as $v){
                    if($v->tag == 0){
                        $tag = '否';}
                    else{
                    $tag = '是';} 
                  }
            }else{
                $this ->redirect(SITE_URL.'/index.php?r=scan/error');  //重定向
            }
            $this ->render('holeShow',array('holeModel'=>$holeModel,'holeInfos'=>$holeInfos,'tag'=>$tag));
	} 
        
     /*
     * HoleUp 漏洞上传视图
     * @access public
     * @since 2016-12-27
     * @version 1.0
     */
    public function actionHoleUp()
	{
          $this->layout = '//layouts/hole';
          $threatType[0]='请选择威胁类型';
          $threatType[1]='本地';
          $threatType[2]='远程';
          /*创建所需数据模型*/
          $holeTypeModel = HolesType::model();  //漏洞类型表
          $threatLevelModel = HolesThreatLevel::model(); //威胁等级表
          $upholeModel = new UpHoleInfos(); //上传漏洞信息模型
          /*获得漏洞类型，存入holeType数组*/
          $sql = "select hole_type from {{holes_type}}"; 
          $holeTypeInfos = $holeTypeModel -> findAllBySql($sql);
          $i=1;
          $holeType['']='请选择漏洞类型';
          foreach($holeTypeInfos as $v){
              $holeType[$i] = $v->hole_type;  $i++;
          }
            /*获得威胁等级，存入threatLevel数组*/
          $sql= "select threat_level from {{holes_threat_level}} ";
          $threatLevelInfos =  $threatLevelModel-> findAllBySql($sql);
          $threatLevel['']='请选择威胁等级';
           $i=1;
           foreach($threatLevelInfos as $v){
               $threatLevel[$i] = $v->threat_level; $i++;
           }
           
            $this ->render('holeUp',array('upholeModel'=>$upholeModel,
                'holeType'=>$holeType,'threatType'=>$threatType,'threatLevel'=>$threatLevel));
	} 
        
     /*
     * TypeChoose 漏洞扫描类型选择视图
     * @access public
     * @since 2016-12-27
     * @version 1.0
     */
    public function actionTypeChoose()
	{
            $this ->render('typeChoose');
	} 
  
    /*
     * Model 漏洞扫描模式选择：扫描练习和教师作业
     * @param mixed $id 表示扫描类型：1：应用软件 2：网站 3：主机
     * @access public
     * @since 2016-12-27
     * @version 1.0
     */
    public function actionModel($id)
	{
            switch($id){
            case 1: //应用软件
                $this ->render('softwareModel');
                break;
            case 2: //网站
                $this ->render('webModel');
                break;
            case 3: //主机
                $this ->render('hostModel');
                break;
            }
	} 
        
       /*
     * WebScan 网站扫描内容配置视图
     * @access public
     * @param mixed $model 表示扫描模式：1：自主扫描 2：教师作业
     * @since 2016-12-27
     * @version 1.0
     */
    public function actionWebScan()
	{
            //创建扫描配置模型对象
            $webConfig = new WebConfig();
             //设置url的扫描深度
            $depth[1]=1;
            $depth[2]=2;
            $depth[3]=3;
            //设置扫描线程数
            $threads[1]=1;
            $threads[2]=2;
            $threads[3]=3;
            //设置扫描web漏洞种类
            $hole[1]='SQL注入';
            $hole[2]='XSS攻击';
            //扫描方式
            $choice[1]='平台漏洞扫描';
            $choice[2]='第三方漏洞扫描';
            $choice[3]='手动验证漏洞';
            //第三方漏洞扫描工具
            $tool[1]='OpenVAS';
            $tool[2]='Nessus';
            //手动验证漏洞方式
            $selfcheck[1]='控制台';
            $selfcheck[2]='脚本';
             //如果用户提交扫描配置信息
        if(isset($_POST['WebConfig'])){
            //收集转化扫描漏洞的信息
            if(is_array($_POST['WebConfig']['scan_holelist']))
                //implode()函数将数组中的内容转换为一整个字符串，以逗号连接分割
                $_POST['WebConfig']['scan_holelist'] = implode(',',$_POST['WebConfig']['scan_holelist']);
            if(is_array($_POST['WebConfig']['selfcheck']))
                //implode()函数将数组中的内容转换为一整个字符串，以逗号连接分割
                $_POST['WebConfig']['selfcheck'] = implode(',',$_POST['WebConfig']['selfcheck']);
            //给模型收集表单信息
            $webConfig -> attributes = $_POST['WebConfig'];
            date_default_timezone_set("Asia/Shanghai");
            $webConfig->create_time = date("Y-m-d h:i:sa");
            $webConfig->creator = Yii::app()->user->name;
            $webConfig->model =1;
            $error = 0; //标记页面是否存在验证错误
            //根据选择的扫描工具，确定保存的对应表单内容
            switch($webConfig->choice){
                case 1; //choice 2,3 选择内容清空
                    $webConfig->tool = 0;
                    $webConfig->selfcheck = 0;
                    //判断是否进行必要信息填写
                    if($webConfig->scan_holelist == 0){
                        Yii::app()->user->setFlash('holelist_error','请至少选择一个扫描漏洞!');
                        $error = 1;
                    }
                    break;
                case 2: //choice 1,3 选择内容清空
                    $webConfig->scan_holelist = 0;
                    $webConfig->scan_depth = 0;
                    $webConfig-> numofthreads= 0;
                    $webConfig->selfcheck = 0;
                    //判断是否进行必要信息填写
                    if($webConfig->tool == 0){
                        Yii::app()->user->setFlash('tool_error','请至少选择一个第三方工具！');
                        $error = 1;
                    }
                    break;
                case 3://choice1,2内容清空
                    $webConfig->scan_holelist = 0;
                    $webConfig->scan_depth = 0;
                    $webConfig-> numofthreads= 0;
                    $webConfig->tool = 0;
                    //判断是否进行必要信息填写
                    if($webConfig->selfcheck == 0){
                        Yii::app()->user->setFlash('selfcheck_error','请至少选择一种手动验证方式！');
                        $error = 1;
                    }
                    break;
            }
        } 
            //实现信息存储
        if($webConfig->save()&&($error==0))
            $this ->redirect (SITE_URL.'/index.php?r=scan/webscanshow&scanId='.$webConfig->scan_id.'&scanModel=1');  //重定向
        $this ->render('webScan',array('webConfig'=>$webConfig,'depth'=>$depth,'threads'=>$threads,'hole'=>$hole,'choice'=>$choice,'tool'=>$tool,'selfcheck'=>$selfcheck)); 
    }
        
    /*
     * WebScanShow 扫描内容实时展示功能：扫描内容配置后，跳转到该页面。
     * @param mixed $scanModel 表示扫描模式：1：自主扫描 2：教师作业
     * @param mixed $scanId 表示扫描ID
     * @access public
     * @since 2016-10-26
     * @version 1.0
     */
      public function actionWebScanShow($scanId,$scanModel) 
	{
          //设置扫描web漏洞种类
            $hole[1]='SQL注入';
            $hole[2]='XSS攻击';
            //手动验证漏洞方式
            $selfcheck[1]='控制台';
            $selfcheck[2]='脚本';
            $userId = Yii::app()->user->id;
            date_default_timezone_set("Asia/Shanghai");
            $startTime =date("Y-m-d H:i:s");
            switch($scanModel){ 
                case 1: //自主训练模式
                  //创建所需模型
                    $configModel = WebConfig::model(); //扫描配置参数
                    $recordModel = new RecordSelftestWebScan();
                  //获取对应id号的配置记录
                    $sql =  "select * from {{web_config}} where scan_id= ".$scanId;  //应该改为参数化查询，比较安全；
                  //创建所需模型
                    $configModel = WebConfig::model(); //扫描配置参数
                    $scan_perform = ScanPerform::model(); //性能评估参数
                    $scan_log = ScanLog::model();//系统监测参数
                    $scanResults = new ScanResults(); //扫描结果模型
                    $scanResults->userId = $userId;
                    $scanResults->scan_id =$scanId;
                     //获得最新的扫描配置信息
                     $configInfos =  $configModel-> findAllBySql($sql);
                     //分析扫描配置信息
                    if(!empty($configInfos)){
                        foreach($configInfos as $v){
                            switch($v->choice){
                                case 1: 
                                    $choice = "平台漏洞扫描工具";
                                    break;
                                case 2: 
                                    $choice = "第三方漏洞扫描工具";break;
                                case 3:
                                    $choice = "手动验证方式";break;
                               }
                           }
                        if(isset($_POST['RecordSelftestWebScan'])){ //如果用户提交了数据
                              /************************记录扫描结果信息************************/
                                $endTime = date("Y-m-d H:i:s"); 
                                $beginTime = $_POST['RecordSelftestWebScan']['start_time'];
                                $scanResults -> scan_date = date("Y-m-d");
                                $scanResults -> start_time = $beginTime;
                                $scanResults -> end_time = $endTime;
                              /************************添加扫描记录信息************************/
                                $recordModel -> attributes = $_POST['RecordSelftestWebScan']; //给模型收集表单信息
                                foreach($configInfos as $v){
                                    $recordModel->test_id = $v->scan_id;
                                    $recordModel->test_type = 4;
                                    $recordModel->test_name = $v->scan_name;
                                    $recordModel->test_date = $v->create_time;
                                    $recordModel->userid =$userId;
                                    $recordModel->username =Yii::app()->user->name;
                                    $recordModel -> start_time = $beginTime;
                                    $recordModel -> end_time = $endTime;
                                }
                                if($recordModel->save()&& $scanResults->save()){
                                   $this ->redirect(SITE_URL.'/index.php?r=scan/scanover&id='.$scanId.'&model='.$scanModel); 
                                }
                        }
                   }else{//跳转至错误页面
                      $this ->redirect (SITE_URL.'/index.php?r=scan/error');  //重定向
                   }
                    $this ->renderPartial('webScanShow',array('configInfos'=>$configInfos,'recordModel'=>$recordModel,'scanResults'=>$scanResults,
                        'choice'=>$choice,'hole'=>$hole,'selfcheck'=>$selfcheck,'startTime'=>$startTime));
                      break;
                case 2://教师作业
                    $sql =  "select * from {{homework_webscan}} where scan_id = ".$scanId;  //应该改为参数化查询，比较安全；
                  //创建所需模型
                    $configModel = HomeworkWebScan::model(); //扫描配置参数
                    $scanPerform = ScanPerform::model(); //性能评估参数
                    $scanLog = ScanLog::model();//系统监测参数
                    $scanResults =new ScanResults(); //扫描结果模型
                    $scanResults->scan_id =$scanId;
                    $scanResults->userId = $userId;
                     //获得最新的扫描配置信息
                     $configInfos =  $configModel-> findAllBySql($sql);
                     //分析扫描配置信息
                     if(!empty($configInfos)){
                          foreach($configInfos as $v){
                            switch($v->choice){
                                case 1: 
                                    $choice = "平台漏洞扫描工具";
                                    break;
                                case 2: 
                                    $choice = "第三方漏洞扫描工具";break;
                                case 3:
                                    $choice = "手动验证方式";break;
                            }
                        }
                    /************************更新、保存用户使用记录************************/
                        $sflag = 0;//标记作业状态：0：未完成；1：已完成；
                        $Remodel = RecordHomeworkWebScan::model(); //要求作业号必须唯一
                        $recordModel = new RecordHomeworkWebScan();
                        //根据作业号和用户ID查询该用户、该作业的完成情况
                        $sqlRecord= "select * from {{record_homework_webscan}} where homework_id=".$scanId."and userid=".$userId;
                        $recordInfos = $Remodel ->findAllBySql($sqlRecord);
                        if(!empty($recordInfos)){ //存在记录，已提交过
                            foreach($recordInfos as $i){ 
                                $count= $i->submit_count;
                                $id = $i->id;
                                $sflag = 1;
                            }
                        }else{//首次提交
                                $count = 0;
                        }
                        if(isset($_POST['RecordHomeworkWebScan'])){ //如果用户提交了数据
                            $endTime = date("Y-m-d H:i:s"); 
                            $beginTime = $_POST['RecordHomeworkWebScan']['start_time'];
                            $scanResults -> scan_date = date("Y-m-d");
                            $scanResults -> start_time = $beginTime;
                            $scanResults -> end_time = $endTime;
                            //给模型收集表单信息
                            $recordModel -> attributes = $_POST['RecordHomeworkWebScan'];
                            if($count ==0){ //记录首次提交日期
                                $recordModel->submit_date = $endTime;
                                $recordModel->lated_date = $recordModel->submit_date;
                                $recordModel->submit_count = $count+1;
                                $recordModel->start_time = $beginTime;
                                $recordModel->end_time = $endTime;
                                //新建记录
                                foreach($configInfos as $v){
                                    $recordModel->homework_id = $v->scan_id;
                                    $recordModel->homework_type = 4;
                                    $recordModel->name = $v->scan_name;
                                    $recordModel->deadline = $v->deadline ;
                                    $recordModel->teacher_name = $v->teacher ;
                                    $recordModel->userid =$userId;
                                    $recordModel->username =Yii::app()->user->name;
                                    $recordModel->score ='Null';
                                }
                                //将信息存储至数据库中
                                if($recordModel->save() && $scanResults->save()){
                                    $this ->redirect(SITE_URL.'/index.php?r=scan/scanover&id='.$scanId.'&model='.$scanModel);  //重定向  
                                }
                            }else{ //直接修改现有记录，更新：提交次数和最新提交时间
                                $newAnswer = $_POST['RecordHomeworkWebScan']['answer'];
                                $count = $count+1;
                                date_default_timezone_set("Asia/Shanghai");
                                $lated_date =date("Y-m-d H:i:s");
                                //更新数据表中的指定记录
                                $update ="update {{record_homework_webscan}} set submit_count=".$count.",answer='".$newAnswer."',start_time='".$beginTime."',end_time='".$endTime."',lated_date='".$lated_date."'where id =".$id;
                                $connect = Yii::app()->db;
                                $status= $connect->createCommand($update)->execute(); 
                                if($status && $scanResults->save() ){
                                    $this ->redirect(SITE_URL.'/index.php?r=scan/scanover&id='.$scanId.'&model='.$scanModel);  //重定向  
                                }  
                            }  
                        }
                }else{ $this ->redirect(SITE_URL.'/index.php?r=scan/error');  //重定向
                     }
                //实时展示扫描界面
                $this ->renderPartial('webScanShowTask',array('configInfos'=>$configInfos,'recordModel'=>$recordModel,'recordInfos'=>$recordInfos,'scanResults'=>$scanResults,
                    'choice'=>$choice,'hole'=>$hole,'scanId'=>$scanId,'selfcheck'=>$selfcheck,'startTime'=>$startTime,'sflag'=>$sflag));
                  break;
               }
	}   
        
    /*
     * SoftwareScan 应用软件扫描视图
     * @param mixed $scanModel 表示扫描模式：1：自主扫描 2：教师作业
     * @param mixed $scanId 表示扫描ID
     * @access public
     * @since 2016-12-27
     * @version 1.0
     */
    public function actionSoftwareScan()//$scanModel,$scanModel
	{
            //创建扫描配置模型对象
            $softwareConfig = new SoftwareConfig();
            //设置扫描线程数
            $threads[1]=1;
            $threads[2]=2;
            $threads[3]=3;
             //如果用户提交扫描配置信息
        if(isset($_POST['SoftwareConfig'])){
            //给模型收集表单信息
            $softwareConfig -> attributes = $_POST['SoftwareConfig'];
            date_default_timezone_set("Asia/Shanghai");
            $softwareConfig->create_time = date("Y-m-d h:i:sa");
            $softwareConfig->creator = Yii::app()->user->name ;
            //实现信息存储
            if($softwareConfig->save())
                $this ->redirect (SITE_URL.'/index.php?r=scan/softwarescanshow');  //重定向
        } 
            $this ->render('softwareScan',array('softwareConfig'=>$softwareConfig,'threads'=>$threads)); 
	}
        
     /*
     * ScanShow 扫描内容实时展示功能：扫描内容配置后，跳转到该页面。
     * @param mixed $scanModel 表示扫描模式：1：自主扫描 2：教师作业
     * @param mixed $scanId 表示扫描ID
     * @access public
     * @since 2016-10-26
     * @version 1.0
     */
      public function actionSoftwareScanShow() //$scanModel,$scanModel
	{
          //创建所需模型
          $configModel = SoftwareConfig::model(); //扫描配置参数
           //获得最新的一条记录
           $sql = "select top 1 * from {{software_config}} order by scanId desc"; 
           //获得最新的扫描配置信息
           $configInfos =  $configModel-> findAllBySql($sql);
           //分析扫描配置信息，选择调用漏洞插件（调用相关函数/php文件？）
           //..............
            //实时展示扫描界面
            $this ->render('softwareScanShow',array('configModel'=>$configModel,'configInfos'=>$configInfos));
	} 
        
    
        
    /*
     * HostScan 主机扫描视图
     * @param mixed $scanModel 表示扫描模式：1：自主扫描 2：教师作业
     * @param mixed $scanId 表示扫描ID
     * @access public
     * @since 2016-12-27
     * @version 1.0
     */
    public function actionHostScan()//$scanModel,$scanModel
	{
            //创建扫描配置模型对象
            $hostConfig = new HostConfig();
            //设置扫描线程数
            $threads[1]=1;
            $threads[2]=2;
            $threads[3]=3;
             //如果用户提交扫描配置信息
        if(isset($_POST['HostConfig'])){
            //给模型收集表单信息
            $hostConfig -> attributes = $_POST['HostConfig'];
            date_default_timezone_set("Asia/Shanghai");
            $hostConfig->create_time = date("Y-m-d h:i:sa");
            $hostConfig->creator = Yii::app()->user->name ;
            //实现信息存储
            if($hostConfig->save())
                $this ->redirect (SITE_URL.'/index.php?r=scan/hostscanshow');  //重定向
        } 
            $this ->render('hostScan',array('hostConfig'=>$hostConfig,'threads'=>$threads)); 
	}
        
    /*
     * HostScanShow 扫描内容实时展示功能：扫描内容配置后，跳转到该页面。
     * @param mixed $scanModel 表示扫描模式：1：自主扫描 2：教师作业
     * @param mixed $scanId 表示扫描ID
     * @access public
     * @since 2016-10-26
     * @version 1.0
     */
      public function actionHostScanShow() //$scanModel,$scanModel
	{
          //创建所需模型
          $configModel = HostConfig::model(); //扫描配置参数
          $scanPerform = ScanPerform::model(); //性能评估参数
          $scanLog = ScanLog::model();//系统监测参数
          $scanResults = ScanResults::model(); //扫描结果模型
           //获得最新的一条记录
           $sql = "select top 1 * from {{hostConfig}} order by scanId desc"; 
           //获得最新的扫描配置信息
           $configInfos =  $configModel-> findAllBySql($sql);
           //分析扫描配置信息，选择调用漏洞插件（调用相关函数/php文件？）
           //..............
            //实时展示扫描界面
            $this ->render('hostScanShow',array('configModel'=>$configModel,'configInfos'=>$configInfos));
	} 
        
    /*
     * ScanOver 扫描结束视图：展示扫描结束信息，记录表中添加记录。
     * @param mixed $id 扫描ID号
     * @param mixed $model 扫描模式：1：自主扫描 2：教师作业
     * @access public
     * @since 2016-12-27
     * @version 1.0
     */
    public function actionScanOver($id,$model)
	{
            //创建所需数据模型
            $resultsModel = ScanResults::model(); //存储详细扫描结果信息
            $sqlReults = "select top 1 * from {{scan_results}} order by result_id desc";
            $resultsInfos = $resultsModel-> findAllBySql($sqlReults);
            switch($model){ //不同扫描模式需要创建不同的模型
                case 1:
                    $configModel = WebConfig::model();
                    $sql = "select * from {{web_config}} where scan_id =".$id; 
                    //获得最新的扫描配置信息
                    $configInfos = $configModel -> findAllBySql($sql);
                    break;
                case 2:
                    $configModel = HomeworkWebScan::model();
                    $sql = "select * from {{homework_webscan}} where scan_id =".$id; 
                    //获得最新的扫描配置信息
                    $configInfos = $configModel -> findAllBySql($sql);
                    break;
            }
            $this ->render('scanOver',array('configInfos'=>$configInfos,'resultsInfos'=>$resultsInfos));
	}

        
    /*
     * OnlineShow 在线展示具体某历史报表信息
     * @param mixed $id 进行网页展示历史报表信息的报表id（应该与扫描配置id一致）
     * @access public
     * @since 2016-12-10
     * @version 1.0
     */
    public function actionOnlineShow($id)//$id
	{
            //创建所需的表单模型
            $resultsModel = ScanResults::model();
            $holeModel = ScanHoles::model();
            //渲染视图
            $this ->renderPartial('onlineShow',array('resultsModel'=>$resultsModel,'holeModel'=>$holeModel));
	}  
        
     /*
     * Tool 工具 功能展示视图
     * @access public
     * @since 2017-1-6
     * @version 1.0
     */
    public function actionTool()
	{
            //渲染视图
            $this ->render('toolLayout');
	}
        
    /*
     * Plugin 漏洞扫描插件功能
     * @access public
     * @since 2016-10-26
     * @version 1.0
     */
    public function actionPlugin()
	{
             //创建插件对象
            $pluginModel = new ScanPlugin();
            //从数据库获取信息
            $sql = "select * from {{scan_plugin}}";
            //执行sql语句获得
            $pluginInfos = $pluginModel->findAllBySql($sql);
            //实时展示扫描界面
            $this ->render('plugin',array('pluginModel'=>$pluginModel,'pluginInfos'=>$pluginInfos));
	}   
  
    /*
     * Report 交互模块--报表功能：展示历史报表信息，查询功能，下载导出历史报表
     * @access public
     * @since 2016-12-10
     * @version 1.0
     */
    public function actionReport()
	{
            //创建扫描结果对象
            $reportModel = new ScanResults();
            $total = $reportModel->count();
            $per = 1; //每页展示记录数，暂时设为最小，避免报错
            $page = new Pagination($total,$per);
            //拼装sql语句，帮助我们获得每页信息
            $sqlb = "select top $per * from {{scan_results}} where (result_id not in (select top  $page->limit result_id from {{scan_results}} order by result_id))order by result_id";
            //执行sql语句获得煤业数据
            $reportInfos = $reportModel-> findAllBySql($sqlb);
            //获得页码列表
            $pageList = $page->fpage();
//            //从数据库获取信息
//            $sql = "select * from {{scan_results}}";
//            //执行sql语句
//            $reportInfos =  $reportModel->findAllBySql($sql);
            //展示历史报表信息到网页
            $this ->render('scanReport',array('reportInfos'=>$reportInfos,'reportModel'=>$reportModel,'pageList'=>$pageList));
	}     
     
    /*
     * Detect 监测模块：对扫描系统运行状态进行监控并生成监控日志，将监控日志上传至数据库中日志表中
     * @access public
     * @param mixed $detect_infos 定义变量，存储监测模块生成的监测信息
     * return mixed $detect_infos 返回监测信息，供性能评估模块使用
     * @since 2016-10-26
     * @version 1.0
     */
     public function actionDetect()//$detect_infos
	{
          
		$this ->render('detect');
            
	} 
        
    
   /*
     * SelfCheck 手动验证功能模块：提供插件、控制台和脚本输入三种方式，让用户自己验证一些漏洞
     * @access public
     * @since 2016-11-29
     * @version 1.0
     */
     public function actionSelfCheck ()
	{  
		$this ->render('selfCheck');
	} 
        
        
        /*
     * Error 报错提示页面
     * @access public
     * @since 17-2-14 
     * @version 1.0
     */
     public function actionError ()
	{  
		$this ->render('error');
	}  
 
        
  //测试视图--绿盟科技扫描报表参考模板
    public function actionTest ()
	{  
		$this ->render('onlineshow_test');
	} 
        
    //测试视图--绿盟科技扫描报表参考模板
    public function actionTest1 ()
	{  
		$this ->render('python_test');
	}  
        
    //测试视图--漏洞查询
    public function actionHoleTest ()
	{  
		$this ->render('test');
	}
}