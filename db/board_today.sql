CREATE TABLE board_today(
	num INT NOT NULL AUTO_INCREMENT,
	id VARCHAR(15) NOT NULL,
	name VARCHAR(15) NOT NULL,
	title VARCHAR(200) NOT NULL,
	content TEXT NOT NULL,
	regist_day VARCHAR(20) NOT NULL,
	hit INT DEFAULT 0,
	file_name VARCHAR(40),
	file_type VARCHAR(40),
	file_copied VARCHAR(40),
	PRIMARY KEY (num)
) CHARSET = UTF8MB4;