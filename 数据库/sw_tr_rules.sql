USE websafe  
CREATE TABLE  sw_tr_rules (
   id  int NOT NULL  primary key identity(1,1),
   user_id int NOt NULL,
   description text DEFAULT'',
   setup_time datetime not null,  
)