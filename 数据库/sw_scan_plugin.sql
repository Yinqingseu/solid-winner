USE websafe  
CREATE TABLE  sw_scan_plugin (
   plugin_id  int NOT NULL  primary key identity(1,1),
   plugin_name varchar(255) not null default '',
   plugin_version  varchar(255)  NOT NULL DEFAULT '',
   plugin_summary text  NOT NULL DEFAULT '',
   plugin_content varchar(255)  NOT NULL DEFAULT '',
   plugin_family varchar(255)   NOT NULL DEFAULT '',
   plugin_creator  varchar(255) NOT NULL DEFAULT '',
   plugin_create_time date NOT NULL DEFAULT '',
   plugin_download varchar(255) NOT NULL DEFAULT '',
)