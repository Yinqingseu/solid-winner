<?php

/*
 * 实战控制器
 * 实战模块控制器C的定义
 * @author 徐婧
 * @version 1.0
 * @since 2016-10-26
 */
class CombatController extends Controller{
    /*
     * 实战模块页面展示，包括实战类型选择，实战结果展示，实战报表，实战报表下载
     * @access public
     * @since 2016-10-26
     * @version 1.0
     */
    public function actionLayout(){               
        $this->render('layout');
    }
    
    /*
     * ResultDisplay 实战结果展示，根据不同的模块调用不同的数据库，进行展示这里调用的只是攻防或者是靶场模块的结果表
     * @access public
     * @param mixed $chooseModel 攻防或者实战模块的类型 1为攻防模块，2为靶场模块
     * @param mixed $id 结果表的id 结果表在数据库表单中的主键，由此来查询实战结果
     * @since 2016-10-26
     * @version 1.0
     */
    public function actionResultDisplay($chooseModel,$id){//$chooseModel,$id;
        //$chooseModel=2;
        //$id=1;

        //如果是攻防模块，创建相应的对象
        if($chooseModel == '1'){
            $type=1;
            $combat_model = OffenceDefenceResult::model();//创建对象
            $combat_info = $combat_model->findByPk($id);
            $this->render('resultDisplay',array('combat_info'=>$combat_info,'type'=>$type));
        }        
        else if($chooseModel == '2'){
            $type=2;
            $combat_model = TargetRangeResult::model();//创建对象
            $combat_info = $combat_model->findByPk($id);
            $this->render('resultDisplay',array('combat_info'=>$combat_info,'type'=>$type));
        }
        else{
            try {
                $error = '出错';
                throw new Exception($error);
                echo "test";
            } catch (Exception $ex) {
                echo 'Caught exception: '.$ex->getMessage()."\n";
            }
             $this->render('resultDisplayTest');
        }
        //在数据库当中查询实战结果
        //$combat_info = $combat_model->findByPk($id);
        //$this->render('resultDisplayTest');
        //$this->render('resultDisplay',array('combat_info'=>$combat_info,'type'=>$type));
    }
     /*
     * Report 获取实战报表
     * @access public
     * @param mixed $chooseModel 攻防或者实战模块的类型 1为攻防模块，2为靶场模块
     * @param mixed $id 结果表的id 结果表在数据库表单中的主键，由此来查询实战结果
     * @since 2016-10-26
     * @version 1.0
     */
//    public function  actionReport($chooseModel,$id){
//        
//        $this->render('report',array('combat_info'=>$id,'type'=>$chooseModel));
//    }
    public function actionReport(){
        $this->render('report');
    }
    
    
     /*
     * Report 实战报表下载
     * @access public
     * @param mixed $chooseModel 攻防或者实战模块的类型 1为攻防模块，2为靶场模块
     * @param mixed $id 结果表的id 结果表在数据库表单中的主键，由此来查询实战结果
     * @since 2016-10-26
     * @version 1.0
     */
//    public function  actionDownload($chooseModel,$id){
//        
//        $this->render('download',array('combat_info'=>$id,'type'=>$chooseModel));
//    }
    public function  actionDownload(){        
        $this->render('download');
    }
     /*
     * More 更多
     * @access public
     * @since 2016-11-19
     * @version 1.0
     */
    public function  actionMore(){
        
        $this->render('more');
    }
    /*
     * Search 查询
     * @access public
     * @since 2016-11-19
     * @version 1.0
     */
    public function  actionSearch(){
        
        $this->render('search');
    }
}
