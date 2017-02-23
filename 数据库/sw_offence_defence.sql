USE websafe  
CREATE TABLE  sw_offence_defence (
   id  int NOT NULL  primary key identity(1,1),
   type int NOT NULL DEFAULT 0,
   role int  NOT NULL DEFAULT 0,
   name varchar(50) DEFAULT null,
   user_id int  not null DEFAULT 1,
   team_id int DEFAULT 1,
   environ_id int not null DEFAULT 1,
   setup_time datetime not null,
   update_time datetime, 
)