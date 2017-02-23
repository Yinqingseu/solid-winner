<?php
/*
 * ⑫漏洞扫描模块：主机扫描配置表sw_host_config
 * 漏洞扫描模块的主机扫描配置表模型M的定义 
 * @author 殷青
 * @version 1.0
 * @since 2016-12-27
 */
class HostConfig extends CActiveRecord{
    
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
     * 返回主机扫描配置表名字
     * @access public
     * @param mixed $classname 类的名字
     * @return 返回主机扫描配置表名字
     * @since 2016-12-27
     * @version 1.0
     */
    public function tableName(){
        return "sw_host_config";
    }
        public $scan_name;       //扫描命名
        public $numofthreads;   //设置扫描线程数
        public $scan_holelist;   //设置扫描漏洞列表
  
    /*
     * 设置标签名字与sw_host_config表中字段对应
     * @access public
     * @return array 返回数据库字段与对应的标签名字
     * @since 2016-12-27
     */
    public function attributeLabels(){
        return array(
                   'scan_name'=>'扫描命名',
                    'numofthreads'=>'扫描并发线程数',
                    'start_ip'=>'开始IP',
                    'end_ip'=>'结束IP',
                    'start_port'=>'开始端口号',
                    'end_port'=>'结束端口号',
                    'creator'=>'作者',
                    'create_time'=>'创建时间', 
        );  
    }
    
     /*
     * 定义具体表单域验证规则，实现扫描配置的验证
     * @access public
     * @return array 返回各个属性的表单域验证规则
     * @since 2016-12-27
     */
    public function rules(){
        return array(
            array('scan_name','required','message'=>'扫描命名必填'),
            //用户名不能重复（与数据比较）
            array('scan_name','unique','message'=>'扫描命名重复'),
            array('start_ip','match','pattern'=>'/(25[0-5]|2[0-4]\d|[0-1]\d{2}|[1-9]?\d)\.(25[0-5]|2[0-4]\d|[0-1]\d{2}|[1-9]?\d)\.(25[0-5]|2[0-4]\d|[0-1]\d{2}|[1-9]?\d)\.(25[0-5]|2[0-4]\d|[0-1]\d{2}|[1-9]?\d)/','message'=>'主机IP格式不正确'),
            array('end_ip','match','pattern'=>'/(25[0-5]|2[0-4]\d|[0-1]\d{2}|[1-9]?\d)\.(25[0-5]|2[0-4]\d|[0-1]\d{2}|[1-9]?\d)\.(25[0-5]|2[0-4]\d|[0-1]\d{2}|[1-9]?\d)\.(25[0-5]|2[0-4]\d|[0-1]\d{2}|[1-9]?\d)/','message'=>'主机IP格式不正确'),
            //为没有具体验证规则的属性，设置安全的验证过则，否则attributes不给接收信息,键入的信息存不到数据库中
            array('numofthreads,start_port,end_port','safe'),
        );
    } 
}