USE websafe  
CREATE TABLE  sw_combat_report (
   id  int NOT NULL  primary key identity(1,1),
   result varchar(255) NOT NULL DEFAULT'',
   comments text ,
   type int not null ,
   setup_time datetime not null,  
)