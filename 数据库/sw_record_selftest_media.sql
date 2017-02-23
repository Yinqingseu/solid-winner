USE websafe  
CREATE TABLE  sw_record_selftest_media( /*攻防实例训练 记录表*/
   id  int NOT NULL  primary key identity(1,1),
   test_id  numeric  NOT NULL DEFAULT '',
   test_type int  NOT NULL DEFAULT '',  /*自主训练类型：1训练2靶场3实战4漏扫*/
   test_name varchar(MAX)  NOT NULL DEFAULT '',
   test_date datetime  NOT NULL DEFAULT '',
   userid  numeric  NOT NULL DEFAULT '',
   username varchar(MAX)  NOT NULL DEFAULT '',
   start_time datetime  NOT NULL DEFAULT '', 
   end_time datetime  NOT NULL DEFAULT '', 
)