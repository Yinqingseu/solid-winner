USE websafe  
CREATE TABLE  sw_train (
   id  int NOT NULL  primary key identity(1,1),
   difficulty int  NOT NULL DEFAULT '1',
   language int  NOT NULL DEFAULT '1',
   name varchar(255) not null,
   class	text not null ,
   answer text NOT NULL ,
)