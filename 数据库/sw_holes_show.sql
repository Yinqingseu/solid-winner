USE websafe  
CREATE TABLE  sw_holes_show (
   id int  NOT NULL  primary key identity(1,1),
   cnnvd_id  varchar(255) not null default '', 
   cve_id varchar(255) not null default '',
   hole_name  varchar(255) not null default '',
   hole_level int not null default '', /*��в�ȼ�0��Σ1��Σ2��Σ3��Σ*/  
   hole_type int NOT NULL DEFAULT '',  /*©�����ͣ���Ӧsw_holes_type��*/ 
   threat_type int NOT NULL DEFAULT '', /*��в���ͣ�0������ 1��Զ��*/
   deliver_date  date NOT NULL DEFAULT '', /*����ʱ��*/
   update_date  date not null default '',  /*����ʱ��*/
   hole_details text NOT NULL DEFAULT '',  /*©������*/
   hole_patch varchar(255) NOT NULL DEFAULT '',   /*©����������*/
   hole_patch_link varchar(255) NOT NULL DEFAULT '',   /*©����������*/
   related_url varchar(255) NOT NULL DEFAULT '', /*�ο���ַ*/
   solutions text NOT NULL DEFAULT '',  /*�޸�����*/
   related_holes_name varchar(255) NOT NULL DEFAULT '', /*���©������*/
   related_holes_link varchar(255) NOT NULL DEFAULT '', /*���©������*/
   tag  int NOT NULL DEFAULT '',  /*ƽ̨�ܷ���*/
)