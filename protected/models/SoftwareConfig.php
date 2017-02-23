<?php
/*
 * ⑫漏洞扫描模块：应用软件扫描配置表sw_software_config
 * 漏洞扫描模块的应用软件扫描配置表模型M的定义 
 * @author 殷青
 * @version 1.0
 * @since 2016-12-27
 */
class SoftwareConfig extends CActiveRecord{
    
    /*
     * 返回当前类的名称
     * @access public
     * @param mixed $classname 类的名字
     * @return 返回类的名字  ScanConfig
     * @since 2016-10-26
     * @version 1.0
     */
    public static function model($className = __CLASS__){
        return parent::model($className);
    }
    
    /*
     * 返回应用软件扫描配置表名字
     * @access public
     * @param mixed $classname 类的名字
     * @return 返回应用软件扫描配置表名字
     * @since 2016-10-26
     * @version 1.0
     */
    public function tableName(){
        return "sw_software_config";
    }
        public $scan_name;       //扫描命名
        public $numofthreads;   //设置扫描线程数
        public $scan_holelist;   //设置扫描漏洞列表
  
    /*
     * 设置标签名字与sw_software_config表中字段对应
     * @access public
     * @return array 返回数据库字段与对应的标签名字
     * @since 2016-10-26
     */
    public function attributeLabels(){
        return array(
                    'scan_name'=>'扫描命名',
                    'numofthreads'=>'扫描并发线程数',
                    'scan_software'=>'应用软件',
                    'owner'=>'作者',
                    'create_time'=>'创建时间',   
        );  
    }
    
     /*
     * 定义具体表单域验证规则，实现扫描配置的验证
     * @access public
     * @return array 返回各个属性的表单域验证规则
     * @since 2016-10-26
     */
    public function rules(){
        return array(
            array('scan_name','required','message'=>'扫描命名必填'),
            //用户名不能重复（与数据比较）
            array('scan_name','unique','message'=>'扫描命名重复'),
            //为没有具体验证规则的属性，设置安全的验证过则，否则attributes不给接收信息,键入的信息存不到数据库中
            array('numofthreads,scan_software','safe'),
        );
    }
    
    
}