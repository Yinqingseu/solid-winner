<?php
/*
 * 教师用户管理模块
 * 教师用户管理模块的模型M的定义
 * @author 殷青
 * @version 1.0
 * @since 2016-11-19
 */
class Admin extends CActiveRecord{
    /*
     * 返回当前类的名称
     * @access public
     * @param mixed $classname 类的名字
     * @return 返回类的名字 User
     * @since 2016-10-26
     */
    public static function model($className = __CLASS__){
        return parent::model($className);
    }
    
    /*
     * 返回教师用户表名字
     * @access public
     * @param mixed $classname 类的名字
     * @return 返回教师用户表名字
     * @since 2016-10-26
     */
    public  function tableName(){
        return "sw_admin";
    }
    
    //确认密码
    public $password2;
    
    /*
     * 设置标签名字与sw_user表中字段对应
     * @access public
     * @return array 返回数据库字段与对应的标签名字
     * @since 2016-10-26
     */
    public function attributeLabels(){
        return array(
            'username'=>'用户名',
            'password'=>'密  码',
            'password2'=>'确认密码',
            'rememberMe'=>'记住密码',
            'user_sex'=>'性 别',
            'user_email'=>'邮 箱',
            'user_tel'=>'手 机',

        );
    }

    /*
     * 定义具体表单域验证规则，实现用户注册表单验证
     * @access public
     * @return array 返回各个属性的表单域验证规则
     * @since 2016-10-26
     */
    public function rules(){
        return array(
            array('username','required','message'=>'用户名必填'),
            //用户名不能重复（与数据比较）
            array('username','unique','message'=>'用户名已占用'),
            array('password','required','message'=>'密码必填'),
            //验证确认密码，要与密码的信息一致
            array('password2','compare','compareAttribute'=>'password','message'=>'两次密码必须一致'),
            //邮箱默认不能为空
            array('user_email','email','allowEmpty'=>false, 'message'=>'邮箱格式不正确'),
            //验证手机号码（都是数字13开始，一共有11位）
            array('user_tel','match','pattern'=>'/^13\d{9}$/','message'=>'手机号码格式不正确'),
        
        );
    }
}

