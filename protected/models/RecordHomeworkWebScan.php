<?php
/*
 * 用户作业记录表 sw_record_homework_webscan：记录用户的漏洞扫描作业完成情况
 * 记录表模型M的定义 
 * @author 殷青
 * @version 1.0
 * @since 2017-02-13
 */
class RecordHomeworkWebScan extends CActiveRecord{
    
    /*
     * 返回当前类的名称
     * @access public
     * @param mixed $classname 类的名字
     * @return 返回类的名字 RecordHomework
     * @since 17-2-13 
     * @version 1.0
     */
    public static function model($className = __CLASS__){
        return parent::model($className);
    }
    
    /*
     * 返回用户作业记录表名字
     * @access public
     * @param mixed $classname 类的名字
     * @return 返回用户作业记录表名字
     * @since 17-2-13 下午3:31
     * @version 1.0
     */
    public function tableName(){
        return "{{record_homework_webscan}}";
    }
  
    /*
     * 设置标签名字与sw_record_homework_webscan表中字段对应
     * @access public
     * @return array 返回数据库字段与对应的标签名字
     * @since 17-2-13 下午3:31
     */
    public function attributeLabels(){
        return array(
                    'homework_id'=>'作业ID号',
                    'homework_type'=>'作业类型',
                    'name'=>'作业名称',
                    'submit_date'=>'提交日期',
                    'deadline'=>'截止日期',
                    'score'=> '成绩',
                    'teacher_name'=>'教师姓名',
                    'username'=>'用户名',   
                    'userid'=>'用户ID',
                    'answer'=>'作业答案',
                    'end_time'=>'结束时间',
        );  
    }
    
     /*
     * 定义具体表单域验证规则，实现表单验证
     * @access public
     * @return array 返回各个属性的表单域验证规则
     * @since 17-2-19 下午4:29
     */
      public function rules(){
        return array(
            array('answer','required','message'=>'请填写作业答案'),
            array('answer,start_time,end_time','safe'),
        );
    }
}