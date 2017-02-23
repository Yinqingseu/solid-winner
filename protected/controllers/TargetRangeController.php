<?php

/**
 * 靶场模块控制器
 * 靶场模块控制器C的定义
 * @author 徐婧
 * @version 1.2
 * @since 2016-10-27，2016-12-01,2017-01-08
 */
class TargetRangeController extends Controller{
    //该控制器下的view文件夹下对应的视图文件，如果是render方法渲染，则使用一下的布局文件进行实现
    public $layout = '//layouts/targetRangeCombatLayout';//
    
    /**
     * Layout  靶场模块首页，靶场模块介绍文字，小模块按钮按钮
     * @access public
     * @since 2016-10-26，2017-01-08
     * @version 1.1
     */
    public function actionIndex(){        
        $this->render('index');
    }
    /**
     * Combat  靶场实战首页，靶场实战介绍文字
     * @access public
     * @since 2017-01-08
     * @version 1.1
     */
    public function actionCombat(){        
        $this->render('combat');
    }
    
    /**
     * TaskOrigin  实验来源选择，进入不同的配置页面，进入教师作业或者是自主竞赛配置页面，需要的参数不同   
     * @access public
     * @since 2017-01-08
     * @version 1.1
     */
    public function actionTaskOrigin(){        
        $this->render('taskOrigin');
    }
    
     /**
     * RulesConfig  自主实验配置参数
     * 制定靶场比赛规则
     * @access public
     * @param mixed $userID  确定设置规则的用户，用user_id进行区分，且user_id 应该是全局变量，因为多次需要传递
     * @since 2016-10-26，2016-12-16
     * @version 1.0
     */
    public function actionRulesConfig(){
        //初始化
        $trModel = new TargetRangeCombat();
        $trTeam = new TrTeam();
        $numberID = "null";
        $databaseState = "not save";
        $teamSuccessFlag = "not save";
        $teamJoinSuccessFlag = "not save";
        $trTeamNumberIDInfo = null;
        $trTeamInfo = $trTeam;
        $trModelInfo = $trModel;        
        
        //单选按钮  模式
        $type[1] = "单人";
        $type[2] = "多人";
        //单选按钮  多人模式下的主从机选择
        $teamType[1] = "主机";
        $teamType[2] = "从机";
        //单选按钮  目标
        $target[1] = "主机";
        $target[2] = "网站";
        $target[3] = "手机";
        //多选按钮 靶场主机任务
        $taskZhuJi[1] ="请选择";
        $taskZhuJi[2] ="获取Administrator控制权";
        $taskZhuJi[3] ="D盘新建文件";
        $taskZhuJi[4] ="D盘删除文件";
        $taskZhuJi[5] ="更改数据库数据";
        $taskZhuJi[6] ="删除数据库表单";
        $taskZhuJi[7] ="删除系统日志";
        $taskZhuJi[8] ="安装木马脚本";
        //多选按钮 靶场网站任务
        $taskWeb[1] ="请选择";
        $taskWeb[2] ="更改数据库数据";
        $taskWeb[3] ="删除数据库表单";
        $taskWeb[4] ="更改用户权限";
        $taskWeb[5] ="删除系统日志";
        $taskWeb[6] ="安装木马脚本";
        //多选按钮 靶场手机任务
        $taskPhone[1] ="请选择";
        $taskPhone[2] ="更改手机APP";
        $taskPhone[3] ="删除手机APP";
        $taskPhone[4] ="删除系统日志";
        $taskPhone[5] ="安装木马脚本";          
                        
        if(isset($_POST['TrTeam']['trTeamFlag'])&&($_POST['TrTeam']['trTeamFlag'] == true) ){
           if($_POST['TrTeam']['team_type'] == 1){//为主机时的配置
                $trTeam = new TrTeam();                
                if(isset($_POST['TrTeam'])&&$_POST['TrTeam']['name'] != null){
                    //用attributes记录传递的值            
                    $trTeam -> attributes = $_POST['TrTeam'];                    
                    $trTeam -> leader_id = Yii::app()->user->id;//队长的id为创建者的id
                    $trTeam -> user_one_id = Yii::app()->user->id;
                    $trTeam -> member_num = 1; //设置团队人数为1，
                    $time = date("Y_m_d_H_i_s", time());//获取当前时间，格式：年_月_日_时_分_秒
                    $TeamNumberID = "TR_".$time."_Team";//生成队伍编号
                    Yii::app()->session['trTeamNumberIDInfo'] = $TeamNumberID;
                    Yii::app()->session['trTeamName'] = $trTeam -> name;
                    $trTeam -> numberID = $TeamNumberID;
                    $trTeam -> setup_time = date("Y-m-d H:i:s", time());//获取当前时间                    
                    if($trTeam ->save()){
                        Yii::app()->user->setFlash('teamSuccess','队伍创建成功！');
                        Yii::app()->user->setFlash('TRTeamnumberID',"团队编号为：".$TeamNumberID);
                        Yii::app()->user->setFlash('TRTeamName',"团队名称为：".Yii::app()->session['trTeamName']);
                        $teamSuccessFlag = "success";
                    }else{
                        $teamSuccessFlag = "failed";
                        Yii::app()->user->setFlash('teamFailed','队伍创建失败！');//与加入成功进行区分，因为下面还需要配置信息
                    }
                }else{
                    $teamSuccessFlag = "failed";
                    Yii::app()->user->setFlash('teamFailed','团队名称为空！');
                }
           }else if($_POST['TrTeam']['team_type'] == 2){//为从机时的配置
                $trTeam = TrTeam::model();
                if(isset($_POST['TrTeam'])&&$_POST['TrTeam']['numberID'] != null){
                    $TeamNumberID = $_POST['TrTeam']['numberID'];                       
//                    $sql = "select numberID from {{tr_team}} where numberID =".$TeamNumberID;                    
                    $trTeamInfo = $trTeam ->findByAttributes(array('numberID' => $TeamNumberID));                   
                    if($trTeamInfo == null){//判断团队编号是否在数据库中，如果编号不在
                        Yii::app()->user->setFlash('teamJoinFailed','队伍编号错误！');                        
                        $teamJoinSuccessFlag = "jionFailed";
                    }else{//如果编号在
                        $teamName = $trTeamInfo -> name;
                        $trTeamInfo -> attributes = $_POST["TrTeam"];//还要获取别的属性，以满足rules()验证
                        $trTeamInfo -> name = $teamName;//因为从机提交的时候是没有名称的，如果不赋值，则$trTeamInfo当中name 值会变成null
                        Yii::app()->session['trTeamName'] = $teamName;
                        $trTeamInfo -> numberID = $_POST['TrTeam']['numberID'];                        
                        $trTeamInfo -> update_time = date("Y-m-d H:i:s", time());//获取当前时间                        
                        if($trTeamInfo -> member_num <= 2){//如果团队的人数不超过2个人还可以加入
                            if($trTeamInfo -> user_one_id == Yii::app()->user->id  ||
                               $trTeamInfo -> user_two_id == Yii::app()->user->id  ||
                               $trTeamInfo -> user_three_id == Yii::app()->user->id )
                            {//可能日后出现删掉团队当中某一个人，需要判断所有的id是否和目前用户id一致
                                $teamJoinSuccessFlag = "jionFailed";
                                Yii::app()->user->setFlash('teamJoinFailed','不可以重复加入！');
                            }else{
                                if($trTeamInfo -> member_num == 1){
                                    $trTeamInfo -> user_two_id = Yii::app()->user->id;
                                }else{
                                    $trTeamInfo -> user_three_id = Yii::app()->user->id;
                                }
                                $trTeamInfo -> member_num = $trTeamInfo -> member_num + 1; //团队人数加1                                   
                                //--------------------------------根据团队编号 获取在target_range_combat表中 主机已经配置好的信息    BEGIN--------------------------------
                                $trTeamNumberIDInfo = $trTeamInfo -> numberID;
                                $trModel = TargetRangeCombat::model();
                                $trModelInfo = $trModel ->findByAttributes(array('team_info' => $trTeamNumberIDInfo));                                    
                                if($trModelInfo ==null){
                                    $teamJoinSuccessFlag = "jionFailed";
                                    Yii::app()->user->setFlash('teamJoinFailed','主机没有配置实战信息！');
                                    $TrName = NULL;
                                    $TrTarget = NULL;
                                    $TrTask = NULL;
                                    $trNumberID = NULL;
                                }else{
                                    $trNumberID = $trModelInfo -> numberID;//实验编号
                                    Yii::app()->session['trCurrentID'] = $trNumberID;//从机获取主机配置的“实验编号”并进行保存session
                                    $TrName = $trModelInfo -> name;//实验名称
                                    $TrTarget = $target[$trModelInfo -> target];//靶场目标
                                    if($trModelInfo -> task_zhuji){
                                        $TrTask = $taskZhuJi[$trModelInfo -> task_zhuji];//靶场主机任务
                                    }
                                    if($trModelInfo -> task_web){
                                        $TrTask = $taskWeb[$trModelInfo -> task_web];//靶场网站任务
                                    }
                                    if($trModelInfo -> task_phone){
                                        $TrTask = $taskWeb[$trModelInfo -> task_phone];//靶场手机任务
                                    }
                                    //------------------------------------------------------------END--------------------------------------------------------------                                                                                                                                                 
                                    if($trTeamInfo ->save()){
                                        Yii::app()->user->setFlash('teamJoinSuccess','队伍加入成功！');
                                        Yii::app()->user->setFlash('TRTeamnumberID',"团队编号为：".$TeamNumberID);
                                        Yii::app()->user->setFlash('TRTeamName',"团队名称为：".$teamName);                                
                                        $teamJoinSuccessFlag = "jionSuccess";                          
                                        //----------------从机获取主机配置好的信息  BEGIN----------------------------------
                                        Yii::app()->user->setFlash('TrNumberID',$trNumberID);//实验编号
                                        Yii::app()->user->setFlash('TrName',$TrName);//实验名称
                                        Yii::app()->user->setFlash('TrTarget',$TrTarget);//靶场目标
                                        Yii::app()->user->setFlash('TrTask',$TrTask);//靶场目标任务
                                        //--------------------------------------END---------------------------------------
                                    }else{
                                        Yii::app()->user->setFlash('teamJoinFailed','队伍加入失败！');
                                        $teamJoinSuccessFlag = "jionFailed";
                                    }
                                }                                
                            }                         
                        }else{
                            if($trTeamInfo -> user_one_id == Yii::app()->user->id||
                                $trTeamInfo -> user_two_id == Yii::app()->user->id ||
                                $trTeamInfo -> user_three_id == Yii::app()->user->id )
                            {
                                $teamJoinSuccessFlag = "jionFailed";
                                Yii::app()->user->setFlash('teamJoinFailed','队伍已满,并且请不要重复加入！');
                            }else{
                                $teamJoinSuccessFlag = "jionFailed";
                                Yii::app()->user->setFlash('teamJoinFailed','队伍已满！');
                            }                           
                        }
                    }
                }else{
                    $teamJoinSuccessFlag = "jionFailed";
                    Yii::app()->user->setFlash('teamJoinFailed','输入团队编号为空！');
                }                
            }else{               
               $teamJoinSuccessFlag = "what?";
            }           
        }                
        if(isset($_POST['TargetRangeCombat']['trChangeFlag'])&&$_POST['TargetRangeCombat']['trChangeFlag']==FALSE){
            $trModel = new TargetRangeCombat();
            if(isset($_POST['TargetRangeCombat'])){
                //用attributes记录传递的值            
                $trModel -> attributes = $_POST['TargetRangeCombat'];                    
                /*清除掉用户来回选择时的记录，若单选主机，则另外两个单选按钮对应的task值为空，其余同理*/            
                if($trModel->target ==1){
                    $typeName = "ZJ";//numberID首字母，代表主机
                    $trModel->task_web = 0;
                    $trModel->task_phone =0; 
                }elseif ($trModel->target ==2) {
                    $typeName = "W";//numberID首字母，代表网站
                    $trModel->task_zhuji = 0;
                    $trModel->task_phone =0; 
                }elseif ($trModel->target ==3) {
                    $typeName = "P";//numberID首字母，代表手机
                    $trModel->task_zhuji = 0;
                    $trModel->task_web =0; 
                }else{
                    $typeName = "null";
                    $trModel->task_zhuji = 0;
                    $trModel->task_web =0;
                    $trModel->task_phone =0;
                }
                //处理队伍信息，将队伍信息进行存储，尚未处理主机与从机的具体配置
                $trModel -> team_info = Yii::app()->session['trTeamNumberIDInfo'];//将队伍信息进行存储---与numberID对应          
                $trModel -> setup_time = date("Y-m-d H:i:s", time());//获取当前时间
                $trModel -> user_id = Yii::app()->user->id;//用户ID                         
                /*记录至数据库并返回给用户，本次实战的编号 格式: 目标类型_年_月_日_时_分_秒_用户名*/
                $user_name = Yii::app()->user->name;//用户名
                $time = date("Y_m_d_H_i_s", time());//获取当前时间，格式：年_月_日_时_分_秒
                $numberID = $typeName."_".$time."_".$user_name;//生成实战编号
                $trModel -> numberID = $numberID;

                if($trModel ->save()){
                    Yii::app()->session['trCurrentID'] = $trModel -> id;
                    Yii::app()->user->setFlash('databaseSuccess','保存成功，请提交！');
                    Yii::app()->user->setFlash('TRnumberID',"实验编号为：".$numberID);
                    if($trModel -> type == 2){
                        Yii::app()->user->setFlash('TRTeamnumberID',"团队编号为：".Yii::app()->session['trTeamNumberIDInfo']);
                        Yii::app()->user->setFlash('TRTeamName',"团队名称为：".Yii::app()->session['trTeamName']);
                    }
                    $databaseState = "success";
                 }else{
                    $databaseState = "failed";
                    Yii::app()->user->setFlash('databaseSuccess','保存失败！');
                 }
            }
        }else if(isset($_POST['TargetRangeCombat']['trChangeFlag'])&&$_POST['TargetRangeCombat']['trChangeFlag']==true){
            $trModelChange = TargetRangeCombat::model();
            $trModelChange->trCurrentID = Yii::app()->session['trCurrentID'];
            $trModel = $trModelChange->findByPk($trModelChange->trCurrentID);//从数据库读取的信息都在$trModel变量里面，根据主键查询         
            $trModel -> attributes = $_POST['TargetRangeCombat'];            
                /*清除掉用户来回选择时的记录，若单选主机，则另外两个单选按钮对应的task值为空，其余同理*/            
                if($trModel->target ==1){
                    $typeName = "ZJ";//numberID首字母，代表主机
                    $trModel->task_web = 0;
                    $trModel->task_phone =0; 
                }elseif ($trModel->target ==2) {
                    $typeName = "W";//numberID首字母，代表网站
                    $trModel->task_zhuji = 0;
                    $trModel->task_phone =0; 
                }elseif ($trModel->target ==3) {
                    $typeName = "P";//numberID首字母，代表手机
                    $trModel->task_zhuji = 0;
                    $trModel->task_web =0; 
                }else{
                    $typeName = "null";
                    $trModel->task_zhuji = 0;
                    $trModel->task_web =0;
                    $trModel->task_phone =0;
                }
                //处理队伍信息，将队伍信息进行存储，尚未处理主机与从机的具体配置                
                $trModel -> update_time = date("Y-m-d H:i:s", time());//获取当前时间,为更新时间
                $numberID = $trModel -> numberID;//读取实战编号
                if($trModel ->save()){
                    Yii::app()->session['trCurrentID'] = $trModel -> id;
                    Yii::app()->user->setFlash('databaseSuccess','修改信息成功，请提交！');
                    Yii::app()->user->setFlash('TRnumberID',"实验编号为：".$numberID);
                    if($trModel -> type == 2){
                        Yii::app()->user->setFlash('TRTeamnumberID',"团队编号为：".Yii::app()->session['trTeamNumberIDInfo']);
                        Yii::app()->user->setFlash('TRTeamName',"团队名称为：".Yii::app()->session['trTeamName']);
                    }
                    $databaseState = "success";
                }else{
                    $databaseState = "failed";
                 }
        }
        $this->render('rulesConfig',array('trModel'=>$trModel,'trTeam'=>$trTeam,'trTeamInfo'=>$trTeamInfo,'teamSuccessFlag'=>$teamSuccessFlag,'teamJoinSuccessFlag'=>$teamJoinSuccessFlag,
            'trModelInfo'=>$trModelInfo,
            'type'=>$type,'teamType'=>$teamType,
            'target'=>$target,
            'taskZhuJi'=>$taskZhuJi,'taskWeb'=>$taskWeb,'taskPhone'=>$taskPhone,
            'numberID'=>$numberID,'databaseState'=>$databaseState
                ));//将TargetRangeCombat的对象传递，并且将单选信息进行传递
     }
     
    /**
     *RulesHelp 制定靶场比赛规则相关帮助
     * @access public
     * @since 2016-11-19
     * @version 1.0
     */
    public function actionRulesHelp(){//$userID
        //$trModel = new Rules();规则对象
        $this->render('rulesHelp');//向EnvironConfig传递规则表的主键
    }
     
    
         
     /**
      * DetailInfo 对输入的信息进行更新
      * @access public
      * @since 2016-11-30
      * @version 1.0
      * @author 徐婧
      */
     public function actionDetailInfo(){
        $trModel = TargetRangeCombat::model();
        //获取当前传递的数据库靶场表主键值
        $trModel->trCurrentID = Yii::app()->session['trCurrentID'];
        $trInfo = $trModel->findByPk($trModel->trCurrentID);
        //暂时处理部分-----------------------BEGIN----------------------------------------
        $trInfo ->team_id = 2;//暂时定义
        $trInfo ->environ_id = 22;//暂时定义
        //暂时处理部分-----------------------END----------------------------------------
        $trInfo ->update_time = date("Y-m-d H:i:s", time());//获取当前时间
//        $count = $trModel ->count();//获取攻防结果表已有的记录数
        
         if(isset($_POST['TargetRangeCombat'])){
//             foreach ($_POST['TargetRangeCombat'] as $key => $value) {
//                 $trModel->$key =$value;
//             }
             if($trInfo->save()){
                $this->redirect('./index.php?r=targetRange/baseInfo');
            }else{
            }
         }else{            
            if($trInfo->save()){
            }else{
            }
         }                
         $this->render('detailInfo',array('tr_model'=>$trModel));
     }
     
     /**
      * ApplyTeam 申请队伍
      * @access public 
      * @since 2016-11-30
      * @version 1.0
      * @author 徐婧
      */
     public function actionApplyTeam(){
        $team_model = new TeamMember();//创建对象方式有别于查询              
        if(isset($_POST['TeamMember'])){
            foreach ($_POST['TeamMember'] as $key => $value) {
                $team_model->$key = $value;
            }
             $team_model -> setup_time = date("Y-m-d H:i:s", time());
             $team_model -> user_id = 1;
            if($team_model->save()){//这里使用的是由$goods_model创建出来的，且与下面使用的传递到视图模版里的变量一致
                $this->redirect('./index.php?r=targetRange/showTeamInfo');
            }
        }
         $this->render('applyTeam',array('team_model'=>$team_model));
     }
     
     /**
      * ShowTeam 查看队伍信息
      * @access public
      * @since 2016-11-30
      * @version 1.0
      * @author 徐婧
      */
     public function actionShowTeamInfo(){
         $this->render('showTeamInfo');//以表格形式查看已有队伍，并提供申请按钮
     }
     
     /**
      * ShowTeamApplyState 查看申请状态
      * @access public
      * @since 2016-11-30
      * @version 1.0
      * @author 徐婧
      */
     public function actionShowTeamApplyState(){
         $this->render('showTeamApplyState');//百度知道团队，申请之后，显示审核中，和以通过，设置state
     }
     
     /**
      * RandomTeamer 系统随机分配队友
      * @access public
      * @since 2016-11-30
      * @version 1.0
      * @author 徐婧
      */
     public function actionRandomTeamer(){
         $this->render('randomTeamer');//后期有随机分配的相关算法
     }
     
     /**
      * SelfChooseTeamer 自己选择队伍，前提自己点击申请
      * @access public
      * @since 2016-11-30
      * @version 1.0
      * @author 徐婧
      */
     public function actionSelfChooseTeamer(){
         $this->render('selfChooseTeamer');
     }
     
     /**
     * EnvironConfig 靶场环境部署
     * @access public
     * @param mixed $trID 为RoleConfig传递过来的攻防表的主键，方便一会对数据库攻防表相关内容的修改
     * @param mixed $environID 部署的场景ID，存入靶场表
     * @since 2016-11-01
     * @version 1.0
     */
    public function actionEnvironConfig(){//$trID,$environID,$userID,$rules_id
        $url = '2';//攻防为1 ，靶场为2
        $this->render('environConfig',array('url'=>$url));
    }
     
     /**
      * BaseInfo 实验前面的基本信息展示
      * @access public
      * @since 2016-11-30,2016-12-16
      * @version 1.0
      * @author 徐婧
      */
     public function actionBaseInfo(){
        //通过模型model实现数据表信息查询，产生model对象
        $trModel = TargetRangeCombat::model();
        $trModel->trCurrentID = Yii::app()->session['trCurrentID'];
        $trInfos = $trModel ->findAllByPk($trModel->trCurrentID);//展示攻防表中的角色，模式，实验名称信息
   
        $this->render('baseInfo',array('trInfos'=>$trInfos));//展示队伍表中队伍名称
     }
     /**
     * Operation 靶场操作
     * @access public
     * @since 2016-10-27,2016-12-01,2017-01-15
     * @version 1.2
     */
     public function actionOperationLayout(){
        $trModelChange = TargetRangeCombat::model();
        $trModelChange->trCurrentID = Yii::app()->session['trCurrentID'];
        $trModel = $trModelChange->findByPk($trModelChange->trCurrentID);//从数据库读取用户刚才配置的信息都在$trModel变量里面
        $numberID = $trModel->numberID;
        $type = $trModel->type;
        $operationType = '2'; //靶场模式 1 ，靶场模式 2
        $this->render('operationLayout',array('operationType'=>$operationType,'numberID'=>$numberID,"type"=>$type));//传递靶场模式给入侵检测或者是漏洞扫描模块，方便返回
     }
             
      /**
      * TrToolsInfo  靶场工具使用界面
      * @access public
      * @since 2017-01-09
      * @version 1.0
      */
     public function actionTrToolsInfo(){
         $this->renderPartial('trToolsInfo');
     }
        
     
     /**
      * ShellToolsInfo  靶场工具使用界面
      * @access public
      * @since 2017-01-09
      * @version 1.0
      */
     public function actionShellToolsInfo(){
         $this->renderPartial('shellToolsInfo');
     }
     
      /**
      * trToolsLayout  靶场工具首页
      * @access public
      * @since 2017-01-09
      * @version 1.0
      */
     public function actiontrToolsLayout(){
         $this->renderPartial('trToolsLayout');
     }
     
      /**
      * ResultShow 靶场结果展示
      * @access public
      * @since 2016-12-01
      * @version 1.0
      */
     public function actionResultShow(){
         $this->renderPartial('resultShow');
     }
     
     /**
      * ResultAll 靶场所有信息展示
      * @access public
      * @since 2016-12-01
      * @version 1.0
      */
     public function actionResultAll(){
      //通过模型model实现数据表信息查询，产生model对象
        $trModel = TargetRangeCombat::model();
        $trModel->trCurrentID = Yii::app()->session['trCurrentID'];
        $trInfos = $trModel ->findAllByPk($trModel->trCurrentID);//展示攻防表中的角色，模式，实验名称信息
   
        $this->renderPartial('resultAll',array('trInfos'=>$trInfos));//展示队伍表中队伍名称
     }
     
     /**
      * GenerateDownload 生成并下载
      * @access public
      * @since 2016-12-08
      * @version 1.0
      */
     public function actionGenerateDownload(){
         $this->render('generateDownload');
     }
     
     /**
      * ShowHistoryOperation 查看历史操作
      * @access public
      * @since 2016-12-08
      * @version 1.0
      */
     public function actionShowHistoryOperation(){
         $this->render('showHistoryOperation');
     }
     
     /**
      * Test
      * @access public
      * @since 2016-12-08
      * @version 1.0
      */
     public function actionTest(){
        $trTeam = new TrTeam();
        
        $this->render('test',array('operationType'=>$operationType,'numberID'=>$numberID,"type"=>$type));//传递靶场模式给入侵检测或者是漏洞扫描模块，方便返回
     
     }
     
     
     
     //---------------------------------------------------------------------------------------------------------------------------------//
     
    
     /**
     * TrSync 靶场进度同步是后台监视模块 靶场监视的接口，可以通过该接口对攻防表中已有的结果进行展示，允许管理员修改
     * @access public
     * @since 2016-10-27
     * @version 1.0
     */
    public function actionTrSync(){
//        $trModel = new TargetRangeCombat()
//        $trResultModel = new TargetRangeCombatResult();
        $this->render('trSync');//应该传递靶场表的对象和靶场结果表对象，对其属性进行展示并给予相关操作
                                        //$trModel传进来的攻防模块的对象，可以对其属性进行调用
     }
    /**
     * ResultJudge 比赛结果判定
     * @access public
     * @param mixed $trID 为靶场表的主键，保存至数据库攻防结果表
     * @since 2016-10-27
     * @version 1.0
     */    
    public function actionResultJudge(){//$trID
        $trModel = new Combat();
        $trResultModel = new TargetRangeCombatResult();
        
        //$sql = 'select * from sw_offence_defence_result';

        $count = $trResultModel ->count();//查询攻防结果表已有的记录数
        
        $trID = 10;
        $chooseModel = '2';//攻防类型 1 ，靶场模型 2
        $resultID = (int)$count + 1;//用于存入数据库

        $trResultModel->result = 90;
        $trResultModel->description ='Good Job'.$resultID;        
        $trResultModel->duration = '100min';
        $trResultModel->tr_id = $trID;
        $trResultModel->setup_time = date("Y-m-d H:i:s", time());
        if($trResultModel->save())
            //$this ->redirect ('./index.php?r=combat/resultDisplay');  //重定向
           $state = "success";
        $this->render('resultJudge',array('id'=>$resultID,'chooseModel'=>$chooseModel,'state'=>$state));//传递trID,chooseModel给实战模块的实战结果展示
    }

    /**
     * More 更多
     * @access public
     * @since 2016-11-19
     * @version 1.0
     */  
     public function  actionMore(){

        $this->render('more');
     }
}