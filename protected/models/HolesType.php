<?php
/*
 * ⑫.漏洞扫描模块:漏洞类型表sw_holes_type
 * 漏洞扫描模块的漏洞类型表模型M的定义 
 * @author 殷青
 * @version 1.0
 * @since 17-2-23 上午9:37
 */

class HolesType extends CActiveRecord{
    /*
     * 返回当前类的名称
     * @access public
     * @param mixed $classname 类的名字
     * @return 返回类的名字 HolesType 
     * @since17-2-23 上午9:37
     * @version 1.0
     */
    public static function model($className = __CLASS__){
        return parent::model($className);
    }
    
     /*
     * 返回扫描结果表名字
     * @access public
     * @param mixed $classname 类的名字
     * @return 返回漏洞类型表名字
     * @since 17-2-23 上午9:37
     * @version 1.0
     */
    public function tableName(){
        return "{{holes_type}}";
    }

}