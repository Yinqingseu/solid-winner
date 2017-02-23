<?php
/*
 * 搜索作业ID表
 * 训练模块的搜索作业ID表模型M的定义 
 * level,language
 * @author 殷青
 * @version 1.0
 * @since 2017-01-12
 */
class SearchTaskID extends CActiveRecord{
    
    /*
     * 返回当前类的名称
     * @access public
     * @param mixed $classname 类的名字
     * @return 返回类的名字  SearchTaskID
     */
    public static function model($className = __CLASS__){
        return parent::model($className);
    }
    
    /*
     * 返回搜索作业ID表名字
     * @access public
     * @param mixed $classname 类的名字
     * @return 返回搜索作业ID表名字
     */
    public function tableName(){
        return "sw_search_taskid";
    }
     
  
    /*
     * 设置标签名字与sw_search_taskid表中字段对应
     * @access public
     * @return array 返回数据库字段与对应的标签名字
     */
    public function attributeLabels(){
        return array(
              'task_id'=>'作业ID号',
        );  
    }
    
    /*
     * 定义具体表单域验证规则
     * @access public
     * @return array 返回各个属性的表单域验证规则
     * @since 2016-10-26
     */
    public function rules(){
        return array(
            array('task_id','required','message'=>'请填写作业ID号！'),
            
            );
    }
}