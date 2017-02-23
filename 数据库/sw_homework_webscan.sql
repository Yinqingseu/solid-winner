USE websafe  
CREATE TABLE  sw_homework_webscan (
   id  int NOT NULL  primary key identity(1,1),
   scan_name  varchar(255)  NOT NULL DEFAULT '',
   scan_id numeric  NOT NULL DEFAULT '',
   model int  NOT NULL DEFAULT 2,
   choice int  NOT NULL DEFAULT '',
   scan_url varchar(255)  NOT NULL DEFAULT '',
   scan_depth int  NOT NULL DEFAULT '',
   numofthreads int  NOT NULL DEFAULT '',
   scan_holelist varchar(255) not null DEFAULT '',
   tool int  NOT NULL DEFAULT '',
   selfcheck varchar(255)  NOT NULL DEFAULT '',
   requirements  varchar(255) not null default '',
   teacher  varchar(255) not null default '',
   deliver_date  date not null default '',
   deadline date not null default '',
   score int  NOT NULL DEFAULT '',
   keys text NOT NULL DEFAULT '',    /*作业答案*/
   kflag int  NOT NULL DEFAULT '',   /*标记是否允许展示作业答案0：不允许1：允许*/
)