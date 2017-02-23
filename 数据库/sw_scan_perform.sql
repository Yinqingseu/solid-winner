USE websafe  
CREATE TABLE  sw_scan_perform (
   perform_id  int NOT NULL  primary key identity(1,1),
   scan_speed int not null default '',
   scan_time time not null default '',
   error_rate float NOT NULL DEFAULT '',
   miss_rate  float NOT NULL DEFAULT '',
)