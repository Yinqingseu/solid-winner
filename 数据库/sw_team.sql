USE websafe  
CREATE TABLE  sw_team (
   team_id  int NOT NULL  primary key identity(1,1),
   team_name varchar(255)  NOT NULL DEFAULT '',
   team_member_num int not null default 2,
   team_grade varchar not null default 90.0,
   team_leader_id int not null default 1,
)