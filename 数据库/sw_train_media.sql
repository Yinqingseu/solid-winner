USE websafe  
CREATE TABLE  sw_train_media (
   media_id  int NOT NULL  primary key identity(1,1),
   media_name varchar(255) NOT NULL DEFAULT '',
   media_type varchar(255) NOT NULL DEFAULT '',
   media_time time NOT NULL DEFAULT '',
)