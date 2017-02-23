USE websafe  
CREATE TABLE  sw_operation_record (
   id  int NOT NULL  primary key identity(1,1),
   type int NOT NULL DEFAULT 1,
   user_id int NOt NULL,
   change_id int DEFAULT 1,
   operation varchar(255) NOT NULL DEFAULT'',
   setup_time datetime not null,  
)