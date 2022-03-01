/*db name : theproj*/

create table cmnt(
    id int(11) PRIMARY KEY AUTO_INCREMENT not null,
    unm varchar(50) not null,
    cmt varchar(255) not null,
    version varchar(50) not null 
);

create table items(
    id int(11) PRIMARY KEY AUTO_INCREMENT not null,
    i_name varchar(50) not null,
    i_price varchar(10) not null,
    i_discription varchar(255) not null,
    i_vName varchar(50) not null,
    i_seller varchar(50) not null
);

create table users(
    id int(11) PRIMARY KEY AUTO_INCREMENT not null,
    unm varchar(50) not null,
    eml varchar(50) not null,
    type varchar(10) not null,
    pwd varchar(50) not null
);

create table cart(
    id int(11) PRIMARY KEY AUTO_INCREMENT not null,
    unm varchar(50) not null,
    price varchar(10) not null,
    itemV varchar(50) not null 
);