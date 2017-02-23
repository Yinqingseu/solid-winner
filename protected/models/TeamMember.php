<?php

/*
 * 队伍成员模块
 * 队伍成员模块的模型M的定义
 * @author 徐婧
 * @version 1.0
 * @since 2016-11-30
 */

class TeamMember extends CActiveRecord{
    
    /*
     * 返回当前类的名称
     * @access public
     * @param mixed $classname 类的名字
     * @return 返回类的名字TeamMember
     * @since 2016-11-30
     * @version 1.0
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }
    /*
     * 返回队伍成员表表名字
     * @access public
     * @param mixed $classname 类的名字
     * @return 返回队伍表表名字
     * @since 2016-11-30
     * @version 1.0
     */
    public function tableName() {
        //parent::tableName();
        return '{{team_member}}';//返回的是队伍成员信息表
    }
    
    function attributeLabels() {
        return array(
        'team_id'  =>'队伍ID',
        'team_name'=>'队伍名称',
        'user_talent'=>'个人特长'
            //<?php echo $form->labelEx($goods_model,'goods_name');
        );
    }
}