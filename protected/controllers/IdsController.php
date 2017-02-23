<?php
/*
 * 入侵检测控制器
 * ⑭入侵检测模块控制器C的定义
 * @author 殷青
 * @version 1.0
 * @since 2016-10-26
 */

class IdsController extends Controller{
    /*
     * 入侵检测模块页面展示，包括插件上传
     * @access public
     * @since 2016-10-26
     * @version 1.0
     */
     public function actionIndex()
	{
            //Yii::app()->session['operationType'] = $operationType;
            $this ->render('ids');
	}
  
    /*
     * 入侵检测插件上传功能：集成第三方入侵检测插件
     * @access public
     * @since 2016-10-26
     * @version 1.0
     */
    public function actionUpPlugin()
	{
		
	}
        
}