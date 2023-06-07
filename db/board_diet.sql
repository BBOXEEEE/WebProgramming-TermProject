CREATE TABLE board_diet(
	num INT NOT NULL AUTO_INCREMENT,
	id VARCHAR(15) NOT NULL,
	name VARCHAR(15) NOT NULL,
	title VARCHAR(200) NOT NULL,
	content TEXT NOT NULL,
	regist_day VARCHAR(20) NOT NULL,
	hit INT DEFAULT 0,
	PRIMARY KEY (num)
) CHARSET = UTF8MB4;