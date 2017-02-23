<?php

/*
 * 队伍模块
 * 队伍模块的模型M的定义
 * @author 徐婧
 * @version 1.0
 * @since 2016-11-30
 */

class Team extends CActiveRecord{
    
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
        return '{{team}}';//返回的是队伍信息表
    }
}