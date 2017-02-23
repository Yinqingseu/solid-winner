<?php
/*
 * ⑫.漏洞扫描模块:工具表模型（插件功能使用）
 * .漏洞扫描模块的工具表模型M的定义 
 * 可能存储内容：
 * 插件的名称,插件简介,插件大小,插件的功能,开发者信息；
 * name,plugin_info,size,function,developer_info
 * @author 殷青
 * @version 1.0
 * @since 2016-10-26
 */

class ScanTools extends CActiveRecord{
    /*
     * 返回当前类的名称
     * @access public
     * @param mixed $classname 类的名字
     * @return 返回类的名字  ScanTools
     * @since 2016-10-26
     * @version 1.0
     */
    public static function model($className = __CLASS__){
        return parent::model($className);
    }
  
    /*
     * 返回工具表名字
     * @access public
     * @param mixed $classname 类的名字
     * @return 返回工具表名字
     * @since 2016-10-26
     * @version 1.0
     */
    public function tableName(){
        return "{{sw_scan_tools}}";
    }
 
    /*
     * 设置标签名字与sw_train表中字段对应
     * @access public
     * @return array 返回数据库字段与对应的标签名字
     * @since 2016-10-26
     */
      public function attributeLabels(){
        return array(
            'name'=>'插件名称',
            'plugin_info'=>'插件简介',
            'size'=>'插件大小',
            'function'=>'插件的功能',
            'developer_info'=>'开发者信息',
            );
      }
}