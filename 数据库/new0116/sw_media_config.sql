USE websafe  
CREATE TABLE  sw_media_config (
   id  int NOT NULL  primary key identity(1,1),
   train_model int  NOT NULL DEFAULT '',
   train_name varchar(MAX)  NOT NULL DEFAULT '',
   train_id numeric  NOT NULL DEFAULT '',
   train_user varchar(MAX)  NOT NULL DEFAULT '',
   media_id int  NOT NULL DEFAULT '',
)