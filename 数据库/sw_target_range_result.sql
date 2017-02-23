USE websafe  
CREATE TABLE  sw_target_range_result (
   id  int NOT NULL  primary key identity(1,1),
   tr_id int NOT NULL DEFAULT 1,--靶场表ID
   duration int not null DEFAULT 1,--靶场时间，单位秒，显示时转换成“小时：分钟：秒”的格式
   score decimal(18,2) not null DEFAULT 80,--靶场得分，某算法实现，保留两位小数
   description text DEFAULT'',--靶场用户感受记录
   judgement text not null DEFAULT'',--靶场评价，靶场报表
   tools_id int DEFAULT 1,--工具表ID，应该是一串以逗号分隔的字符串，代表期间所使用的第三方工具
   setup_time datetime not null,--创建时间
   update_time datetime,--最近一次更新时间
)