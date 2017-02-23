<?php
/*
 * ⑮查询模块控制器
 * 查询模块控制器C的定义
 * @author 殷青
 * @version 1.0
 * @since 2016-10-26
 */
class SearchController extends Controller{
     /*
     * Index 查询模块页面展示
     * @access public
     * @since 2016-10-26
     * @version 1.0
     */
     public function actionIndex()
	{
		$this -> render('search');
	}
      
    /*
     * Search 查询功能实现
     * @access public
     * @since 2016-10-26
     * @version 1.0
     */
    public function actionSearch()
	{
        }
    /*
     * Combat 查询
     * @access public
     * @since 2016-11-19
     * @version 1.0
     */
    public function  actionCombat(){
        
        $this->render('combat');
    }
    /*
     * CombatTime 根据时间查询
     * @access public
     * @since 2016-12-02
     * @version 1.0
     */
    public function  actionCombatTime(){
        
        $this->render('combatTime');
    }
    
     /*
     * CombatUser 根据用户查询
     * @access public
     * @since 2016-12-02
     * @version 1.0
     */
    public function  actionCombatUser(){
        
        $this->render('combatUser');
    }
    
     /*
     * CombatName 根据用户名查询
     * @access public
     * @since 2016-12-02
     * @version 1.0
     */
    public function  actionCombatName(){
        
        $this->render('combatName');
    }
    
      /*
     * CombatMore 更多
     * @access public
     * @since 2016-11-19
     * @version 1.0
     */
    public function  actionCombatMore(){
        
        $this->render('combatmore');
    }
    public function  actionDevice(){
        
        $this->render('device');
    }
      /*
     * CombatMore 更多
     * @access public
     * @since 2016-11-19
     * @version 1.0
     */
    public function  actionDeviceMore(){
        
        $this->render('devicemore');
    }
        
}