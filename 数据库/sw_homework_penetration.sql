USE websafe  
CREATE TABLE  sw_homework_penetration (
   id  int NOT NULL  primary key identity(1,1),
   train_level int  NOT NULL DEFAULT '',
   train_model int  NOT NULL DEFAULT '2',
   train_name  varchar(255) not null default '',
   train_id  numeric not null default '',
   requirements  varchar(255) not null default '',
   teacher  varchar(255) not null default '',
   deliver_date  date not null default '',
   deadline date not null default '',
   score int  NOT NULL DEFAULT '',
   keys text NOT NULL DEFAULT '',    /*��ҵ��*/
   kflag int  NOT NULL DEFAULT 0,   /*����Ƿ�����չʾ��ҵ��0��������1������*/
)