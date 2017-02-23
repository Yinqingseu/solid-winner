<?php

/*
 * 管理模块控制器
 * 管理模块控制器C的定义
 * @author 徐婧
 * @version 1.0
 * @since 2016-10-27
 */
class ManageController extends Controller{
    /*
     * Layout  管理模块页面展示，包含管理模块的内容：训练管理，攻防管理，用户信息变更、场景环境管理，靶场管理
     * @access public
     * @since 2016-10-26
     * @version 1.0
     */
    public function actionLayout(){
        
        $this->renderPartial('layout');
    }
     /*
     * Environ 场景环境管理
     * @access public
     * @param mixed $userID 管理员ID
     * @since 2016-10-26
     * @version 1.0
     */
    public function actionEnviron(){//$userID
//         $eModel = Environ::model();//场景
         //记录管理员的操作
         $this->renderPartial('environ');//传递变更场景的ID操作的内容，  $environID $userID,$changeID,$type，$operation
    }
    /*
     * OffenceDefence 攻防管理
     * @access public
     * @param mixed $userID 管理员ID
     * @since 2016-10-27
     * @version 1.0
     */
    public function actionOffenceDefence(){//$userID
//        $odModel = OffenceDefence::model();//攻防模型
//        $odResultModel = OffenceDefenceResult::model();//攻防结果模型
        $this->renderPartial('offenceDefence');//可能是以数组形式，包括攻防和攻防结果的变更。传递变更的内容，变更的ID $odModel->id,$odResultModel->id
                                                //$environID $userID,$changeID,$type，$operation
    }
    /*
     * TargetRange 靶场管理
     * @access public
     * @param mixed $userID 管理员ID
     * @since 2016-10-27
     * @version 1.0
     */
    public function actionTargetRange(){//$userID
//        $trModel = OffenceDefence::model();//靶场模型
//        $trResultModel = OffenceDefenceResult::model();//靶场比赛结果模型
        $this->renderPartial('targetRange');//可能是以数组形式，包括攻防和攻防结果的变更。传递变更的内容，变更的ID $odModel->id,$odResultModel->id
                                                //$environID $userID,$changeID,$type，$operation
    }
    /*
     * Train 训练管理
     * @access public
     * @param mixed $userID 管理员ID
     * @since 2016-10-27
     * @version 1.0
     */
    public function  actionTrain(){
         //$tModel = Train::model();//训练模型
         $this->renderPartial('train');//传递变更训练的ID  $trainID
                                      //$environID $userID,$changeID,$type，$operation
     }
    /*
     * ResultJudge 比赛结果判定
     * @access public
     * @param mixed $userID 管理员ID
     * @since 2016-10-27
     * @version 1.0
     */    
    public function actionUserInfo(){
        //$uModel = User::model();
        $this->renderPartial('userInfo');//传递变更的用户ID $userID
                                          //$environID $userID,$changeID,$type，$operation
    }
}