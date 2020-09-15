-- kreiranje baze 
CREATE DATABASE IF NOT EXISTS grujinakoliba
CHARACTER SET = utf8 COLLATE = utf8_general_ci;
USE grujinakoliba;

--tabela users
CREATE TABLE IF NOT EXISTS users (
id int(11)unsigned NOT NULL AUTO_INCREMENT,
name VARCHAR(60) COLLATE utf8_general_ci NOT NULL DEFAULT '',
username VARCHAR(70) COLLATE utf8_general_ci NOT NULL DEFAULT '',
email VARCHAR(80) COLLATE utf8_general_ci NOT NULL DEFAULT '',
password VARCHAR(64) COLLATE utf8_general_ci NOT NULL DEFAULT '',
role ENUM('user','bloger','admin') NOT NULL DEFAULT 'user',
created_at DATETIME NOT NULL,
updated_at DATETIME NOT NULL,
PRIMARY KEY(id)
) ENGINE = InnoDB
DEFAULT CHARSET = utf8 COLLATE = utf8_general_ci AUTO_INCREMENT = 1;


--tabela categories 
CREATE TABLE IF NOT EXISTS categories (
	id INT(11)unsigned NOT NULL AUTO_INCREMENT,
	title VARCHAR(60) COLLATE utf8_general_ci NOT NULL DEFAULT '',
	description VARCHAR(120) COLLATE utf8_general_ci NOT NULL DEFAULT '',
	created_at DATETIME NOT NULL,
	updated_at DATETIME NOT NULL,
	PRIMARY KEY(id)
) ENGINE = InnoDB
DEFAULT CHARSET = utf8 COLLATE = utf8_general_ci AUTO_INCREMENT = 1;

--tabela posts
CREATE TABLE IF NOT EXISTS posts (
	id INT(11)unsigned NOT NULL AUTO_INCREMENT,
	title VARCHAR(60) COLLATE utf8_general_ci NOT NULL DEFAULT '',
	body TEXT COLLATE utf8_general_ci  NULL,
	img VARCHAR(80) COLLATE utf8_general_ci NULL,
	category_id INT(11) unsigned NOT NULL,
	user_id INT(11) unsigned  NOT NULL,
	created_at DATETIME NOT NULL,
	updated_at DATETIME NOT NULL,
	PRIMARY KEY (id)
) ENGINE = InnoDB
DEFAULT CHARSET = utf8 COLLATE = utf8_general_ci AUTO_INCREMENT = 1;


--tabela prijava
CREATE TABLE IF NOT EXISTS prijava (
	id INT(11)unsigned NOT NULL AUTO_INCREMENT,
	email VARCHAR(80) COLLATE utf8_general_ci NOT NULL DEFAULT '',
	name VARCHAR(20) COLLATE utf8_general_ci NOT NULL DEFAULT '',
	surname VARCHAR(30) COLLATE utf8_general_ci NOT NULL DEFAULT '',
	grad VARCHAR(30) COLLATE utf8_general_ci NOT NULL DEFAULT '',
	broj VARCHAR(30) COLLATE utf8_general_ci NOT NULL DEFAULT '',
	jmbg VARCHAR(13) COLLATE utf8_general_ci NOT NULL DEFAULT '',
	created_at DATETIME NOT NULL,
	PRIMARY KEY (id)

) ENGINE = InnoDB
DEFAULT CHARSET = utf8 COLLATE = utf8_general_ci AUTO_INCREMENT = 1;

--insert kategorija

INSERT INTO categories VALUES 
(NULL, 'Events', 'Limiblog events', now(), now()),
(NULL, 'Blogs', 'Our blogs..', now(), now()),