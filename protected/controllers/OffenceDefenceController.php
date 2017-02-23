<?php

/**
 * 攻防模块控制器
 * 攻防模块控制器C的定义
 * @author 徐婧
 * @version 1.0
 * @since 2016-10-26
 */
class  OffenceDefenceController extends Controller{
    
    /**
     * Layout 攻防模块页面展示，攻防基本配置，攻防操作，（攻防检测记录），攻防结果
     * @access public
     * @since 2016-10-26
     * @version 1.0
     */
    public function actionLayout(){
        $this->render('layout');
    }    
     /**
     * ConfigHelp 更多
     * @access public
     * @since 2016-11-19,2016-11-30
     * @version 1.1
     */  
     public function  actionConfigHelp(){
        $this->render('configHelp');
     }       
     /**
      * RoleModelConfig 角色，模式选择
      * @access public=
      * @since 2016-11-30
      * @version 1.0
      * @author 徐婧
      */
     public function actionRoleModelConfig(){
         //实例化数据模型对象OffenceDefence
         $odModel = new OffenceDefence();
         //单选按钮  模式
         $type[1] = "单人";
         $type[2] = "多人";
         //单选按钮  角色
         $role[1] = "攻击者";
         $role[2] = "防御者";
         
         if(isset($_POST['OffenceDefence'])){
            //分别记录传递的值
//            $odModel -> type = $_POST['OffenceDefence']['type'];
//            $odModel -> role = $_POST['OffenceDefence']['role'];
            //用attributes记录传递的值
            $odModel -> attributes = $_POST['OffenceDefence'];
            $odModel -> setup_time = date("Y-m-d H:i:s", time());//获取当前时间
            $odModel -> user_id = 1;//用户ID  -----暂时定义，实际应该是user的session值
            $odModel -> team_id = 0;//队伍ID  -----暂时定义，实际应该看如果是多人攻&防才会有队伍
            if($odModel ->save()){
                Yii::app()->session['odCurrentID'] = $odModel -> id;
                $this ->redirect('./index.php?r=offenceDefence/detailInfo');
             }
         }
//         if(isset($_POST['OffenceDefence'])){
//             $odModel -> attributes = $_POST['OffenceDefence'];            
//             if($odModel ->save()){
//                 $this ->redirect('./index.php?r=offenceDefence/detailInfo');
//             }
//         }
         //将OffenceDefence的对象传递，并且将单选信息进行传递
         $this->render('roleConfig',array('odModel'=>$odModel,'role'=>$role,'type'=>$type));
     }     
     /**
      * DetailInfo 对手分配，组队信息，环境配置
      * @access public
      * @since 2016-11-30,2016-12-15
      * @version 1.0
      * @author 徐婧
      */
     public function actionDetailInfo(){
        //对输入的信息进行更新
        $odModel = OffenceDefence::model();
        //获取当前传递的数据库攻防表主键值
        $odModel->odCurrentID = Yii::app()->session['odCurrentID'];
        $odInfo = $odModel->findByPk($odModel->odCurrentID);//由主键进行查询，里面有攻防信息，所以传递的是它
        //暂时处理部分-----------------------BEGIN----------------------------------------
        $odInfo -> environ_id = 22;//暂时定义
        $odInfo -> team_id = 2;//暂时定义
        //暂时处理部分-----------------------END----------------------------------------
        $odInfo -> update_time = date("Y-m-d H:i:s", time());//获取当前时间
        //$count = $odModel ->count();//获取攻防结果表已有的记录数
        if(isset($_POST['OffenceDefence'])){
//            foreach ($_POST['OffenceDefence'] as $key => $value) {
//                $odModel->$key =$value;
//            }  
            //记录更新时间
            if($odInfo->save()){
                $this->redirect('./index.php?r=offenceDefence/baseInfo');
            }
        }else{            
            if($odInfo->save()){
            }else{
            }
         }
        $this->render('detailInfo',array('od_model'=>$odInfo));
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
                $this->redirect('./index.php?r=offenceDefence/showTeamInfo');
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
      * BaseInfo 实验前面的基本信息展示
      * @access public
      * @since 2016-11-30
      * @version 1.0
      * @author 徐婧
      */
     public function actionBaseInfo(){         
         //通过模型model实现数据表信息查询，产生model对象
        $odModel = OffenceDefence::model();
        $odModel->odCurrentID = Yii::app()->session['odCurrentID'];
        $odInfos = $odModel ->findAllByPk($odModel->odCurrentID);//展示攻防表中的角色，模式，实验名称信息
//展示队伍表中队伍名称        
        $this->render('baseInfo',array('odInfos'=>$odInfos));
     }
     
     /**
     * Operation 攻防操作
     * @access public
     * @since 2016-10-27,2016-12-01
     * @version 1.1
     */
     public function actionOperation(){
         $operationType = '1'; //攻防模式 1 ，靶场模式 2
         $this->render('operation',array('operationType'=>$operationType));//传递攻防模式给入侵检测或者是漏洞扫描模块，方便返回
     }
     /**
      * ResultShow 攻防结果展示
      * @access public
      * @since 2016-12-01
      * @version 1.0
      */
     public function actionResultShow(){
         $this->render('resultShow');
     }
     
     /**
      * ResultAll 攻防所有信息展示
      * @access public
      * @since 2016-12-01
      * @version 1.0
      */
     public function actionResultAll(){
        //通过模型model实现数据表信息查询，产生model对象
        $odModel = OffenceDefence::model();
        $odModel->odCurrentID = Yii::app()->session['odCurrentID'];
        $odInfos = $odModel ->findAllByPk($odModel->odCurrentID);//展示攻防表中的角色，模式，实验名称信息
//展示队伍表中队伍名称        
         
        $this->render('resultAll',array('odInfos'=>$odInfos));
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
     
     
     public function actionTest(){
         $odModel = OffenceDefence::model();
         $odModel->test ='test';
         $type[1] = "单人";
         $type[2] = "多人";
         $this->render('test',array('odModel'=>$odModel,'type'=>$type));
     }


     //---------------------------------------------------------------------------------------------------------------------//
     /**
     * ResultJudge 攻防结果判定，应该有具体的算法来实现对结果的判定
     * @access public
     * @param mixed $odID 为攻防表的主键，保存至数据库攻防结果表
     * @since 2016-10-27
     * @version 1.0
     */    
    public function actionResultShow1(){//$odID     
        $odModel = new Combat();
        $odResultModel = new OffenceDefenceResult();
        
        //$sql = 'select * from sw_offence_defence_result';

        $count = $odResultModel ->count();//查询攻防结果表已有的记录数
        
        $odID = 10;
        $chooseModel = '1';//攻防类型 1 ，靶场模型 2
        $resultID = (int)$count + 1;//用于存入数据库

        $odResultModel->result = 90;
        $odResultModel->description ='Good Job'.$resultID;        
        $odResultModel->duration = '100min';
        $odResultModel->od_id = $odID;
        $odResultModel->setup_time = date("Y-m-d H:i:s", time());
        if($odResultModel->save())
            //$this ->redirect ('./index.php?r=combat/resultDisplay');  //重定向
            $state = "success";
        $this->render('resultShow',array('id'=>$resultID,'chooseModel'=>$chooseModel,'state'=>$state));//传递$resultID,$chooseModel给实战模块的实战结果展示
    }
     
     
     /**
     * RoleConfig 攻防角色选择
     * @access public
     * @param mixed $type ModelConfig为攻防模式设置时 传递过来的设置类型 攻防类型数字定义 1：一攻一防；2：互相攻防；3：多人攻防
     * @param mixed $userID 攻防表存储时确定设置的用户，用user_id进行区分，且user_id 应该是全局变量，因为多次需要传递
     * @since 2016-10-26
     * @version 1.0
     */  
    public function actionRoleConfig($type){//$type,$userID
        $odModel = new OffenceDefence();         
        $count = $odModel ->count();//查询攻防表已有的记录数        
        /*
         * 对传进来的数据进行判断
         */
        if($count == 0 || $count == '0'){
            $count = 0;
        }
        $id = (int)$count + 1;//用于存入数据库
        
        $odModel->odID = $id;        
        $odModel->type = (int)$type;       //攻防类型 1：一攻一防；2：互相攻防；3：多人攻防        
        $odModel->role = "role choose".$id;
        $odModel->user_id = 1; //$userID         
        $odModel->setup_time = date("Y-m-d H:i:s", time());//保存创建时间
        if($odModel->save())//保存到数据库攻防表中
            $state = "success";
        $this->render('roleConfig',array('odModel'=>$odModel,'state'=>$state));//向EnvironConfig传递攻防表的主键
    }    
    /**
     * EnvironConfig 攻防环境部署
     * @access public
     * @param mixed $odID 为RoleConfig传递过来的攻防表的主键，方便一会对数据库攻防表相关内容的修改
     * @param mixed $environID 部署的场景ID，存入攻防表
     * @since 2016-10-27
     * @version 1.0
     */
    public function actionEnvironConfig(){//$odID,$environID,$role
        $odID = 1;//攻防表的ID
        $environID = 44;//环境的场景ID
        $url ='1';//攻防为1 ，靶场为2
        $odModel = OffenceDefence::model();           
        $pk = $odID;//传递的攻防表ID
        /*
         * 查找到所对应的ID然后进行更新
         */
        $odUpdate = $odModel->findByPk($pk);
        $odUpdate->environ_id = $environID;
        if($odUpdate->save()){
            $state = "success";
        }
        $this->render('environConfig',array('url'=>$url,'state'=>$state));
    }
     /**
     * OdSync 攻防进度同步，是后台监视模块 攻防监视的接口，可以通过该接口对攻防表中已有的结果进行展示，允许管理员修改
     * @access public
     * @since 2016-10-27
     * @version 1.0
     */
    public function  actionOdSync(){
//        $ofModel = new OffenceDefence();
//        $ofResultModel = new OffenceDefenceResult();
        $this->render('odSync');//应该传递攻防表的对象和攻防结果表对象，对其属性进行展示并给予相关操作
                                        //$odMpdel传进来的攻防模块的对象，可以对其属性进行调用
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