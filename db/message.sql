CREATE TABLE message (
   num INT NOT NULL auto_increment,
   from_id VARCHAR(20) NOT NULL,
   to_id VARCHAR(20) NOT NULL,
   title VARCHAR(200) NOT NULL,
   content TEXT NOT NULL, 
   regist_day CHAR(20),
   PRIMARY KEY (num)
) CHARSET = UTF8MB4;