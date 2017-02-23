
 <?php
/**
 * 靶场实战自主配置模块
 * 靶场实战自主配置模块的模型M的定义
 * @author 徐婧
 * @version 1.0
 * @since 2016-10-27
 */

class TargetRangeCombat extends CActiveRecord{
    public $trCurrentID;//当前存入靶场表的ID
    public $trChangeFlag;//修改配置标志，为true时进行修改
    /**
     * 返回当前类的名称
     * @access public
     * @param mixed $classname 类的名字
     * @return 返回类的名字OffenceDefence
     * @since 2016-10-27
     * @version 1.0
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }
    /**
     * 返回靶场表名字
     * @access public
     * @param mixed $classname 类的名字
     * @return 返回
     * @since 2016-10-26
     * @version 1.0
     */
    public function tableName() {
        //parent::tableName();
        return '{{target_range_combat}}';//返回的是靶场模块的靶场表
    }
    
    /**
     * @access public
     * @return 返回attributes的英文对应中文
     * @since 2016-12-16
     * @version 1.0
     */
    function attributeLabels() {
        return array(
        'type'=>'靶场模式选择',//type = 1 单人，=2 多人
        'target'=>'靶场目标选择',//target = 1 主机 =2 网站 =3 手机
        'task_zhuji'=>'靶场主机任务选择',
        'task_web'=>'靶场网站任务选择',
        'task_phone'=>'靶场手机任务选择',
        'name'=>'实战命名',
        );
        //        'team_type'=>'主从机选择',//team_type = 1 主机， =2 从机
    }
    
    /**
     * 定义靶场规则
     * @access public    
     * @return array
     * @since 2016-10-26，2017-01-08
     * @version 1.0
     */
    public function rules() {
        return array(
            array('type','required','message'=>'请选择靶场模式！'),            
            array('target','required','message'=>'请选择靶场目标！'),
            array('task_zhuji,task_web,task_phone','checkTask'),            
            array('name','required','message'=>'实验名称必填！'),
            //实验名称不可重复（与数据库比较）
            array('name','unique','message'=>'实验名称已存在！'),
            //为没有具体验证规则的属性，设置安全的验证规则，否则attributes不给接收信息
           //array('task_web,task_phone','safe'),
            //验证任务：必选两项以上（自定义方法对爱好进行验证）
        );
    }

    /**
     * 自定义靶机任务规则，在当前模型里边定义一个方法checkTask对目标进行验证
     * @access public;
     * @return addError
     * @since 2017-01-08
     * @version 1.0
     */
    function checkTask(){
        //在这个方法里边，我们可以获得模型的相关信息
        //$this -> 属性名;  //调用模型对象的相关属性信息
        //$this 就是我们在控制器controller里边实例化好的模型对象
        //获取目标值，只设置该目标的JS报错
        $value = $this->target;
        if($value == 1){
            if($this->task_zhuji < 2){               
                $this -> addError('task_zhuji','请点击“主机”选择靶场主机任务！');
            }            
        }else if($value == 2){
           if($this->task_web < 2){              
                $this -> addError('task_web','请点击“网站”选择靶场网站任务！');
            }
        }else if($value == 3){
           if($this->task_phone < 2){               
                $this -> addError('task_phone','请点击“手机”选择靶场手机任务！');
            }
        }else{
            $this -> addError('target','未知错误');
        }        
    }
}