<?php
/*
 * ⑫漏洞扫描模块：插件信息表sw_scan_plugin
 * 漏洞扫描模块的插件信息表M的定义 
 * @author 殷青
 * @version 1.0
 * @since 2016-12-9
 */
class ScanPlugin extends CActiveRecord{
    
    /*
     * 返回当前类的名称
     * @access public
     * @param mixed $classname 类的名字
     * @return 返回类的名字  ScanPlugin
     * @since 2016-12-9
     * @version 1.0
     */
    public static function model($className = __CLASS__){
        return parent::model($className);
    }
    
    /*
     * 返回插件信息表名字
     * @access public
     * @param mixed $classname 类的名字
     * @return 返回插件信息表名字
     * @since 2016-12-9
     * @version 1.0
     */
    public function tableName(){
        return "sw_scan_plugin";
    }
//        public $scan_name;       //扫描命名
    /*
     * 设置标签名字与表中字段对应
     * @access public
     * @return array 返回数据库字段与对应的标签名字
     * @since 2016-12-9
     */
    public function attributeLabels(){
        return array(
                    'plugin_id'=>'插件ID',
                    'plugin_name'=>'插件名字',
                    'plugin_version'=>'插件版本',
                    'plugin_summary'=>'插件简介',
                    'plugin_content'=>'插件内容',
                    'plugin_family'=>'插件类别',
                    'plugin_creator'=>'创建者',
                    'plugin_create_time'=>'创建日期', 
                    'plugin_download'=>'插件下载',
        );  
    }
    
}