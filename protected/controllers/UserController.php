<?php
/*
 * ①用户模块:学生
 *用户模块控制器C的定义:用户登录；忘记密码；用户注册；用户注销；用户权限分配
 * @author 殷青
 * @version 1.0
 * @since 2016-10-26
 */
class UserController extends Controller{
     /*
     * s 验证码生成功能：在当前控制器中以方法的形式访问其他类；
     * 访问./index.php?r=user/captcha就会访问到方法中的CCaptchaAction,
      * 会走CCaptchaAction类里边的run()方法
     * @access public
     * @since 2016-12-12
     * @version 1.0
     */
    function actions(){
        return array(
            'captcha'=>array(
                'class'=>'system.web.widgets.captcha.CCaptchaAction',
            ),
        );
    }
    
    /*
     * Login 用户登录功能
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
             $this ->redirect('./index.php?r=user/layout'); //登录成功进入平台页面
        }
        //通过控制器方法调用视图
        //renderPatial()调用视图,渲染视图
       $this ->renderPartial('login',array('user_login'=>$user_login));//对表单传入模型便于使用小物件
    } 
    
    /*
     * Layout 学生平台展示界面--首页
     * @access public
     * @since 2016-11-19
     * @version 1.0
     */
    function actionLayout(){
        
        $this->renderPartial('layout');
    }

    /*
     * Register 用户注册功能：1.展现注册表单 2.收集数据、校验数据、存储数据
     * @access public
     * @since 2016-10-26
     * @version 1.0
     */
   function actionRegister(){
        //实例化数据模型对象user
        $user_model = new User();
         //* renderPartial不渲染布局
        // * render会渲染布局 
        //$this ->renderPartial('register');
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
                $this ->redirect (SITE_URL.'/index.php?r=user/login');  //重定向
        } 
        //array中的内容为将数据传递到view中的小物件中
        echo  $this ->renderPartial('register',array('user_model'=>$user_model,'sex'=>$sex)); 
    }

    /*
     * Logout 用户退出系统
     * @access public
     * @since 2016-10-26
     * @version 1.0
     */
    function actionLogout(){
        //删除session信息
        Yii::app()->session->clear(); //删除内存里边session变量信息
        Yii:app()->session->destroy(); //删除服务器的session文件
        $this->redirect('/'); //重定向到根目录
    }
    
    /*
     * findback 忘记密码，找回密码
     * @access public
     * @since 2016-10-26
     * @version 1.0
     */
    function actionfindback(){
        //找回密码
        $this ->renderPartial('findback');
    }
    
    /*
     * InfoEdit 用户信息变更
     * @access public
     * @since 2016-10-26
     * @version 1.0
     */
    function actionInfoEdit(){
         $this ->render('infoedit');
    }
    
   /*
    * TargetProcess 个人资料：靶场模块学习进度展示
     * @access public
     * @since 2016-11-19
     * @version 1.0
     */
    function actionTargetProcess (){
        $this->render('targetprocess');
    }
    
     /*
      * TrainProcess 个人资料：训练模块学习进度展示
     * @access public
     * @since 2016-11-19
     * @version 1.0
     */
    function actionTrainProcess (){
        $this->render('trainprocess');
    }
   
    /*
     * OffenceDefenceProcess 个人资料：实战模块学习进度展示
     * @access public
     * @since 2016-11-19
     * @version 1.0
     */
    function actionOffenceDefenceProcess (){
        $this->render('offencedefenceprocess');
    }
 
    /*
     * ToolsShow 平台工具展示界面
     * @access public
     * @since 2016-11-19
     * @version 1.0
     */
    function actionToolShow (){
        $this->render('toolshow');
    }
    
      /*
     * reportShow 平台报表展示界面
     * @access public
     * @since 2016-11-19
     * @version 1.0
     */
    function actionReportShow (){
        $this->render('reportshow');
    }
    
  /*
   * Test 测试界面
     * @access public
     * @since 2016-11-19
     * @version 1.0
     */
    function actionTest(){
        $this->renderPartial('Test');
    }
    
    
}
