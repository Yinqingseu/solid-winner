<?php

/**
 * 攻防模块
 * 攻防模块的模型M的定义
 * @author 徐婧
 * @version 1.0
 * @since 2016-10-26
 */

class OffenceDefence extends CActiveRecord{
    public $odCurrentID;//当前存入攻防表的ID
    public $odName;//实验名称
    public $test;//测试
    /**
     * 返回当前类的名称
     * @access public
     * @param mixed $classname 类的名字
     * @return 返回类的名字OffenceDefence
     * @since 2016-10-26
     * @version 1.0
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }
    /**
     * 返回攻防表名字
     * @access public
     * @param mixed $classname 类的名字
     * @return 返回攻防表
     * @since 2016-10-26
     * @version 1.0
     */
    public function tableName() {
        //parent::tableName();
        return '{{offence_defence}}';//返回的是攻防模块的攻防表
    }
    
    /**
     * @access public
     * @return 返回attributes的英文对应中文
     * @since 2016-12-15
     * @version 1.0
     */
    function attributeLabels() {
        return array(        
        'type'=>'攻防模式选择',//type = 1 单人，=2 多人
        'role'=>'攻防角色选择',//role = 1 攻击者， =2 防御者
        'name'=>'实验名称',
        );
    }
    
    /**
     * 定义攻防规则
     * @access public    
     * @return type
     * @since 2016-10-26
     * @version 1.0
     */
    public function rules() {
        return array(
            array('type','required','message'=>'请选择攻防模式！'),
            array('role','required','message'=>'请选择攻防角色！'),
            array('name','required','message'=>'实验名称必填！'),
            //实验名称不可重复（与数据库比较）
            array('name','unique','message'=>'实验名称已存在！'),
            //为没有具体验证规则的属性，设置安全的验证规则，否则attributes不给接收信息
//            array('user_id,environ_id,team_id','safe'),
        );
    }
}