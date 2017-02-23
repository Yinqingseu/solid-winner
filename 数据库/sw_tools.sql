USE websafe  
CREATE TABLE  sw_tools (
   id  int NOT NULL  primary key identity(1,1),
   name varchar(255) NOT NULL DEFAULT'',
   describe text not null,
   add_user_id int not null default 1,
   add_time datetime not null,  
)