USE websafe  
CREATE TABLE  sw_protocol (
   id  int NOT NULL  primary key identity(1,1),
   name varchar(255) NOT NULL DEFAULT'',
   description text not null ,
   user_id int not null,
   setup_time datetime not null,  
)