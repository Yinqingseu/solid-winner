<?php

/*
 * 网络仿真环境模块
 * 网络仿真环境模块控制器C的定义
 * @author 徐婧
 * @version 1.0
 * @since 2016-10-28
 */
class NetVirtualEnvironController extends Controller{
    public static $typeNVE ;
    
    
    /*
     * Show  网络仿真环境的页面展示，包括场景确定，场景基本信息保存，环境初始化
     * @access public 
     * @param mixed $type 攻防模块和靶场模块传递过来的类型，根据不同类型显示不同的网络仿真环境界面 1：攻防，2：靶场
     * @version 1.0
     * @since 2016-11-02
     */
    public function actionShow(){//$type       
        $this->render('layout');
    }
    
    /*
     * Layout  网络仿真环境在攻防模块或者靶场模块的页面展示，包括场景确定，场景基本信息保存，环境初始化
     * @access public 
     * @param mixed $type 攻防模块和靶场模块传递过来的类型，根据不同类型显示不同的网络仿真环境界面 1：攻防，2：靶场
     * @version 1.0
     * @since 2016-11-02
     */
    public function actionLayout($type){//$type
        $nveModel = NetVirtualEnviron::model();
        if($type =='1'){
            Yii::app()->session['typeNVE'] = $type;
            $this->render('odLayout');
        }
        elseif($type =='2'){
            Yii::app()->session['typeNVE'] = $type;
            $this->render('trLayout');
        }else{
            
        }
        
    }
    /*
     * EnvironConfig 场景确定
     * @version 1.0
     * @since 2016-10-27
     */
    function actionEnvironConfig(){
        /*
         * 包括网络仿真环境的场景确定
         */
        $this->render('environConfig');
    }
    /*
     * EnvironInfo 场景基本信息
     * @version 1.0
     * @since 2016-10-27
     */
    function actionEnvironInfo(){
        /*
         * 包括根据网络仿真环境的网络环境配置
         */
        $this->render('environInfo');       
    }
    /*
     * Initialize 环境初始化
     */
    function actionInitialize(){
        /*
         * 包括虚拟设备生成和虚拟设备网路配置
         */
        //var_dump($GLOBALS);
        //$typeNVE = new Globle();
        //$type = $typeNVE->getType();
       
        $type = Yii::app()->session['typeNVE'];
        if($type == '1'){
            $url = 'offenceDefence';
        }
        elseif ($type == '2') {
            $url = 'targetRange';
        }
        //unset(Yii::app()->session['typeNVE']);
        $this->render('initial',array('url'=>$url,'type'=>$type));//,array('typeNVE'=> Yii::$app->params['typeNVE'])$GLOBALS['typeNVE']
    }
}