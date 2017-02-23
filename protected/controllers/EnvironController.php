<?php

/*
 * 场景模块
 * 场景模块控制器C的定义
 * @author 徐婧
 * @version 1.0
 * @since 2016-10-26
 */
class EnvironController extends Controller{
    /*
     * Layout 场景的页面展示，包括新场景操作，选择场景，修改场景，删除场景，连接协议，场景分类
     */
    function actionLayout(){
        $this->render('layout');
    }
    /*
     * NewScene 新场景操作
     * @param mixed $userID
     * @version 1.0
     * @since 2016-10-27
     */
    function actionNewScene(){//$userID
        /*
         * 包括设备类型选择，设备数量，设备间连接协议，场景命名，场景存储
         */
        $this->render('newScene');//传递场景ID $environID
    }
     /*
     * ChooseScene 场景选择操作
     * @param mixed $userID
     * @version 1.0
     * @since 2016-10-27
     */
    function actionChooseScene(){//$userID
        /*
         * 包括设备类型选择，设备数量，设备间连接协议，场景命名，场景存储
         */
        $this->render('chooseScene');//传递场景ID $environID
    }
    /*
     * Choose 选择场景具体操作
     * @param mixed $chooseType 选择的方式 包括根据场景名称，根据用户，根据创建时间，根据使用情景
     * @version 1.0
     * @since 2016-10-27
     */
    function actionChoose($chooseType){//
        /*
         * 包括根据场景名称，用户，场景使用情景，创建时间来选择
         */
        $chooseType =0;
        //根据传递进来的类型，对其数值进行判断后，进一步处理
        if($chooseType == 1){
            //根据场景名称的查找
        }
        else if($chooseType == 2){
            //根据用户名查找
        } elseif ($chooseType == 3) {
            //根据创建时间查找
        } elseif ($chooseType == 4) {
            //根据使用情景查找
        }else{
            //出错判读
        }
        $this->render('choose');//传递场景ID $environID     
    }
    /*
     * UpdateScene 修改场景
     * @param mixed $chooseType
     * @version 1.0
     * @since 2016-10-27
     */
    function actionUpdateScene(){//$chooseType
        /*
         * 包括设备类型，设备数量，连接协议，场景重命名，存储更新的修改
         */
        $this->render('updateScene');//传递场景ID $environID
    }
    /*
     * DelScene 删除场景
     * @param mixed $userID
     * @version 1.0
     * @since 2016-10-27
     */
    function actionDelScene(){//$userID
        /*
         * 用户可以删除自己创建的场景
         * 管理员可以删除任一场景
         */
        $this->render('delScene');
    }
     /*
     * Device 设备
     * @param mixed $operationType
     * @version 1.0
     * @since 2016-10-27
     */
    function actionDevice($operationType){//$operationType 1:新建 2：修改 3：删除
        /*
         * 
         */
//        $eModel = new Protocol();
        if($operationType == 1){
            $url = 'newScene';
        }
        elseif($operationType == 2){
            $url = 'updateScene';
        }
        elseif ($operationType == 3) {
            $url = 'delScene';
        }
        
        $this->render('device',array('url'=>$url));//传递$device_id给场景操作，新场景操作，选择已有场景，已有场景修改和删除场景
        //传递$url 的值，并在视图中跳转到相关的页面
    }
    /*
     * Protocol 设备间协议
     * @param mixed $operationType
     * @version 1.0
     * @since 2016-10-27
     */
    function actionProtocol($operationType){//operationType 1:新建 2：修改 3：删除
        /*
         * 
         */
//        $eModel = new Protocol();
        if($operationType == 1){
            $url = 'newScene';
        }
        elseif($operationType == 2){
            $url = 'updateScene';
        }
        elseif ($operationType == 3) {
            $url = 'delScene';
        }
        $this->render('protocol',array('url'=>$url));//传递$protocol_id给场景操作，新场景操作，选择已有场景，已有场景修改和删除场景
    }
    /*
     * TypeScene 场景分类
     * @version 1.0
     * @since 2016-10-28
     */
    function actionTypeScene(){//operationType 1:新建 2：修改 3：删除
        /*
         * 
         */
        $this->render('typeScene');//传递combatType给场景操作
    }
}