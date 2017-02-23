<?php

/*
 * 后台监视控制器
 * 后台监视控制器C的定义
 * @author 徐婧
 * @version 1.0
 * @since 2016-11-15
 */
class MonitorController extends Controller{    
    /*
     * OffenceDefence   实时监视攻防操作
     * @access public
     * @since 2016-10-28
     * @version 1.0
     */
    public function  actionOffenceDefence(){
        $this->renderPartial('offenceDefenceLayout');
    }
    /*
     * TargetRange 实时监视靶场操作
     * @access public
     * @since 2016-10-28
     * @version 1.0
     */
    public function  actionTargetRange(){        
        $this->renderPartial('targetRangeLayout');
    }
    /*
     * Operation 图形化展示用户进行操作
     * @access public
     * @since 2016-12-07
     * @version 1.0
     */
    public function actionOperation(){
        $this->renderPartial('operation');
    }
    /*
     * Show 图形化实时展示
     * @access public
     * @since 2016-12-07
     * @version 1.0
     */
    public function actionShow($type){
        if($type == 1){
            $url ="offenceDefence";
        }
        else if($type == 2){
            $url ="targetRange";
        }
        $this->renderPartial('show',array('url'=>$url,'type'=>$type));
    }
}



