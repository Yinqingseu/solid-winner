<?php
/*
 * ③训练模块：训练题库配置表
 * 训练模块的训练题库配置表模型M的定义 
 * 存储内容：
 * 难度级别，建站语言
 * level,language
 * @author 殷青
 * @version 1.0
 * @since 2016-11-29
 */
class TrainConfig extends CActiveRecord{
    
    /*
     * 返回当前类的名称
     * @access public
     * @param mixed $classname 类的名字
     * @return 返回类的名字  TrainConfig
     */
    public static function model($className = __CLASS__){
        return parent::model($className);
    }
    
    /*
     * 返回训练题库配置表名字
     * @access public
     * @param mixed $classname 类的名字
     * @return 返回训练题库配置表名字
     */
    public function tableName(){
        return "sw_train_config";
    }
     
  
    /*
     * 设置标签名字与sw_train_config表中字段对应
     * @access public
     * @return array 返回数据库字段与对应的标签名字
     */
    public function attributeLabels(){
        return array(
              'train_level'=>'难度级别',
              'train_name'=>'训练名称',
              'train_id'=>'本次训练ID号', 
              'train_model'=>'训练模式', 
                'train_user'=>'训练者',
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
            array('train_level','required','message'=>'请选择难度级别！'),
            array('train_name','required','message'=>'请为本次训练命名！'),
            array('train_name','unique','message'=>'训练命名重复，请重新命名！'),
            array('train_id','required','message'=>'请填入训练ID号！'),
             array('train_model,train_user','safe'),
        );
    }
}