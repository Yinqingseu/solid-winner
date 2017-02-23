<?php

/*
 * 后台监视模块
 * 后台监视模块的模型M的定义
 * @author 徐婧
 * @version 1.0
 * @since 2016-10-28
 */
class Monitor extends CActiveRecord{
    /*
     * 返回当前类的名称
     * @access public
     * @param mixed $classname 类的名字
     * @return 返回类的名字Monitor
     * @since 2016-10-28
     * @version 1.0
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }
    /*
     * 返回后台监视的操作记录
     * @access public
     * @return 返回管理员操作记录表
     * @since 2016-10-28
     * @version 1.0
     */
    public function tableName() {
        //parent::tableName();
        return '{{operation_record}}';
    }
}
