<?php

/*
 * 规则
 * 靶场模块规则的M定义
 * @author 徐婧
 * @version 1.0
 * @since 2016-11-01
 */

class Rules extends CActiveRecord{
    
    /*
     * 返回当前类的名称
     * @access public
     * @param mixed $classname 类的名字
     * @return 返回类的名字Rules
     * @since 2016-11-01
     * @version 1.0
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }
    /*
     * 返回靶场规则表名字
     * @access public
     * @return 返回靶场规则表名字
     * @since 2016-10-26
     * @version 1.0
     */
    public function tableName() {
        //parent::tableName();
        return '{{tr_rules}}';//返回的是靶场模块的规则表
    }
}
