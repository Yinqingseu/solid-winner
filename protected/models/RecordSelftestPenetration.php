<?php
/*
 * 用户自主测试记录表 sw_record_selftest_penetration：简略记录用户的渗透测试自主测试完成情况
 * 记录表模型M的定义 
 * @author 殷青
 * @version 1.0
 * @since 17-2-21 下午3:00
 */
class RecordSelftestPenetration extends CActiveRecord{
    
    /*
     * 返回当前类的名称
     * @access public
     * @param mixed $classname 类的名字
     * @return 返回类的名字 RecordSelftestPenetration
     * @since 17-2-13 
     * @version 1.0
     */
    public static function model($className = __CLASS__){
        return parent::model($className);
    }
    
    /*
     * 返回用户自主测试记录表名字
     * @access public
     * @param mixed $classname 类的名字
     * @return 返回用户自主测试记录表名字
     * @since 17-2-13 下午3:31
     * @version 1.0
     */
    public function tableName(){
        return "{{record_selftest_penetration}}";
    }
  
    /*
     * 设置标签名字与sw_record_selftest_penetration表中字段对应
     * @access public
     * @return array 返回数据库字段与对应的标签名字
     * @since 17-2-13 下午3:31
     */
    public function attributeLabels(){
        return array(
                    'test_id'=>'自测ID号',
                    'test_type'=>'自测类型',
                    'test_name'=>'自测命名',
                    'test_date'=>'自测日期',
                    'score'=> '成绩',
                    'username'=>'用户名',   
                    'userid'=>'用户ID',
        );  
    }
    
    
}