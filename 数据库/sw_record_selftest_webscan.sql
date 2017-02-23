USE websafe  
CREATE TABLE  sw_record_selftest_webscan(
   id  int NOT NULL  primary key identity(1,1),
   test_id  numeric  NOT NULL DEFAULT '',
   test_type int  NOT NULL DEFAULT '',  /*����ѵ�����ͣ�1ѵ��2�г�3ʵս4©ɨ*/
   test_name varchar(MAX)  NOT NULL DEFAULT '',
   test_date datetime  NOT NULL DEFAULT '',
   userid  numeric  NOT NULL DEFAULT '',
   username varchar(MAX)  NOT NULL DEFAULT '',
   score  int not null default '',
   start_time datetime  NOT NULL DEFAULT '', 
   end_time datetime  NOT NULL DEFAULT '', 
   asFlag varchar(50)  NOT NULL DEFAULT '',
   answer text not null default '',
)