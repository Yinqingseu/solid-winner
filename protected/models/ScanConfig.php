<?php
/*
 * ⑫漏洞扫描模块：扫描配置表sw_scan_config
 * 漏洞扫描模块的扫描配置表模型M的定义 
 * @author 殷青
 * @version 1.0
 * @since 2016-12-9
 */
class ScanConfig extends CActiveRecord{
    
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
     * 返回扫描配置表名字
     * @access public
     * @param mixed $classname 类的名字
     * @return 返回扫描配置表名字
     * @since 2016-10-26
     * @version 1.0
     */
    public function tableName(){
        return "sw_scan_config";
    }
        public $scan_name;       //扫描命名
        public $numofthreads;   //设置扫描线程数
        public $scan_holelist;   //设置扫描漏洞列表
  
    /*
     * 设置标签名字与sw_scan_config表中字段对应
     * @access public
     * @return array 返回数据库字段与对应的标签名字
     * @since 2016-10-26
     */
    public function attributeLabels(){
        return array(
                    'scan_name'=>'扫描命名',
                    'scan_software'=>'应用软件',
                    'scan_url'=>'网  站',
                    'start_ip'=>'开始扫描主机IP',
                    'end_ip'=>'结束扫描主机IP',
                    'start_port'=>'开始端口',
                    'end_port'=>'结束端口',
                    'scan_depth'=> '扫描深度',
                    'numofthreads'=>'扫描并发线程数',
                    'scan_holelist'=>'扫描漏洞',
                    'scan_protocol' => '扫描协议',
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
//            array('scan_url','match','pattern'=>'/^((https|http|ftp|rtsp|mms)?:\/\/)[^\s]+/','message'=>'网站格式不正确'),
            array('start_ip','match','pattern'=>'/(25[0-5]|2[0-4]\d|[0-1]\d{2}|[1-9]?\d)\.(25[0-5]|2[0-4]\d|[0-1]\d{2}|[1-9]?\d)\.(25[0-5]|2[0-4]\d|[0-1]\d{2}|[1-9]?\d)\.(25[0-5]|2[0-4]\d|[0-1]\d{2}|[1-9]?\d)/','message'=>'主机IP格式不正确'),
            array('end_ip','match','pattern'=>'/(25[0-5]|2[0-4]\d|[0-1]\d{2}|[1-9]?\d)\.(25[0-5]|2[0-4]\d|[0-1]\d{2}|[1-9]?\d)\.(25[0-5]|2[0-4]\d|[0-1]\d{2}|[1-9]?\d)\.(25[0-5]|2[0-4]\d|[0-1]\d{2}|[1-9]?\d)/','message'=>'主机IP格式不正确'),
            //验证扫描漏洞种类，复选框的验证
            array('scan_holelist','check_holelist'),
            //验证协议，复选框的验证
            array('scan_protocol','check_protocol'),
            //为没有具体验证规则的属性，设置安全的验证过则，否则attributes不给接收信息,键入的信息存不到数据库中
            array('numofthreads,scan_url,scan_software,scan_depth,start_port,end_port','safe'),
        );
    }
    
    /*
     * 在当前模型里边定义一个方法check_holelist对扫描漏洞种类进行验证
     * @access public
     * @return array 返回各个属性的表单域验证规则
     * @since 2016-12-11
     */
    function check_holelist(){
        //在这个方法里边，我们可以获得模型的相关信息
        //$this -> 属性名;  //调用模型对象的相关属性信息
        //$this 就是我们在控制器controller里边实例化好的模型对象
        
        $len = strlen($this -> scan_holelist);
        if($len < 1)
            $this -> addError('scan_holelist','至少选择一种扫描漏洞');
    }
       /*
     * 在当前模型里边定义一个方法check_protocol对扫描漏洞种类进行验证
     * @access public
     * @return array 返回各个属性的表单域验证规则
     * @since 2016-12-11
     */
    function check_protocol(){
        //在这个方法里边，我们可以获得模型的相关信息
        //$this -> 属性名;  //调用模型对象的相关属性信息
        //$this 就是我们在控制器controller里边实例化好的模型对象
        
        $len = strlen($this ->scan_protocol);
        if($len < 1)
            $this -> addError('scan_protocol','至少选择一种扫描协议');
    }
    
    
}