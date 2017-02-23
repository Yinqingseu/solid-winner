USE websafe  
CREATE TABLE  sw_tr_team (
   id  int NOT NULL  primary key identity(1,1),
   name varchar(50)  NOT NULL DEFAULT '',
   numberID varchar(255) not null DEFAULT '',--团队编号，在操作页面展示
   member_num int not null default 0,--也是标志，为3时团队人满不可以再添加
   leader_id int not null default 0,--记录主机，即队长的ID
   user_one_id int not null DEFAULT 0,
   user_two_id int not null DEFAULT 0,
   user_three_id int DEFAULT 0,--不为0时代表有第三个队员，且应该与team_member_num保持一致
   grade varchar(50) not null default 90.0,--团队成绩
   setup_time datetime not null,--团队创建的时间
   update_time datetime,--团队更新的时间
)