USE websafe  
CREATE TABLE  sw_teacher (
   user_id  int NOT NULL  primary key identity(1,1),
   username varchar(255)  NOT NULL DEFAULT '',
   password varchar(255)  NOT NULL DEFAULT '',
   user_email varchar(255) not null,
   user_sex	tinyint not null DEFAULT 1,
   user_tel int NOT NULL DEFAULT '',
   user_role tinyint not null DEFAULT 2,
)