USE websafe  
CREATE TABLE  sw_record_homework_penetration (
   id  int NOT NULL  primary key identity(1,1),
   homework_id  numeric  NOT NULL DEFAULT '',
   homework_type int  NOT NULL DEFAULT '',		/*��ҵ���ͣ�1ѵ��2�г�3ʵս4©ɨ*/
   name varchar(MAX)  NOT NULL DEFAULT '',
   submit_date datetime  NOT NULL DEFAULT '', /*��¼��һ�ε��ύʱ��*/
   lated_date datetime  NOT NULL DEFAULT '', /*��¼���һ�ε��ύʱ��*/
   deadline date not null DEFAULT '',
   score  int not null default '',
   teacher_name varchar(MAX)  NOT NULL DEFAULT '',
   userid  numeric  NOT NULL DEFAULT '',		/*ѧ��id��*/
   submit_count int not null default 0, /*�ύ����*/
   answer text not null default '',   /*��*/
   start_time datetime  NOT NULL DEFAULT '', /*ѵ����ʼʱ��*/
   end_time datetime  NOT NULL DEFAULT '',   /*ѵ������ʱ��*/
   correct_status int NOT NULL DEFAULT 0,  /*��ҵ����״̬��0��δ���ģ�1��������*/
)