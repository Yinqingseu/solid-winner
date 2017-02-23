USE websafe  
CREATE TABLE  sw_admin (
   user_id  int NOT NULL  primary key identity(1,1),
   username varchar(255)  NOT NULL DEFAULT '',
   password varchar(255)  NOT NULL DEFAULT '',
   user_email varchar(255) not null,
   user_sex	tinyint not null DEFAULT 1,
   user_tel int NOT NULL DEFAULT '',
   user_role tinyint not null DEFAULT 3,--1 student 2 teacher 3 admmin
)