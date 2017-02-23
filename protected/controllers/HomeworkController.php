<?php
/*
 * 作业控制器
 * 作业 控制器C的定义
 * @author 殷青
 * @version 1.0
 * @since 2017-01-12
 */
class HomeworkController extends Controller{
 public $layout = '//layouts/train';
    
    /*
     * Index 作业功能展示界面 :主要功能是查询
     * @access public
     * @since 2017-01-12
     * @version 1.0
     */
       function actionIndex(){
        $this ->render('index');
    }
    
    
     /*
     * Train 学生获取训练模块作业
     * @access public
      @param mixed $id 作业类型：1：渗透测试训练 2：靶场训练 3：攻防训练 
     * @since 2017-01-12
     * @version 1.0
     */
       function actionTrain($id){
         $userId = Yii::app()->user->id;  
         switch($id){
            case 1:
                //创建配置模型
                $searchModel = new SearchTaskID();
                $taskModel = HomeworkPenetration::model();
                $recordModel = RecordHomeworkPenetration::model();
                if(isset($_POST['SearchTaskID'])){
                    $taskId = $_POST['SearchTaskID']['task_id'];
                    //使输入的字符为整型
                       settype($taskId,"int");
                    $sql = "select  * from {{homework_penetration}} where train_id=".$taskId; //应该改为参数化查询，比较安全；
                    $taskInfo = $taskModel->findAllBySql($sql);
                    if(!empty($taskInfo)){  //若作业号存在
                        $sqltmp = "select * from {{record_homework_penetration}} where homework_id=".$taskId."and userid=".$userId; //查询数据库中是否存在记录
                        $recordInfos = $recordModel-> findAllBySql($sqltmp);
                        $status = 0;  //标识作业状态：1为已完成
                        if(!empty($recordInfos)){
                            $status = 1;
                        }
                        foreach($taskInfo as $v){
                            $level = $v->train_level;
                            $deadline = $v->deadline;
                        }
                        switch($level){case 1:$level = '低';break;case 2:$level = '中';break;case 3:$level = '高';break;}
                        date_default_timezone_set("Asia/Shanghai");
                        $now = date("Y-m-d");
                        /*比较时间是否超出deadline*/
                        $nowTime = explode('-', $now);
                        $endTime = explode('-', $deadline);
                        if($status == 0){ //在作业未完成的情况下判断是否已超期
                            if($nowTime[0]>$endTime[0]){ //年
                                $status =2;
                            }elseif ($nowTime[0]==$endTime[0]) {
                                if($nowTime[1]>$endTime[1]){ //月
                                    $status = 2;
                                }elseif ($nowTime[1]==$endTime[1]) {
                                    if($nowTime[2]>$endTime[2]){//日
                                       $status = 2; }
                                }   
                            }
                        }
                        $this->render('taskPenetrationContent',array('taskInfo'=>$taskInfo,'taskModel'=>$taskModel,'level'=>$level,'status'=>$status));  //重定向
                        break;
                    }else{
                        Yii::app()->user->setFlash('id_error','作业号不存在');
                    }
                 } 
                $this ->render('taskPenetration',array('searchModel'=>$searchModel,'recordModel'=>$recordModel));
                break;
            case 2:
                $this ->render('taskTargetTrain');
                break;
            case 3:
                $this ->render('taskOdTrain');
                break;
           }
    }
    
    
    /*
     * Train 学生获取扫描模块作业
     * @access public
      @param mixed $id 扫描类型：1：应用软件扫描 2：网站扫描 3：主机扫描 
     * @since 2017-01-18
     * @version 1.0
     */
       function actionScan($id){
          $this->layout='//layouts/scan';
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
            $selfCheck[1]='控制台';
            $selfCheck[2]='脚本';
            $userId = Yii::app()->user->id;
            $status = 0;  //标识作业状态：0已完成 1为已完成 2：超期不可做
         switch($id){
         case 1:
             $this->render('taskSoftwareScan');
             break;
        case 2:
            $searchModel = new SearchTaskID();
            $taskModel = HomeworkWebScan::model();
            $recordModel = RecordHomeworkWebScan::model();
            if(isset($_POST['SearchTaskID'])){
                $taskId = $_POST['SearchTaskID']['task_id'];
                settype($taskId,"int"); //使输入的字符为整型
                $sql = "select  * from {{homework_webscan}} where scan_id=".$taskId; //应该改为参数化查询，比较安全；
                $taskInfo = $taskModel->findAllBySql($sql);
                if(!empty($taskInfo)){  //若作业号存在
                    /*查询作业状态*/
                    $sqltmp = "select * from {{record_homework_webscan}} where homework_id=".$taskId."and userid=".$userId;
                    $recordInfos = $recordModel-> findAllBySql($sqltmp);
                    if(!empty($recordInfos)){
                        $status = 1;
                    }
                    /***获取作业内容***/
                    foreach($taskInfo as $v){
                     $taskId = $v->scan_id;
                     $deadline = $v->deadline;
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
                date_default_timezone_set("Asia/Shanghai");
                $now = date("Y-m-d");
                /*比较时间是否超出deadline*/
                $nowTime = explode('-', $now);
                $endTime = explode('-', $deadline);
                if($status == 0){ //在作业未完成的情况下判断是否已超期
                    if($nowTime[0]>$endTime[0]){ //年
                        $status =2;
                    }elseif ($nowTime[0]==$endTime[0]) {
                        if($nowTime[1]>$endTime[1]){ //月
                            $status = 2;
                        }elseif ($nowTime[1]==$endTime[1]) {
                            if($nowTime[2]>$endTime[2]){//日
                               $status = 2; }
                        }   
                    }
                }
                $this->render('taskWebscanContent',array('taskInfo'=>$taskInfo,'taskModel'=>$taskModel,
                    'hole'=>$hole,'choice'=>$choice,'tool'=>$tool,'selfCheck'=>$selfCheck,'status'=>$status));  //跳转至展示作业内容页面
                break;
                }else{
                    Yii::app()->user->setFlash('id_error','作业号不存在');
                }
             } 
            $this->render('taskWebscan',array('searchModel'=>$searchModel));
           break;
        case 3:
            $this->render('taskHostscan');
          break;     
             
         }     
    }

    /**
     * HomeworkConfig  教师作业配置页面   
     * @access public
     * @since 2017-01-08
     * @version 1.1
     */
    public function actionTRCombatConfig(){
        $this->layout = '//layouts/targetRangeCombatLayout';
        return $this->render('trCombatConfig');
    }
    
    /**
     *HomeworkHelp 教师作业配置帮助
     * @access public
     * @since 2016-11-19
     * @version 1.0
     */
    public function actionTRCombatHelp(){
         //$trModel = new Rules();规则对象
        $this->layout = '//layouts/targetRangeCombatLayout';
        return $this->render('trCombatHelp');
     }
   
    
}
    