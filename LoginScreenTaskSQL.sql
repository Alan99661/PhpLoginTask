CREATE DATABASE logintaskdb;

CREATE TABLE user (
    id int Auto_Increment,
    username varchar(255),
    password varchar(255),
    primary key(id)
);

INSERT INTO user (username, password)
VALUES ("Userman1","password123"),
("SecondUser","54321");



