DROP TABLE if exists registered_users;

CREATE TABLE registered_users(
    user_id int auto_increment not null,
    email varchar(70) not null,
    pwd varchar(256) not null,
    fullname varchar(100) not null,
    activated boolean not null,
    username varchar(30) not null,
    creationdate datetime not null,
    lastlogin datetime not null,
    primary key (user_id)
);

DROP TABLE if exists pages;

CREATE TABLE pages(
    page_id int auto_increment not null primary	key,
    page_title varchar(30) not null,
    page_logo  varchar(256),
    page_img1  varchar(256),
    page_text1 text ,
    page_img2 varchar(256),
    page_text2 text,
    created_by varchar(256),
    page_type char(5)
);