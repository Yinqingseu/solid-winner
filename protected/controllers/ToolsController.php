<?php

/*
 * 第三方工具模块控制器
 * 第三方工具模块控制器C的定义
 * @author 徐婧
 * @version 1.0
 * @since 2016-12-01
 */
class  ToolsController extends Controller{
    
    /*
     * ThirdLayout 第三方工具页面展示
     * @access public
     * @since 2016-12-01
     * @version 1.0
     */
    public function actionThirdLayout($type){
        if($type == '1'){
            $url = 'offenceDefence';
        }
        else if($type == '2'){
            $url ='targetRange';
        }
        $this->render('thirdLayout',array('url'=>$url));
    }
    /*
     * PlatLayout 第三方工具页面展示
     * @access public
     * @since 2016-12-01
     * @version 1.0
     */
    public function actionPlatLayout($type){
        if($type == '1'){
            $url = 'offenceDefence';
        }
        else if($type == '2'){
            $url ='targetRange';
        }
        $this->render('platLayout',array('url'=>$url));
    }
   
}