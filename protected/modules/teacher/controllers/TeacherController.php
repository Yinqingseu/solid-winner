<?php
/*
 * 教师功能管理模块
 * @author 殷青
 * @version 1.0
 * @since 2016-11-18
 */
class TeacherController extends Controller{
    /*
     * Layout 教师功能管理页面展示
     * @access public
     * @since 2016-10-26
     * @version 1.0
     */
    function actionLayout(){
        //通过控制器方法调用视图
        $this ->renderPartial('layout');
       
    }
    
    /*
     * Login 教师登录页面
     * @access public
     * @since 2016-10-26
     * @version 1.0
     */
    function actionLogin(){
        //创建登录模型对象
        $user_login = new LoginForm; //登录模型 与数据模型是一致的，不同的是它不与数据库进行交互
        
        if(isset($_POST['LoginForm'])){
        //收集表单信息
          $user_login->attributes = $_POST['LoginForm']; 
          
        //校验数据,走的是rules()方法
        //此处不只校验用户名和密码是否填写，还要校验真实性（在模型里边自定义方法校验真实性）
        //用户信息进行session存储，调用模型里边的一个方法login()，就可以进行session存储
        if($user_login->validate()&& $user_login->login())
            $this ->redirect (SITE_URL.'/index.php?r=teacher/teacher/layout'); //登录成功进入平台页面
        }
       $this ->renderPartial('login',array('user_login'=>$user_login));//对表单传入模型便于使用小物件
       
    }
    
    /*
     * Register 教师注册页面
     * @access public
     * @since 2016-11-19
     * @version 1.0
     */
    function actionRegister(){
        //实例化数据模型对象user
        $user_model = new User();
          //性别信息
        $sex[1] = "男";
        $sex[2] = "女";
        $sex[3] = "保密";
        //如果用户有注册表单
        if(isset($_POST['User'])){
            //密码要md5加密
            $_POST['User']['password'] = md5($_POST['User']['password']);
            $_POST['User']['password2'] = md5($_POST['User']['password2']);
            //给模型收集表单信息
            $user_model -> attributes = $_POST['User'];
            
            //实现信息存储
            if($user_model -> save())
                $this ->redirect (SITE_URL.'/index.php?r=teacher/teacher/login');  //重定向
        } 
        //通过控制器方法调用视图
        $this ->renderPartial('register',array('user_model'=>$user_model,'sex'=>$sex));
       
    }
    
        
    /*
     * Findback教师密码找回页面
     * @access public
     * @since 2016-10-26
     * @version 1.0
     */
    function actionFindback(){
        //通过控制器方法调用视图
        $this ->renderPartial('findback');
       
    }
    
    /*
     * InfoShow 教师用户信息展示
     * @access public
     * @since 2016-10-26
     * @version 1.0
     */
    function actionInfoShow(){
        //通过控制器方法调用视图
        $this ->renderPartial('infoshow');
       
    }
    
    /*
     * InfoEdit 教师用户信息编辑
     * @access public
     * @since 2016-10-26
     * @version 1.0
     */
    function actionInfoEdit(){
        //通过控制器方法调用视图
        $this ->renderPartial('infoedit');
       
    }
}

