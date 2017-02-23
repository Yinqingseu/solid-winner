USE websafe  
CREATE TABLE  sw_web_config (
   id  int NOT NULL  primary key identity(1,1),
   scan_name  varchar(255)  NOT NULL DEFAULT '',
   scan_url varchar(255)  NOT NULL DEFAULT '',
   scan_depth int  NOT NULL DEFAULT '',
   numofthreads int  NOT NULL DEFAULT '',
   scan_holelist int not null DEFAULT '',
   creator  text not null default '',
   create_time datetime not null default '',
   scan_id int  NOT NULL DEFAULT '',
   model int  NOT NULL DEFAULT 1,
   choice int  NOT NULL DEFAULT 1,
   tool int  NOT NULL DEFAULT '',
   selfcheck int  NOT NULL DEFAULT '',
)