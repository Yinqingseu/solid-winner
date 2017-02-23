<?php
/*
 * 攻防结果表模块
 * 攻防结果表模块的模型M的定义
 * @author 徐婧
 * @version 1.0
 * @since 2016-10-26
 */

class TargetRangeResult extends CActiveRecord{
    /*
     * 返回当前类的名称
     * @access public
     * @param mixed $classname 类的名字
     * @return 返回类的名字TargetRangeReult
     * @since 2016-10-26
     * @version 1.0
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }
    /*
     * 返回实战报表名字
     * @access public
     * @return 靶场模块结果表
     * @since 2016-10-26
     * @version 1.0
     */
    public function tableName() {
        //parent::tableName();
        return '{{target_range_result}}';//返回的是 靶场模块结果表
    }
}