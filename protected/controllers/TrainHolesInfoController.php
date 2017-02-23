<?php
/*
 * 渗透测试训练漏洞信息和提示模块控制器：展示各个不同安全等级下的漏洞的源码和对应解析
 * ③渗透测试训练漏洞信息和提示控制器C的定义
 * @author 殷青
 * @version 1.0
 * @since 2017-01-11
 */
class TrainHolesInfoController extends Controller{
    public $layout = '//layouts/viewsource';
    
    /*
     * ViewSource  查看漏洞源码
     * @access public
     * @param mixed $hole 漏洞名称
     * @param mixed $train_level训练难度：1为低级难度，2为中级难度，3为高级难度
     * @since 2017-01-10
     */
    function actionViewSource($train_level,$hole){ //$train_level从config.php的表单中获取
         //创建对象
        $config_model = TrainConfig::model(); 
        //获得最新的训练配置表记录
        $sql =  "select top 1 * from {{train_config}} order by train_id desc"; 
        $config_infos = $config_model -> findAllBySql($sql);
        switch ($hole){
            case 'sqli':
                switch($train_level){ //根据训练难度渲染不同的训练页面
                    case 1:
                        $this -> render('source_sqli_low');
                        break;
                    case 2:
                        $this -> render('source_sqli_medium');
                        break;
                    case 3: 
                        $this -> render('source_sqli_high');
                        break;
                    default:
                        echo "<p>Error：缺少参数：训练难度。</p>";
                        break;
                }
                break;
            case 'brute':
                 switch($train_level){ //根据训练难度渲染不同的训练页面
                    case 1:
                        $level = '低';
                        $this -> render('brute_low');
                        break;
                    case 2:
                        $level = '中'; 
                        $this -> render('brute_medium');
                        break;
                    case 3:
                        $level = '高'; 
                        $this -> render('brute_high');
                        break;
                    default:
                        echo "<p>没有配置训练难度。</p>";
                        break;
                }
                break;
            //还有其他漏洞。。。。。仿照上述格式
            default:
                echo "<p>没有选择要查看的漏洞。</p>";
                break;
                        
        }
        
    }
    
}