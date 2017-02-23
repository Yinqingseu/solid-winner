USE websafe  
CREATE TABLE  sw_target_range (
   id  int NOT NULL  primary key identity(1,1),
   type int NOT NULL DEFAULT 0,
   target int not null DEFAULT 0,
   task_zhuji int DEFAULT 0,
   task_web int DEFAULT 0,
   task_phone int DEFAULT 0,
   name varchar(50) DEFAULT null,
   user_id int  not null DEFAULT 1,
   team_id int DEFAULT 1,
   team_type int DEFAULT 0,
   team_info varchar(50) DEFAULT null,
   rules_id int NOt NULL DEFAULT 1,
   environ_id int not null DEFAULT 1,
   setup_time datetime not null,
   update_time datetime,
)