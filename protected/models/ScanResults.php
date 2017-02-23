<?php
/*
 * ⑫.漏洞扫描模块:扫描结果表sw_scan_results
 * 漏洞扫描模块的扫描结果表模型M的定义 
 * @author 殷青
 * @version 1.0
 * @since 2016-10-26
 */

class ScanResults extends CActiveRecord{
    /*
     * 返回当前类的名称
     * @access public
     * @param mixed $classname 类的名字
     * @return 返回类的名字 ScanResultss
     * @since 2016-10-26
     * @version 1.0
     */
    public static function model($className = __CLASS__){
        return parent::model($className);
    }
    
     /*
     * 返回扫描结果表名字
     * @access public
     * @param mixed $classname 类的名字
     * @return 返回扫描结果表名字
     * @since 2016-10-26
     * @version 1.0
     */
    public function tableName(){
        return "sw_scan_results";
    }
 
     /*
     * 设置标签名字与sw_scan_results表中字段对应
     * @access public
     * @return array 返回数据库字段与对应的标签名字
     * @since 2016-12-9
     */
      public function attributeLabels(){
        return array(
                    'id'=>'报表ID',
                    'scan_id'=>'扫描ID号',
                    'userId'=>'用户ID号',
                    'config_id'=>'扫描配置表主键',
                    'hole_id'=>'漏洞列表主键',
                    'scan_date'=>'扫描日期',
                    'scan_user'=>'扫描用户',
                    'scan_time'=>'扫描时长',
                    'report_name'=>'报表名称',
                    'safety_factor'=>'系统安全系数',
                    'safety_level'=>'风险等级',
                    //添加 
                    'current_status'=>'当前状态',
                    'start_time'=>'开始时间',
                    'end_time'=>'结束时间',
                    'duration'=>'历时',
                    'num_of_high'=>'高风险漏洞个数',
                    'num_of_medium'=>'中风险漏洞个数',
                    'num_of_low'=>'低风险漏洞个数',
                    'extra_url'=>'外部链接',
            );
      }
      
    /*
     * 定义具体表单域验证规则，实现验证
     * @access public
     * @return array 返回各个属性的表单域验证规则
     * @since 2016-12-27
     */
    public function rules(){
        return array(
            //为没有具体验证规则的属性，设置安全的验证过则，否则attributes不给接收信息,键入的信息存不到数据库中
            array('scan_id,start_time,end_time,userId','safe'),
        );
    }
      

}