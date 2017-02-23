USE websafe  
CREATE TABLE  sw_train_config (
   id  int NOT NULL  primary key identity(1,1),
   train_level int  NOT NULL DEFAULT '',
   train_name  varchar(255) not null default '',
   train_id  numeric not null default '',
   train_user varchar(255) not null default '',
)