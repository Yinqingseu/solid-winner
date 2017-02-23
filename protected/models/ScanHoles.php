<?php
/*
 * ⑫.漏洞扫描模块:漏洞表sw_scan_holes
 * 漏洞扫描模块的漏洞表模型M的定义 
 * @author 殷青
 * @version 1.0
 * @since 2016-10-26
 */

class ScanHoles extends CActiveRecord{
    /*
     * 返回当前类的名称
     * @access public
     * @param mixed $classname 类的名字
     * @return 返回类的名字 ScanHoles 
     * @since 2016-10-26
     * @version 1.0
     */
    public static function model($className = __CLASS__){
        return parent::model($className);
    }
    
     /*
     * 返回扫描结果表名字
     * @access public
     * @param mixed $classname 类的名字
     * @return 返回扫描结果表名字
     * @since 2016-10-26
     * @version 1.0
     */
    public function tableName(){
        return "{{holes_show}}";
    }
 
        /*
     * 设置标签名字与表中字段对应
     * @access public
     * @return array 返回数据库字段与对应的标签名字
     * @since 2016-12-9
     */
    public function attributeLabels(){
        return array(
                    'cnnvd_id'=>'CNNVD漏洞编号',
                    'cve_id'=>'CVE编号',
                    'hole_name'=>'漏洞名称',
                    'hole_level'=>'危险等级',
                    'hole_type'=>'漏洞类型',
                    'deliver_date'=>'发布日期',
                    'update_date'=>'更新日期',
                    'threat_type'=>'威胁类型', 
                    'hole_details'=>'漏洞介绍',
                    'hole_patch'=>'漏洞补丁',
                    'related_url'=>'参考网址',
                    //添加
                    'solutions'=>'解决办法',
                    'hole_patch_link'=>'漏洞补丁链接',
                    'related_holes_name'=>'相关漏洞名称',
                    'related_holes_link'=>'相关漏洞链接',
                    'tag'=>'平台能否检测',
        );  
    }
}