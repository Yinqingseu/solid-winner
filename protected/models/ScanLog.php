<?php
/*
 * ⑫.漏洞扫描模块:日志表sw_scan_log
 * 漏洞扫描模块的日志表表模型M的定义 
 * @author 殷青
 * @version 1.0
 * @since 2016-10-26
 */
class ScanLog extends CActiveRecord{
    /*
     * 返回当前类的名称
     * @access public
     * @param mixed $classname 类的名字
     * @return 返回类的名字 ScanLog 
     * @since 2016-10-26
     * @version 1.0
     */
    public static function model($className = __CLASS__){
        return parent::model($className);
    }
     
    /*
     * 返回日志表名字
     * @access public
     * @param mixed $classname 类的名字
     * @return 返回日志表名字
     * @since 2016-10-26
     * @version 1.0
     */
    public function tableName(){
        return "{{sw_scan_log}}";
    }
 
    /*
     * 设置标签名字与sw_train表中字段对应
     * @access public
     * @return array 返回数据库字段与对应的标签名字
     * @since 2016-10-26
     */
      public function attributeLabels(){
        return array(
            );
      }

}
