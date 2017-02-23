USE websafe  
CREATE TABLE  sw_scan_results (
   result_id  int NOT NULL  primary key identity(1,1),
   scan_id int not null default '', /*…®√ËID∫≈*/
   userId  int not null default '',
   config_id int not null default '',
   hole_id int not null default '',
   scan_date datetime NOT NULL DEFAULT '',
   scan_user  varchar(255) NOT NULL DEFAULT '',
   scan_time  varchar(50) not null default '',
   report_name varchar(255) NOT NULL DEFAULT '',
   safety_factor varchar NOT NULL DEFAULT '',
   safety_level varchar(255) NOT NULL DEFAULT '',
   current_status varchar(255) NOT NULL DEFAULT '',
   start_time datetime NOT NULL DEFAULT '',
   end_time datetime NOT NULL DEFAULT '',
   duration varchar NOT NULL DEFAULT '',
   num_of_high int NOT NULL DEFAULT '',
   num_of_medium int NOT NULL DEFAULT '',
   num_of_low int NOT NULL DEFAULT '',
   extra_url varchar(255) NOT NULL DEFAULT '',
)