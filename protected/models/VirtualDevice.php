<?php

/*
 * 虚拟设备模块
 * 虚拟设备模块的模型M的定义
 * @author 徐婧
 * @version 1.0
 * @since 2016-10-28
 */

class VirtualDevice extends CActiveRecord{
    /*
     * 返回当前类的名称
     * @access public
     * @param mixed $classname 类的名字
     * @return 返回类的名字VirtualDevice
     * @since 2016-10-27
     * @version 1.0
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }
    /*
     * 返回场景表名字
     * @access public
     * @return 返回
     * @since 2016-10-26
     * @version 1.0
     
    public function tableName() {
        //parent::tableName();
        return '{{environ}}';//返回的是攻防模块的总结报表
    }*/
}
