<?php

/*
 * 第三方工具模块
 * 第三方工具模块的模型M的定义
 * @author 徐婧
 * @version 1.0
 * @since 2016-12-01
 */

class Tools extends CActiveRecord{
    /*
     * 返回当前类的名称
     * @access public
     * @param mixed $classname 类的名字
     * @return 返回类的名字Tools
     * @since 2016-12-01
     * @version 1.0
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }
    /*
     * 返回场景表名字
     * @access public
     * @return 返回
     * @since 2016-12-01
     * @version 1.0
     */
    public function tableName() {
        //parent::tableName();
        return '{{tools}}';//返回的是工具表
    }
}
