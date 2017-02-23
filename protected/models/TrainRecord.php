<?php
/*
 * ③训练模块：训练学习进度表模型
 * 训练模块的训练学习进度表模型M的定义
 * 可能记录内容：
 * 记录ID，用户ID，已观看实例视频ID，对应实例视频ID观看时长，已观看实例总时长
 * record_id, user_id, viewd_id, viewd_time, total_time
 * @author 殷青
 * @version 1.0
 * @since 2016-10-26
 */
class TrainRecord extends CActiveRecord{
    /*
     * 返回当前类的名称
     * @access public
     * @param mixed $classname 类的名字
     * @return 返回类的名字TrainRecord
     * @since 2016-10-26
     * @version 1.0
     */
    public static function model($className = __CLASS__){
        return parent::model($className);
    }
   
    /*
     * 返回训练学习进度表名字
     * @access public
     * @param mixed $classname 类的名字
     * @return 返回训练学习进度表名字
     * @since 2016-10-26
     * @version 1.0
     */
    public function tableName(){
        return "sw_trian_record";
    }
   
}
