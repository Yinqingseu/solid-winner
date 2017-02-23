<?php
/*
 * 训练模块控制器
 * ③训练模块控制器C的定义
 * @author 殷青
 * @version 1.0
 * @since 2016-10-26
 */
class TrainController extends Controller{
    public $layout = '//layouts/train';
    /*
     * Index 训练模块功能展示界面
     * @access public
     * @since 2016-10-26
     * @version 1.0
     */
       function actionIndex(){
        $this ->render('index');
    }
    
     /*
     * Model 训练模式选择：自主训练和 老师布置的训练作业
     * @access public
     * @param mixed $id 表示训练类型：1：渗透测试训练 2：靶场训练 3：攻防训练 4：攻防实例
     $id 由index.php获得。
     * @since 2017-01-12
     * @version 1.0
     */
       function actionModel($id){
           switch($id){
            case 1:
                $this ->render('penetrationModel');
                break;
            case 2:
                $this ->render('targetModel');
                break;
            case 3:
                $this ->render('odModel');
                break;
           }
    }
    
    
    /*
     * MediaList  攻防实例视频展示界面：提供用户选择需要播放的视频
     * @access public
     * @since 2016-10-26
     * @version 1.0
     */
    function actionMediaConfig(){
        //创建对象
        $configModel = new TrainMediaConfig(); 
        $mediaModel = TrainMedia::model();
        //从数据库获取视频列表名的信息
        $sql = "select media_name from {{train_media}}";
        $media = $mediaModel->findAllBySql($sql);
            $i=1;
            foreach($media as $v){
                $medias[$i] = $v->media_name; //$medias中保存从数据表中获取的视频名称
                $i++;
            }
            if(isset($_POST['TrainMediaConfig'])){
                //给模型收集表单信息
                $configModel -> attributes = $_POST['TrainMediaConfig'];
                //将信息存储到数据库中
                if($configModel -> save())
                    $this -> redirect(SITE_URL.'/index.php?r=train/play&trainId='.$configModel->train_id);
                 //通过控制器方法调用视图
            }
            $this ->render('mediaConfig',array('configModel'=>$configModel,'medias'=>$medias,'mediaModel'=>$mediaModel));
        }

    /*
     * MediaPlay  攻防实例视频播放界面
     * @access public
     * 根据trainId获取对应的配置信息。
     * @param mixed $trainId 训练ID号
     * @since 2016-10-26
     * @version 1.0
     */
    function actionPlay($trainId){ 
         $mediaModel = TrainMedia::model();
         $recordModel = new RecordSelftestMedia();
        //从数据库获取视频列表名的信息
        $query = "select media_name from {{train_media}}";
        $media = $mediaModel->findAllBySql($query);
            $i=1;
            foreach($media as $v){
                $medias[$i] = $v->media_name; //$medias中保存从数据表中获取的视频名称
                $i++;
            }
        $configModel = TrainMediaConfig::model();
        $sql = "select * from {{media_config}} where train_id=".$trainId; 
        $configInfos  = $configModel->findAllBySql($sql);
         foreach($configInfos  as $s){
                $mediaName  =$medias[$s->media_id];
            }
         /************用户提交数据，添加记录至数据库************/
         if(isset($_POST['RecordSelftestMedia'])){ //如果用户提交了数据
            $recordModel->attributes = $_POST['RecordSelftestMedia'];
            $endTime = date("Y-m-d H:i:s"); 
            $beginTime = $_POST['RecordSelftestMedia']['start_time'];
            $recordModel->start_time = $beginTime;
            $recordModel->end_time = $endTime;
            //新建记录
            foreach($configInfos as $v){
                $recordModel->test_id = $trainId;
                $recordModel->test_type = 1;
                $recordModel->test_name = $v->train_name;
                $recordModel->test_date =date("Y-m-d");
                $recordModel->userid =Yii::app()->user->id;
                $recordModel->username =Yii::app()->user->name;
                $recordModel ->start_time = $beginTime;
                $recordModel ->end_time = $endTime;
            }
            //将信息存储至数据库中
            if($recordModel->save()){
                 $this ->redirect(SITE_URL.'/index.php?r=train/over&id='.$trainId.'&model=1'.'&type=4');  //重定向   
            }
         }     
        
        $this ->render('play',array('mediaName'=>$mediaName ,'configInfos'=>$configInfos ,'recordModel'=>$recordModel));
    }
    
      /*
     * Over  训练结束页面
     * @access public
     * @param mixed $id  训练ID
     * @param mixed $type 训练类型：1：渗透测试 2：靶场 3：攻防 4：攻防训练
     * @param mixed $model 训练模式：1：自主训练 2：教师作业
     * @since 2017-01-14
     * @version 1.0
     */
    function actionOver($id,$type,$model){ 
        switch ($type){  //根据训练类型和模式分别创建模型
            case 1: //渗透测试训练
                if($model ==1){
                $recordModel = RecordSelftestPenetration::model();
                $sql = "select * from {{record_selftest_penetration}} where test_id=".$id;
                $recordInfos = $recordModel -> findAllBySql($sql);
                break;
                }elseif($model ==2){
                $recordModel = RecordHomeworkPenetration::model();
                $sql = "select * from {{record_homework_penetration}} where homework_id=".$id;
                $recordInfos = $recordModel -> findAllBySql($sql);
                }
            case 2: //靶场训练
               break;
            case 3: //攻防训练
               break;
            case 4: //攻防实例
                if($model ==1){
                $recordModel = RecordSelftestMedia::model();
                $sql = "select * from {{record_selftest_media}} where test_id=".$id;
                $recordInfos = $recordModel -> findAllBySql($sql);
                }
               break;
        }
        $this ->render('over',array('id'=>$id,'model'=>$model,'recordInfos'=>$recordInfos));
    }
    
     /*
     * Record  历史训练信息展示页面
     * @access public
     * @param mixed $id  用户id
     * @param mixed $right 用户权限：普通用户：1 教师：2 管理员3：3 不同权限的用户可以查看的内容不同，
     * 普通用户只能查看自己的历史训练信息，教师能够查看自己班里学生的信息，管理员可查看全部信息
     * @param mixed $type  训练类型：1：渗透测试训练，2：靶场训练，3：攻防训练 4：攻防实例训练
     * 不同的训练类型，需要不同的model，因此根据训练类型访问对应的数据表
     * @since 2017-01-14
     * @version 1.0
     */
    function actionRecord($id,$right,$type){ 
        switch($type){
            case 1:
                $this ->render('recordPenetration',array('id'=>$id,'right'=>$right));//渗透测试训练记录
                break;
            case 2:
                $this ->render('recordTarget',array('id'=>$id,'right'=>$right)); //靶场训练记录
                break;
            case 3:
                $this ->render('recordOd',array('id'=>$id,'right'=>$right)); //攻防训练记录 
                break;
            case 4:
            $this ->render('recordMedia',array('id'=>$id,'right'=>$right)); //攻防实例训练记录    
                break;
        }
        $this ->render('record',array('id'=>$id,'right'=>$right));
    }
    
    
     /*
     * TargetTrain 靶场训练
     * @access public
     * @since 2016-12-27
     * @version 1.0
     */
       function actionTargetTrain(){
           $this->render('targetTrain');
    }
   
    /*
     * TargetTrain 攻防训练
     * @access public
     * @since 2016-12-27
     * @version 1.0
     */
       function actionODTrain(){
           $this->render('odefenceTrain');
    }
    

}
