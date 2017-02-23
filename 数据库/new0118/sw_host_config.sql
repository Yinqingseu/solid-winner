USE websafe  
CREATE TABLE  sw_host_config (
   scan_id  int NOT NULL  primary key identity(1,1),
   scan_name  varchar(255)  NOT NULL DEFAULT '',
   start_ip varchar(255)   NOT NULL DEFAULT '',
   end_ip  varchar(255) NOT NULL DEFAULT '',
   start_port int NOT NULL DEFAULT '',
   end_port int NOT NULL DEFAULT '',
   numofthreads int  NOT NULL DEFAULT '',
   scan_holelist int not null DEFAULT '',
   creator  text not null default '',
   create_time datetime not null default '',
)