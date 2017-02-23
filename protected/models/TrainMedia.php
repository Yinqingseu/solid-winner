<?php
/*
 * ③训练模块：视频表模型
 * 可能存储内容：
 * 视频ID，视频名称，视频类别，视频时长
 *  id,name,class,time
 * @author 殷青
 * @version 1.0
 * @since 2016-10-26
 */

class TrainMedia extends CActiveRecord{
    
    /*
     * 返回当前类的名称
     * @access public
     * @param mixed $classname 类的名字
     * @return 返回类的名字TrainMedia
     * @since 2016-10-26
     * @version 1.0
     */
    public static function model($className = __CLASS__){
        return parent::model($className);
    }
    
    /*
     * 返回视频表名字
     * @access public
     * @param mixed $classname 类的名字
     * @return 返回视频表名字
     * @since 2016-10-26
     * @version 1.0
     */
    public function tableName(){
        return "sw_train_media";
    }
    
       /*
     * 设置标签名字与表中字段对应
     * @access public
     * @return array 返回数据库字段与对应的标签名字
     * @since 2016-12-9
     */
    public function attributeLabels(){
        return array(
                    'media_id'=>'视频ID',
                    'media_name'=>'视频名称',
                    'media_type'=>'视频类型',
                    'media_time'=>'视频时长',
        );  
    }
    
}
