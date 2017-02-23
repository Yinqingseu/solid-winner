USE websafe  
CREATE TABLE  sw_device (
   id  int NOT NULL  primary key identity(1,1),
   name varchar(255) NOT NULL DEFAULT'',
   device_num int not null,
   setup_time datetime not null,  
)