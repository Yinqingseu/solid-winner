<?php
/*
 * ⑫.漏洞扫描模块:漏洞威胁等级表sw_holes_threat_level
 * 漏洞扫描模块的漏洞威胁等级表模型M的定义 
 * @author 殷青
 * @version 1.0
 * @since 17-2-23 上午9:37
 */

class HolesThreatLevel extends CActiveRecord{
    /*
     * 返回当前类的名称
     * @access public
     * @param mixed $classname 类的名字
     * @return 返回类的名字 HolesThreatLevel
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
     * @return 返回漏洞威胁等级表名字
     * @since 17-2-23 上午9:37
     * @version 1.0
     */
    public function tableName(){
        return "{{holes_threat_level}}";
    }

}