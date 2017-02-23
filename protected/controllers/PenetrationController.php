<?php
/*
 * 渗透测试训练模块控制器
 * ③渗透测试训练模块控制器C的定义
 * @author 殷青
 * @version 1.0
 * @since 2017-01-10
 */
class PenetrationController extends Controller{
    public $layout = '//layouts/penetration';
    
      /*
     * Config  难度、建站语言选择页面展示：训练内容选择训练题库后的操作，自定义生成的渗透测试题目难度和编程语言。
     * @access public
     * @since 2016-10-26
     * @version 1.0
     */
    function actionConfig(){
        $this->layout = '//layouts/train';
        //难度级别
        $level[1]='低';
        $level[2]='中';
        $level[3]='高';
        //创建配置模型
        $configModel = new TrainConfig();
        if(isset($_POST['TrainConfig'])){
            //给模型收集表单信息
            $configModel -> attributes = $_POST['TrainConfig'];
            if($configModel->train_model == '自主训练')
                $configModel-> train_model = 1;
            //将信息存储到数据库中
            if($configModel -> save())
                $this -> redirect(SITE_URL.'/index.php?r=penetration/index&trainId='.$configModel->train_id.'&trainModel='.$configModel->train_model);
        }
        $this ->render('config',array('configModel'=>$configModel,'level'=>$level));
    }
    
    
    /*
     * Index  渗透测试训练首页视图
     * @access public
     * @param mixed $trainId 训练ID号，
     * 两个来源：学生自主训练生成的训练ID和老师布置的作业ID号。
     * @param mixed $trainModel 训练模式，根据不同的训练模式，查找对应的数据表：1：自主训练配置表 2：作业表
     * @since 2017-01-10
     */
    function actionIndex($trainId,$trainModel){
        $userId = Yii::app()->user->id;
        date_default_timezone_set("Asia/Shanghai");
        $startTime =date("Y-m-d H:i:s");
     switch($trainModel){ 
      case 1: //自主训练模式，查询sw_train_config表，获取对应信息
        $recordModel = new RecordSelftestPenetration();
        $configModel = TrainConfig::model(); 
        //获取对应id号的配置记录
        $sql =  "select * from {{train_config}} where train_id = ".$trainId;  //应该改为参数化查询，比较安全；
        $configInfos = $configModel -> findAllBySql($sql);
        if(!empty($configInfos)){  //若作业号存在
           foreach($configInfos as $v){
            $trainLevel = $v->train_level;
            $name = $v-> train_name; 
            } 
            switch($trainLevel){
                case 1:
                $level = '低';break;
                case 2:
                 $level = '中'; break;
                case 3:
                 $level = '高'; break;
            } 
        }else{
            $this ->redirect(SITE_URL.'/index.php?r=scan/error');  //重定向   
        }
        /************用户提交数据，添加记录至数据库************/
         if(isset($_POST['RecordSelftestPenetration'])){ //如果用户提交了数据
            $recordModel->attributes = $_POST['RecordSelftestPenetration'];
            $endTime = date("Y-m-d H:i:s"); 
            $beginTime = $_POST['RecordSelftestPenetration']['start_time'];
            $recordModel->start_time = $beginTime;
            $recordModel->end_time = $endTime;
            //新建记录
            foreach($configInfos as $v){
                $recordModel->test_id = $trainId;
                $recordModel->test_type = 1;
                $recordModel->test_name = $v->train_name;
                $recordModel->test_date =date("Y-m-d");
                $recordModel->userid =$userId;
                $recordModel->username =Yii::app()->user->name;
            }
            //将信息存储至数据库中
            if($recordModel->save()){
                 $this ->redirect(SITE_URL.'/index.php?r=train/over&id='.$trainId.'&model='.$trainModel.'&type=1');  //重定向   
            }
         } 
         $this ->render('indexTest',array('level'=>$level,'startTime'=>$startTime,
           'configModel'=>$configModel,'configInfos'=>$configInfos,'recordModel'=>$recordModel));
        break;
      case 2://教师作业，从sw_homework_penetration查询作业信息
         $sflag = 0;  //标识作业状态：1为已完成；0:未完成；
         $configModel = HomeworkPenetration::model(); 
         $sql =  "select * from {{homework_penetration}} where train_id = ".$trainId;  //应该改为参数化查询，比较安全；
         $configInfos = $configModel -> findAllBySql($sql);
         if(!empty($configInfos)){  //若作业号存在
           foreach($configInfos as $v){
            $trainLevel = $v->train_level;
            $name = $v-> train_name; 
            } 
            switch($trainLevel){
                case 1:
                $level = '低';break;
                case 2:
                 $level = '中'; break;
                case 3:
                 $level = '高'; break;
            } 
        }else{
            $this ->redirect(SITE_URL.'/index.php?r=scan/error');  //重定向   
        }
        /***查询记录存在，判断作业状态***/
         $reModel = RecordHomeworkPenetration::model();
         $sqlRecord= "select * from {{record_homework_penetration}} where homework_id=".$trainId."and userid=".$userId;  //根据作业号和用户ID查询该用户、该作业的完成情况
         $recordInfos = $reModel ->findAllBySql($sqlRecord);
         if(!empty($recordInfos)){ //存在记录，已提交过
             $recordModel = RecordHomeworkPenetration::model();  
            foreach($recordInfos as $i){ 
                $count= $i->submit_count;
                $id = $i->id;
                $sflag = 1;
            }
        }else{//首次提交
            $count = 0;
            $recordModel = new RecordHomeworkPenetration();
        }
        /************用户提交数据，添加记录至数据库************/
         if(isset($_POST['RecordHomeworkPenetration'])){ //如果用户提交了数据
            $endTime = date("Y-m-d H:i:s"); 
            $beginTime = $_POST['RecordHomeworkPenetration']['start_time'];
            //给模型收集表单信息
            $recordModel -> attributes = $_POST['RecordHomeworkPenetration'];
            if($count ==0){ //记录首次提交日期
                $recordModel->submit_date = $endTime;
                $recordModel->lated_date = $recordModel->submit_date;
                $recordModel->submit_count = $count+1;
                $recordModel->start_time = $beginTime;
                $recordModel->end_time = $endTime;
                //新建记录
                foreach($configInfos as $v){
                    $recordModel->homework_id = $v->train_id;
                    $recordModel->homework_type = 1;  //1:训练:2:靶场3:实战4:漏扫
                    $recordModel->name = $v->train_name;
                    $recordModel->deadline = $v->deadline ;
                    $recordModel->teacher_name = $v->teacher ;
                    $recordModel->userid =$userId;
                    $recordModel->score ='Null';
                }
                //将信息存储至数据库中
                if($recordModel->save()){
                     $this ->redirect(SITE_URL.'/index.php?r=train/over&id='.$trainId.'&model='.$trainModel.'&type=1');  //重定向   
                }
            }else{ //直接修改现有记录，更新：提交次数和最新提交时间
                $count = $count+1;
                date_default_timezone_set("Asia/Shanghai");
                $lated_date =date("Y-m-d H:i:s");
                $newAnswer = $_POST['RecordHomeworkPenetration']['answer'];
                //更新数据表中的指定记录
                $update ="update {{record_homework_penetration}} set submit_count=".$count.",answer='".$newAnswer."',start_time='".$beginTime."',end_time='".$endTime."',lated_date='".$lated_date."'where id =".$id;
                $connect = Yii::app()->db;
                $status= $connect->createCommand($update)->execute(); 
                if($status){
                    $this ->redirect(SITE_URL.'/index.php?r=train/over&id='.$trainId.'&model='.$trainModel.'&name='.$name);   
                }  
            } 
         }
         $this ->render('indexTask',array('level'=>$level,'startTime'=>$startTime,'sflag'=>$sflag,'recordInfos'=>$recordInfos,
           'configModel'=>$configModel,'configInfos'=>$configInfos,'recordModel'=>$recordModel));
         break;
     }  
    }
    
    
    /*
     * sqli SQL注入渗透测试训练
     * @access public
     * @since 2017-01-10
     */
    function actionSqli($trainId,$trainModel){ 
        switch($trainModel){ 
        case 1: //自主训练模式，查询sw_train_config表，获取对应信息
          $configModel = TrainConfig::model(); 
          //获取对应id号的配置记录
          $sql =  "select * from {{train_config}} where train_id = ".$trainId;  //应该改为参数化查询，比较安全；
          break;
        case 2://教师作业，从sw_homework_penetration查询作业信息
            $configModel = HomeworkPenetration::model(); 
          //获取对应id号的配置记录
          $sql =  "select * from {{homework_penetration}} where train_id = ".$trainId;  //应该改为参数化查询，比较安全；
          break;
       }
          $configInfos = $configModel -> findAllBySql($sql);
        foreach($configInfos as $infos){
            $trainLevel = $infos->train_level;
        }
         switch($trainLevel){ //根据训练难度渲染不同的训练页面
            case 1:
                $level = '低';
                $this -> render('sqliLow',array('level'=>$level,'configModel'=>$configModel,'configInfos'=>$configInfos ));
                break;
            case 2:
                $level = '中'; 
                $this -> render('sqliMedium',array('level'=>$level,'configModel'=>$configModel,'configInfos'=>$configInfos ));
                break;
            case 3:
                $level = '高'; 
                $this -> render('sqliHigh',array('level'=>$level,'configModel'=>$configModel,'configInfos'=>$configInfos ));
                break;
        }    
    }
    
    /*
     * ViewSource  查看漏洞源码功能：不同的漏洞和难度级别对应不同的源码
     * @access public
     * @param mixed $hole 漏洞
     * @param mixed $trainLevel 训练难度
     * @since 2017-01-10
     */
    function actionViewSource($trainLevel,$hole){ //具体的sqli页面获取
         //创建对象
        $configModel = TrainConfig::model(); 
        //获得最新的训练配置表记录
        $sql =  "select top 1 * from {{train_config}} order by train_id desc"; 
        $configInfos = $configModel -> findAllBySql($sql);
        switch($trainLevel){
            case 1:
            $level = '低';
            case 2:
             $level = '中'; 
            case 3:
             $level = '高'; 
        }
         $this ->render('index',array('level'=>$level,'configModel'=>$configModel,'configInfos '=>$configInfos ));
    }
    
    
    
    
    
}

