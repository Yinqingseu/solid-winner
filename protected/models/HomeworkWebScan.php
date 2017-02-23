<?php
/*
 * 作业：网站漏洞扫描作业表 sw_homework_webscan
 * 作业的网站漏洞扫描作业表模型M的定义 
 * @author 殷青
 * @version 1.0
 * @since 2017-01-20
 */
class HomeworkWebScan extends CActiveRecord{
    
    /*
     * 返回当前类的名称
     * @access public
     * @param mixed $classname 类的名字
     * @return 返回类的名字 HomeworkWebScan
     * @since 2017-01-20
     * @version 1.0
     */
    public static function model($className = __CLASS__){
        return parent::model($className);
    }
    
    /*
     * 返回网站漏洞扫描作业表名字
     * @access public
     * @param mixed $classname 类的名字
     * @return 返回网站漏洞扫描作业表名字
     * @since 2017-01-20
     * @version 1.0
     */
    public function tableName(){
        return "sw_homework_webscan";
    }
  
    /*
     * 设置标签名字与sw_homework_webscan表中字段对应
     * @access public
     * @return array 返回数据库字段与对应的标签名字
     * @since 2017-01-20
     */
    public function attributeLabels(){
        return array(
                    'scan_name'=>'扫描名称',
                    'scan_id'=>'扫描ID号',
                    'scan_url'=>'扫描网站',
                     'model'=>'扫描模式',
                    'choice'=>'扫描工具',
                    'scan_depth'=> '网站扫描深度',
                    'numofthreads'=>'扫描并发线程数',
                    'scan_holelist'=>'扫描漏洞',   
                    'tool'=>'第三方漏洞扫描工具',
                    'selfcheck'=>'手动漏洞验证方式',
                    'requirements'=>'作业要求',
                    'teacher'=>'教师',
                    'deliver_date'=>'发布日期',
                    'deadline'=>'截止日期',
        );  
    }
   
}