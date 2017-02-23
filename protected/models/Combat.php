<?php

/*
 * 实战模块
 * 实战模块的模型M的定义
 * @author 徐婧
 * @version 1.0
 * @since 2016-10-26
 */

class Combat extends CActiveRecord{
    
    /*
     * 返回当前类的名称
     * @access public
     * @param mixed $classname 类的名字
     * @return 返回类的名字Combat
     * @since 2016-10-26
     * @version 1.0
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }
    /*
     * 返回实战报表名字
     * @access public
     * @param mixed $classname 类的名字
     * @return 返回实战报表名字
     * @since 2016-10-26
     * @version 1.0
     */
    public function tableName() {
        //parent::tableName();
        return '{{combat_report}}';//返回的是实战模块的总结报表
    }
}