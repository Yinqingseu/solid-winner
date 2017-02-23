<?php

/*
 * 平台工具管理控制器
 * 平台工具管理控制器C的定义
 * @author 徐婧
 * @version 1.0
 * @since 2016-11-15
 */
class SoftController extends Controller{
    /*
     * Layout 后台模块页面展示，包括后台监视类型，实时展示，管理员操作
     * @access public
     * @since 2016-11-15
     * @version 1.0
     */
    public function  actionLayout(){
        $this->renderPartial('layout');
    }
    /*
     * scan 漏洞扫描工具管理
     * @access public
     * @since 2016-11-15
     * @version 1.0
     */
    public function  actionScan(){
        $this->renderPartial('scan');//视图M根据选择的监视类型，调用相关的模块同步接口
    }
    /*
     * Ids
     * @access public
     * @since 2016-11-15
     * @version 1.0
     */
    public function  actionIds(){
        //创建攻防表，靶场表，攻防结果表，靶场结果表 对象展示数据库中信息，显示增加和修改超链接
        $this->renderPartial('ids');
    }
    /*
     * Operation 管理员操作 //视图M调用管理模块
     * @access public
     * @param $userID 管理员ID
     * @param $changeID 管理员操作修改的相关表ID
     * @param $type 操作类型   1：用户信息变更，2：训练管理，3：靶场管理，4：攻防管理，5：场景环境管理 6:靶场结果管理 7：攻防结果管理
     * @param $operation 操作内容 
     * @since 2016-10-28
     * @version 1.0
     */
//    public function  actionOperation(){//$userID,$changeID,$type，$operation
//        //操作记录存放在sw_operation_record表
//        //$mModel = new Monitor();
//        
//        $this->renderPartial('operation');
//    }    
}



