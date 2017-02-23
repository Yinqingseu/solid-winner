<?php
/*
 * ③训练模块：攻防实例观看视频配置表模型
 * @author 殷青
 * @version 1.0
 * @since 2017-01-15
 */

class TrainMediaConfig extends CActiveRecord{
    
    /*
     * 返回当前类的名称
     * @access public
     * @param mixed $classname 类的名字
     * @return 返回类的名字 TrainMediaConfig
     * @since 2017-01-15
     * @version 1.0
     */
    public static function model($className = __CLASS__){
        return parent::model($className);
    }
    
    /*
     * 返回攻防实例观看视频配置表名字
     * @access public
     * @param mixed $classname 类的名字
     * @return 返回攻防实例观看视频配置表名字
     * @since 2017-01-15
     * @version 1.0
     */
    public function tableName(){
        return "sw_media_config";
    }
    
       /*
     * 设置标签名字与表中字段对应
     * @access public
     * @return array 返回数据库字段与对应的标签名字
     * @since 2017-01-15
     */
    public function attributeLabels(){
        return array(
                    'train_name'=>'训练名称',
                    'train_id'=>'本次训练ID号', 
                    'train_model'=>'训练模式', 
                    'train_user'=>'训练者',
                    'media_id'=>'观看视频选择', 
        );  
    }
    
    /*
     * 定义具体表单域验证规则
     * @access public
     * @return array 返回各个属性的表单域验证规则
     * @since 2017-01-15
     */
    public function rules(){
        return array(
            array('train_name','required','message'=>'请为本次训练命名！'),
            array('train_name','unique','message'=>'训练命名重复，请重新命名！'),
            array('train_model,train_user,train_media,train_id,media_id','safe'),
        );
    }
    
}
