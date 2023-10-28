CREATE DATABASE sms_db;
USE sms_db;	

CREATE TABLE admin(
	id int primary key AUTO_INCREMENT,
    username varchar(20) NOT NULL,
    password varchar(500) NOT NULL,
    fname varchar(25) NOT NULL,
    lname varchar(25) NOT NULL
);

CREATE TABLE teachers(
	id int primary key AUTO_INCREMENT,
    username varchar(20) NOT NULL,
    password varchar(500) NOT NULL,
    fname varchar(25) NOT NULL,
    lname varchar(25) NOT NULL
);

CREATE TABLE students(
	id int primary key AUTO_INCREMENT,
    username varchar(20) NOT NULL,
    password varchar(500) NOT NULL,
    fname varchar(25) NOT NULL,
    lname varchar(25) NOT NULL
);

INSERT INTO admin(username, password, fname, lname) values("admin", "$2y$10$EtBHncOqq9kVYOn0exwPnemUqklS6Y/P21rJTntePHScx16zzxPaq", "first", "admin");
INSERT INTO teachers(username, password, fname, lname) values("teacher", "$2y$10$EtBHncOqq9kVYOn0exwPnemUqklS6Y/P21rJTntePHScx16zzxPaq", "first", "teacher");
INSERT INTO students(username, password, fname, lname) values("student", "$2y$10$EtBHncOqq9kVYOn0exwPnemUqklS6Y/P21rJTntePHScx16zzxPaq", "first", "student");