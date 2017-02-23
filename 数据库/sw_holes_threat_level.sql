USE websafe  
CREATE TABLE  sw_holes_threat_level(  /*Â©¶´ÍþÐ²µÈ¼¶±í*/
   id int  NOT NULL  primary key identity(1,1),
   threat_level text not null default '',
)
insert into sw_holes_threat_level(threat_level)
values
('µÍÎ£'),
('ÖÐÎ£'),
('¸ßÎ£'),
('³¬Î£')