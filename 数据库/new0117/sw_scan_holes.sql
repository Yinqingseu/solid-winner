USE websafe  
CREATE TABLE  sw_scan_holes (
   id int  NOT NULL  primary key identity(1,1),
   cnnvd_id  varchar(255) not null default '',
   cve_id varchar(255) not null default '',
   hole_name  varchar(255) not null default '',
   hole_level varchar(255) not null default '',
   hole_type varchar(255) NOT NULL DEFAULT '',
   deliver_date  date NOT NULL DEFAULT '',
   update_date  date not null default '',
   threat_type varchar(255) NOT NULL DEFAULT '',
   hole_details text NOT NULL DEFAULT '',
   hole_patch varchar(255) NOT NULL DEFAULT '',
   hole_patch_link varchar(255) NOT NULL DEFAULT '',
   related_url varchar(255) NOT NULL DEFAULT '',
   solutions text NOT NULL DEFAULT '',
   threat_score int NOT NULL DEFAULT '',
   tag tinyint NOT NULL DEFAULT '',
   related_holes_name varchar(255) NOT NULL DEFAULT '',
   related_holes_link varchar(255) NOT NULL DEFAULT '',
   
)