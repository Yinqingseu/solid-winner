<?php
/*
 * ⑫漏洞扫描模块：系统性能评估参数表sw_scan_perform
 * 漏洞扫描模块的系统性能评估参数表M的定义 
 * @author 殷青
 * @version 1.0
 * @since 2016-12-16
 */
class ScanPerform extends CActiveRecord{
    
    /*
     * 返回当前类的名称
     * @access public
     * @param mixed $classname 类的名字
     * @return 返回类的名字  ScanPerform
     * @since 2016-12-16
     * @version 1.0
     */
    public static function model($className = __CLASS__){
        return parent::model($className);
    }
    
    /*
     * 返回系统性能评估参数表名字
     * @access public
     * @param mixed $classname 类的名字
     * @return 返回系统性能评估参数表名字
     * @since 2016-12-16
     * @version 1.0
     */
    public function tableName(){
        return "sw_scan_perform";
    }
    /*
     * 设置标签名字与表中字段对应
     * @access public
     * @return array 返回数据库字段与对应的标签名字
     * @since 2016-12-9
     */
    public function attributeLabels(){
        return array(
                    'scan_speed'=>'扫描速度',
                    'scan_time'=>'扫描时间',
                    'error_rate'=>'误报率',
                    'miss_rate'=>'漏报率',
        );  
    }
    
}