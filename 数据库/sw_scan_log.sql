USE websafe  
CREATE TABLE  sw_scan_log (
   log_id  int NOT NULL  primary key identity(1,1),
   scan_user varchar(255) not null default '',
   scan_date date not null default '',
   scan_duration time NOT NULL DEFAULT '',
   scan_content  varchar(255) NOT NULL DEFAULT '',
   operation_record varchar(255) NOT NULL DEFAULT '',
   response_time  time NOT NULL DEFAULT '',
)