<?php
/*
 * ⑫.漏洞扫描模块:漏洞表sw_upholes
 * 漏洞扫描模块的用户上传漏洞表模型M的定义 
 * @author 殷青
 * @version 1.0
 * @since 17-2-23 上午9:14
 */

class UpHoleInfos extends CActiveRecord{
    /*
     * 返回当前类的名称
     * @access public
     * @param mixed $classname 类的名字
     * @return 返回类的名字 UpHoleInfos 
     * @since 17-2-23 上午9:14
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
     * @since 17-2-23 上午9:14
     * @version 1.0
     */
    public function tableName(){
        return "{{holes_up}}";
    }
 
        /*
     * 设置标签名字与表中字段对应
     * @access public
     * @return array 返回数据库字段与对应的标签名字
     * @since 17-2-23 上午9:14
     */
    public function attributeLabels(){
        return array(
                    'hole_id'=>'漏洞编号',
                    'userId'=>'提交用户',
            
                    'hole_name'=>'漏洞名称',
                    'hole_type'=>'漏洞类型',
                    'threat_type'=>'威胁类型', 
                    'threat_level'=>'威胁等级', 
                    'vendor_name'=>'厂商名字',
                    'vendor_link'=>'厂商链接',
                    'hole_details'=>'漏洞详情',
                    'solutions'=>'修复方案',
                    'anonymous_flag'=>'是否匿名',
                    'agree_flag'=>'是否同意漏洞上传协议',
            
                    'deliver_date'=>'发布日期',
                    'update_date'=>'更新日期',
                    'hole_status'=>'漏洞处理状态',
                    //后台人员补充信息
                    'hole_patch'=>'漏洞补丁',
                    'related_url'=>'参考网址',
                    'hole_patch_link'=>'漏洞补丁链接',
                    'related_holes_name'=>'相关漏洞名称',
                    'related_holes_link'=>'相关漏洞链接',
                    'tag'=>'平台能否检测',
        );  
    }
}