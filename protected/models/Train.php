<?php
/*
 * ③训练模块：训练表
 * 训练模块的训练表模型M的定义 
 * 可能存储内容：
 * 题目ID、难度级别、语言类型、题目名称、题目类别、题目对应答案解析
 * id,difficulty,language,name,class,answer
 * @author 殷青
 * @version 1.0
 * @since 2016-10-26
 */

class Train extends CActiveRecord{
    /*
     * 返回当前类的名称
     * @access public
     * @param mixed $classname 类的名字
     * @return 返回类的名字 Train
     * @since 2016-10-26
     * @version 1.0
     */
    public static function model($className = __CLASS__){
        return parent::model($className);
    }
    
    /*
     * 返回训练报表名字
     * @access public
     * @param mixed $classname 类的名字
     * @return 返回训练报表名字
     * @since 2016-10-26
     * @version 1.0
     */
    public function tableName(){
        return "sw_train";
    }
    
    /*
     * 设置标签名字与sw_train表中字段对应
     * @access public
     * @return array 返回数据库字段与对应的标签名字
     * @since 2016-10-26
     */
    public function attributeLabels(){
        return array(
            'difficulty'=>'难度级别',
            'language'=>'语言类别',
            'id'=>'题目ID',
            'name'=>'题目名称',
            'class'=>'题目类别',
            'answer'=>'题目解析',
        );
    }
}