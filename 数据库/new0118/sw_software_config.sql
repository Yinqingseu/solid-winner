USE websafe  
CREATE TABLE  sw_software_config (
   scan_id  int NOT NULL  primary key identity(1,1),
   scan_name  varchar(255)  NOT NULL DEFAULT '',
   scan_software varchar(255)  NOT NULL DEFAULT '',
   numofthreads int  NOT NULL DEFAULT '',
   creator  text not null default '',
   create_time datetime not null default '',
)