<?php
/*
 * ⑫.漏洞扫描模块:漏扫用户信息表（后期漏扫模块可能独立出来）sw_scan_user
 * 漏洞扫描模块的漏扫用户信息表M的定义 
 * 可能存储内容：
 * 用户id,用户名,用户密码,确认密码，用户手机号,用户邮箱,用户登录时间,扫描名称，对应的扫描配置,保存的扫描进度；
 * id,username,password,password2，user_tel,user_email,user_login_time,scan_name,scan_config,scan_process
 * @author 殷青
 * @version 1.0
 * @since 2016-10-26
 */
class ScanUser extends CActiveRecord{
    /*
     * 返回当前类的名称
     * @access public
     * @param mixed $classname 类的名字
     * @return 返回类的名字 ScanUser
     * @since 2016-10-26
     * @version 1.0
     */
    public static function model($className = __CLASS__){
        return parent::model($className);
    }
    
    /*
     * 返回漏扫用户信息表名字
     * @access public
     * @param mixed $classname 类的名字
     * @return 返回漏扫用户信息表名字
     * @since 2016-10-26
     * @version 1.0
     */
    public function tableName(){
        return "{{sw_scan_user}}";
    }
 
    /*
     * 设置标签名字与sw_scan_user表中字段对应
     * @access public
     * @return array 返回数据库字段与对应的标签名字
     * @since 2016-10-26
     */
      public function attributeLabels(){
        return array(
            'id'=>'用户id',
            'username'=>'用户名',
            'password'=>'用户密码',
            'password2'=>'确认密码',
            'user_email'=>'邮 箱',
            'user_tel'=>'手 机',
            'user_login_time'=>'用户登录时间',
            'scan_name'=>'扫描名称',
            'scan_config'=>'扫描配置',
            'scan_process'=>'扫描进度',
            );
      }
    

}
