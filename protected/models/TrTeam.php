<?php

/*
 * 队伍模块
 * 队伍模块的模型M的定义
 * @author 徐婧
 * @version 1.0
 * @since 2016-11-30
 */

class TrTeam extends CActiveRecord{
    public $type;//1=单人 2=多人
    public $team_type;//1=主机 2=从机
    public $trTeamFlag;//团队配置标志，为true时进行配置
    /*
     * 返回当前类的名称
     * @access public
     * @param mixed $classname 类的名字
     * @return 返回类的名字Team
     * @since 2016-11-30
     * @version 1.0
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }
    /*
     * 返回队伍表表名字
     * @access public
     * @param mixed $classname 类的名字
     * @return 返回队伍表表名字
     * @since 2016-11-30
     * @version 1.0
     */
    public function tableName() {
        //parent::tableName();
        return '{{tr_team}}';//返回的是队伍信息表
    }
    
     /**
     * @access public
     * @return 返回attributes的英文对应中文
     * @since 2017-01-15
     * @version 1.0
     */
    function attributeLabels() {
        return array(
        'type'=>'靶场模式选择',//type = 1 单人，=2 多人
        'team_type'=>'主从机选择',//team_type = 1 主机， =2 从机    
        'name'=>'团队名称',
        'numberID'=>'请输入团队编号进行搜索',
        );
    }
    /**
     * 定义团队规则
     * @access public    
     * @return array
     * @since 2017-01-15
     * @version 1.0
     */
    public function rules() {
        return array(
           // array('type','required','message'=>'请选择靶场模式！'), 
            array('type','checkTeamType'), 
            array('name','unique','message'=>'队伍名称已存在！'),//----------------------------????对save()调用保存是否有影响
            array('team_type','checkTeamType'),
            array('numberID','checkNumberID'),
            array('name','checkNumberID'),
            //为没有具体验证规则的属性，设置安全的验证规则，否则attributes不给接收信息
           //array('task_web,task_phone','safe'),
            //验证任务：必选两项以上（自定义方法对爱好进行验证）
        );
    }
    
    
    /**
     * 自定义从机输入编号规则与主机团队名称规则
     * 
     */
    function checkNumberID(){
        $value = $this->team_type;
        if($value == 2){
            if($this->numberID == NULL){               
                $this -> addError('numberID','队伍编号必填！');
            }            
        }else if($value == 1){
            if($this->name == NULL){               
                $this -> addError('name','团队名称必填！');
            }
        }
    }
     /**
     * 自定义主从机选择判断
     * @access public;
     * @return addError
     * @since 2017-01-08
     * @version 1.0
     */
    function checkTeamType(){
        $value = $this->type;
        if($value == null){
            $this -> addError('type','请选择靶场模式');
        }
        else if($value == 2){
            if($this->team_type < 1){               
                $this -> addError('team_type','请点击“多人”选择主从机！');
            }            
        }else{
            
        }
    }
}