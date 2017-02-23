<?php
/*
 * ⑫漏洞扫描模块：网站扫描配置表sw_web_config
 * 漏洞扫描模块的网站扫描配置表模型M的定义 
 * @author 殷青
 * @version 1.0
 * @since 2016-12-27
 */
class WebConfig extends CActiveRecord{
    
    /*
     * 返回当前类的名称
     * @access public
     * @param mixed $classname 类的名字
     * @return 返回类的名字  ScanConfig
     * @since 2016-12-27
     * @version 1.0
     */
    public static function model($className = __CLASS__){
        return parent::model($className);
    }
    
    /*
     * 返回网站扫描配置表名字
     * @access public
     * @param mixed $classname 类的名字
     * @return 返回扫描配置表名字
     * @since 2016-12-27
     * @version 1.0
     */
    public function tableName(){
        return "sw_web_config";
    }
        public $scan_name;       //扫描命名
        public $numofthreads;   //设置扫描线程数
        public $scan_holelist;   //设置扫描漏洞列表
  
    /*
     * 设置标签名字与sw_web_config表中字段对应
     * @access public
     * @return array 返回数据库字段与对应的标签名字
     * @since 2016-12-27
     */
    public function attributeLabels(){
        return array(
                    'scan_name'=>'请为本次扫描命名',
                    'scan_url'=>'扫描网站',
                    'scan_depth'=> '网站扫描深度',
                    'numofthreads'=>'扫描并发线程数',
                    'scan_holelist'=>'扫描漏洞',
                    'creator'=>'扫描用户',
                    'create_time'=>'创建时间',    
                    'scan_id'=>'本次扫描ID号',
                    'model'=>'扫描模式',
                    'choice'=>'请选择扫描工具',
                    'tool'=>'可选的第三方漏洞扫描工具',
                    'selfcheck'=>'手动进行漏洞验证方式选择',
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
            array('scan_name','required','message'=>'扫描命名必填！'),
            array('scan_url','required','message'=>'扫描网址必填！'),
            array('scan_name','unique','message'=>'扫描命名重复！'),
            //验证扫描漏洞种类，复选框的验证
//            array('scan_holelist','check_holelist'),
            //为没有具体验证规则的属性，设置安全的验证过则，否则attributes不给接收信息,键入的信息存不到数据库中
            array('numofthreads,scan_url,scan_depth,create_time,creator,scan_id,model,choice,tool,selfcheck,scan_holelist','safe'),
        );
    }
    
    /*
     * 在当前模型里边定义一个方法check_holelist对扫描漏洞种类进行验证
     * @access public
     * @return array 返回各个属性的表单域验证规则
     * @since 2016-12-27
     */
    function check_holelist(){
        //在这个方法里边，我们可以获得模型的相关信息
        //$this -> 属性名;  //调用模型对象的相关属性信息
        //$this 就是我们在控制器controller里边实例化好的模型对象
        $len = strlen($this -> scan_holelist);
        if($len < 1)
            $this -> addError('scan_holelist','至少选择一种扫描漏洞');
    }
     
}