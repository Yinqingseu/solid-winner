USE websafe  
CREATE TABLE  sw_holes_up ( /*用户上传漏洞信息表*/
   id int  NOT NULL  primary key identity(1,1),
   hole_id varchar(255) not null default '',  /*漏洞编号*/
   userId  varchar(255) not null default '',   /*提交用户*/
   hole_name varchar(255) not null default '',  /*漏洞名称*/
   hole_type  int not null default '',     /*漏洞类型，对应sw_holes_type表*/   
   threat_type  int not null default '',  /*威胁类型：0：本地 1：远程*/ 
   threat_level int NOT NULL DEFAULT '',	/*威胁等级0低危1中危2高危3超危*/  
   hole_status int NOT NULL DEFAULT '',   /*漏洞处理状态：0待审阅1待确认2待修复3已关闭4已公开*/   
   deliver_date date not null default '',	 /*发布时间*/
   updated_date date not null default '',	 /*更新时间*/
   vendor_name  date NOT NULL DEFAULT '',			/*受影响实体：厂商名字*/
   vendor_link  date not null default '',			/*受影响实体：厂商链接*/
   hole_details text NOT NULL DEFAULT '',       /*漏洞描述*/
   solutions text NOT NULL DEFAULT '',      /*修复方案*/
   anonymous_flag int NOT NULL DEFAULT '',		 /*是否匿名*/
   agree_flag  int NOT NULL DEFAULT '',			/*是否同意漏洞上传协议*/
   /*后台人员根据上传漏洞信息后期填写内容*/
   hole_patch varchar(255) NOT NULL DEFAULT '',   /*漏洞补丁名称*/
   hole_patch_link varchar(255) NOT NULL DEFAULT '',   /*漏洞补丁链接*/
   related_holes_name varchar(255) NOT NULL DEFAULT '', /*相关漏洞名称*/
   related_holes_link varchar(255) NOT NULL DEFAULT '', /*相关漏洞链接*/
   related_url varchar(255) NOT NULL DEFAULT '', /*参考网址*/
   tag int NOT NULL DEFAULT '',  /*平台能否检测*/
)