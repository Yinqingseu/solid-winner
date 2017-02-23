<?php

/*
 * 管理员更多 控制器
 * 管理员更多 控制器C的定义
 * @author 徐婧
 * @version 1.0
 * @since 2016-11-17
 */
class MoreController extends Controller{
    /*
     * Layout
     * @access public
     * @since 2016-11-17
     * @version 1.0
     */
    public function  actionLayout(){
        //创建攻防表，靶场表，攻防结果表，靶场结果表 对象展示数据库中信息，显示增加和修改超链接
        $this->renderPartial('layout');
    }
}



