<?php
/*
 * 作业：渗透测试作业表 sw_homework_penetration
 * 作业的渗透测试作业表模型M的定义 
 * @author 殷青
 * @version 1.0
 * @since 2017-01-12
 */
class HomeworkPenetration extends CActiveRecord{
    
    /*
     * 返回当前类的名称
     * @access public
     * @param mixed $classname 类的名字
     * @return 返回类的名字  HomeworkPenetration
     * @since 2017-01-12
     * @version 1.0
     */
    public static function model($className = __CLASS__){
        return parent::model($className);
    }
    
    /*
     * 返回渗透测试作业表名字
     * @access public
     * @param mixed $classname 类的名字
     * @return 返回渗透测试作业表名字
     * @since 2017-01-12
     * @version 1.0
     */
    public function tableName(){
        return "sw_homework_penetration";
    }
  
    /*
     * 设置标签名字与sw_homework_penetration表中字段对应
     * @access public
     * @return array 返回数据库字段与对应的标签名字
     * @since 2017-01-12
     */
    public function attributeLabels(){
        return array(
                'train_id'=>'作业ID号',  
                'train_level'=>'难度级别',
              'train_name'=>'训练名称',
              'requirements'=>'作业要求',
              'teacher'=>'教师',
              'deliver_date'=>'作业发布日期',
              'deadline'=>'作业截止日期', 
              'score'=>'成绩', 
        );  
    }
    
     /*
     * 定义具体表单域验证规则，实现配置的验证，该规则作用于教师填写作业的页面
     * @access public
     * @return array 返回各个属性的表单域验证规则
     * @since 2017-01-12
     */
    public function rules(){
        return array(
            array('train_level','required','message'=>'请选择难度级别！'),
            array('train_name','required','message'=>'请为本次训练命名！'),
            array('train_name','unique','message'=>'训练命名重复，请重新命名！'),
            array('train_id','required','message'=>'请填入训练ID号！'),
        );
    } 
}