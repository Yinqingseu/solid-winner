<?php
/*
 * 用户自主测试记录表 sw_record_selftest_media：简略记录用户的攻防实例训练
 * 记录表模型M的定义 
 * @author 殷青
 * @version 1.0
 * @since17-2-21 下午4:13
 */
class RecordSelftestMedia extends CActiveRecord{
    
    /*
     * 返回当前类的名称
     * @access public
     * @param mixed $classname 类的名字
     * @return 返回类的名字 RecordSelftestMedia 
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
     * @version 1.0
     */
    public function tableName(){
        return "{{record_selftest_media}}";
    }
  
    /*
     * 设置标签名字与sw_record_selftest_media表中字段对应
     * @access public
     * @return array 返回数据库字段与对应的标签名字
     */
    public function attributeLabels(){
        return array(
                    'test_id'=>'自测ID号',
                    'test_type'=>'自测类型',
                    'test_name'=>'自测命名',
                    'test_date'=>'自测日期',
                    'username'=>'用户名',   
                    'userid'=>'用户ID',
        );  
    }
    
    
}