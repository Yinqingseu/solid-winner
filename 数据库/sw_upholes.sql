USE websafe  
CREATE TABLE  sw_holes_up ( /*�û��ϴ�©����Ϣ��*/
   id int  NOT NULL  primary key identity(1,1),
   hole_id varchar(255) not null default '',  /*©�����*/
   userId  varchar(255) not null default '',   /*�ύ�û�*/
   hole_name varchar(255) not null default '',  /*©������*/
   hole_type  int not null default '',     /*©�����ͣ���Ӧsw_holes_type��*/   
   threat_type  int not null default '',  /*��в���ͣ�0������ 1��Զ��*/ 
   threat_level int NOT NULL DEFAULT '',	/*��в�ȼ�0��Σ1��Σ2��Σ3��Σ*/  
   hole_status int NOT NULL DEFAULT '',   /*©������״̬��0������1��ȷ��2���޸�3�ѹر�4�ѹ���*/   
   deliver_date date not null default '',	 /*����ʱ��*/
   updated_date date not null default '',	 /*����ʱ��*/
   vendor_name  date NOT NULL DEFAULT '',			/*��Ӱ��ʵ�壺��������*/
   vendor_link  date not null default '',			/*��Ӱ��ʵ�壺��������*/
   hole_details text NOT NULL DEFAULT '',       /*©������*/
   solutions text NOT NULL DEFAULT '',      /*�޸�����*/
   anonymous_flag int NOT NULL DEFAULT '',		 /*�Ƿ�����*/
   agree_flag  int NOT NULL DEFAULT '',			/*�Ƿ�ͬ��©���ϴ�Э��*/
   /*��̨��Ա�����ϴ�©����Ϣ������д����*/
   hole_patch varchar(255) NOT NULL DEFAULT '',   /*©����������*/
   hole_patch_link varchar(255) NOT NULL DEFAULT '',   /*©����������*/
   related_holes_name varchar(255) NOT NULL DEFAULT '', /*���©������*/
   related_holes_link varchar(255) NOT NULL DEFAULT '', /*���©������*/
   related_url varchar(255) NOT NULL DEFAULT '', /*�ο���ַ*/
   tag int NOT NULL DEFAULT '',  /*ƽ̨�ܷ���*/
)