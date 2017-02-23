USE websafe  
CREATE TABLE  sw_holes_show (
   id int  NOT NULL  primary key identity(1,1),
   cnnvd_id  varchar(255) not null default '', 
   cve_id varchar(255) not null default '',
   hole_name  varchar(255) not null default '',
   hole_level int not null default '', /*威胁等级0低危1中危2高危3超危*/  
   hole_type int NOT NULL DEFAULT '',  /*漏洞类型，对应sw_holes_type表*/ 
   threat_type int NOT NULL DEFAULT '', /*威胁类型：0：本地 1：远程*/
   deliver_date  date NOT NULL DEFAULT '', /*发布时间*/
   update_date  date not null default '',  /*更新时间*/
   hole_details text NOT NULL DEFAULT '',  /*漏洞描述*/
   hole_patch varchar(255) NOT NULL DEFAULT '',   /*漏洞补丁名称*/
   hole_patch_link varchar(255) NOT NULL DEFAULT '',   /*漏洞补丁链接*/
   related_url varchar(255) NOT NULL DEFAULT '', /*参考网址*/
   solutions text NOT NULL DEFAULT '',  /*修复方案*/
   related_holes_name varchar(255) NOT NULL DEFAULT '', /*相关漏洞名称*/
   related_holes_link varchar(255) NOT NULL DEFAULT '', /*相关漏洞链接*/
   tag  int NOT NULL DEFAULT '',  /*平台能否检测*/
)