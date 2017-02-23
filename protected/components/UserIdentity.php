<?php

/**
 * UserIdentity represents the data needed to identity a user.
 * It contains the authentication method that checks if the provided
 * data can identity the user.
 */
class UserIdentity extends CUserIdentity
{                   //web/auth/CUserIdentity.php
    
        public $user_id;//添加的属性
        public function getId(){ //覆盖CUserIdentity中getId()方法
            return $this->user_id;
        }
	public function authenticate()
	{
//		2016-11-20 殷青修改
            //此处进行用户名和密码真实性的校验，根据用户名查询是否有一个用户信息
            $user_model = User::model()-> find('username=:name',array(':name'=>$this->username));
            //如果用户名不存在
            if($user_model === NULL){
                $this -> errorCode = self::ERROR_USERNAME_INVALID;
                return FALSE;
            }else if($user_model->password !== $this->password){
                //密码判断
                $this->errorCode=  self::ERROR_PASSWORD_INVALID;
                return FALSE;
            }else{
                $this->errorCode = self::ERROR_NONE;
                $this->user_id = $user_model->user_id;
            //将用户id赋值给属性public $user_id
                //程序中使用 Yii::app()->user->id获取用户ID
                return true;   
            }
	}
        
       
        
}