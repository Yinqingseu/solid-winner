<?php
/*
 * ⑬安全过滤模块
 *安全过滤模块模型M的定义 
 * @author 殷青
 * @version 1.0
 * @since 2016-10-26
 */
class SafeFilter extends CActiveRecord{
    /*
     * 返回当前类的名称
     * @access public
     * @param mixed $classname 类的名字
     * @return 返回类的名字 SafeFilter
     * @since 2016-10-26
     * @version 1.0
     */
    public static function model($className = __CLASS__){
        return parent::model($className);
    }
    
    /*
     * 返回安全过滤表名字
     * @access public
     * @param mixed $classname 类的名字
     * @return 返回安全过滤表名字
     * @since 2016-10-26
     * @version 1.0
     */
    public function tableName(){
        return "sw_safefilter";
    }
}
