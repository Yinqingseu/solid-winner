USE websafe  
CREATE TABLE  sw_environ (
   id  int NOT NULL  primary key identity(1,1),
   name varchar(255) NOT NULL DEFAULT'',
   protocol_id int not null,
   device_id int NOT NULL ,
   user_id int not null ,
   combat_type int not null DEFAULT 1,--1代表攻防模式，2代表靶场模式
   setup_time datetime not null,  
)