CREATE DATABASE IF NOT EXISTS TashSultana;
USE TashSultana;
CREATE TABLE IF NOT EXISTS users (
    id SMALLINT NOT NULL,
    name VARCHAR(255),
    email VARCHAR(255),
    password VARCHAR(255),
    PRIMARY KEY (id)
);

CREATE TABLE IF NOT EXISTS goldenbook (
    id SMALLINT NOT NULL,
    date DateTime,
    text VARCHAR(255),
    password VARCHAR(255),
    user_id SMALLINT,
    PRIMARY KEY (id),
    CONSTRAINT FK_userID FOREIGN KEY (user_id)
    REFERENCES users(ID)
)
ENGINE=INNODB;
