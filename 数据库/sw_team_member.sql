USE websafe  
CREATE TABLE  sw_team_member (
   team_id  int NOT NULL  primary key identity(1,1),
   user_id int not null default 1,
   user_talent varchar(50),
   setup_time datetime not null,
)