USE websafe  
CREATE TABLE  sw_holes_threat_level(  /*©����в�ȼ���*/
   id int  NOT NULL  primary key identity(1,1),
   threat_level text not null default '',
)
insert into sw_holes_threat_level(threat_level)
values
('��Σ'),
('��Σ'),
('��Σ'),
('��Σ')