USE websafe  
CREATE TABLE  sw_record_homework_penetration (
   id  int NOT NULL  primary key identity(1,1),
   homework_id  numeric  NOT NULL DEFAULT '',
   homework_type int  NOT NULL DEFAULT '',		/*作业类型：1训练2靶场3实战4漏扫*/
   name varchar(MAX)  NOT NULL DEFAULT '',
   submit_date datetime  NOT NULL DEFAULT '', /*记录第一次的提交时间*/
   lated_date datetime  NOT NULL DEFAULT '', /*记录最近一次的提交时间*/
   deadline date not null DEFAULT '',
   score  int not null default '',
   teacher_name varchar(MAX)  NOT NULL DEFAULT '',
   userid  numeric  NOT NULL DEFAULT '',		/*学生id号*/
   submit_count int not null default 0, /*提交次数*/
   answer text not null default '',   /*答案*/
   start_time datetime  NOT NULL DEFAULT '', /*训练开始时间*/
   end_time datetime  NOT NULL DEFAULT '',   /*训练结束时间*/
   correct_status int NOT NULL DEFAULT 0,  /*作业批改状态：0：未批改；1：已批改*/
)