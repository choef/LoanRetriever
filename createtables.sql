-- Cassie and Sydney
-- Create tables
-- 4/10/14


-- remove existing tables

 drop table if exists borrows;
 drop table if exists messageReceived;
 drop table if exists messageSent;
 drop table if exists item;
 drop table if exists pending;
  drop table if exists users;
 


-- creating entity tables
 
create table users(
-- uid int auto_increment not null,
firstName varchar(50) not null,
lastName varchar(50) not null,
email varchar(40) primary key,
password varchar(10) not null
)

ENGINE= InnoDB; 

create table pending(
pid int auto_increment primary key,
newFirstName varchar(50) not null,
newLastName varchar(50) not null,
newEmail varchar(40) not null,
newPassword varchar(10) not null
)

ENGINE= InnoDB;

create table item(
objectID int auto_increment primary key,
nameOfObject varchar(75),
description varchar(1000),
itemvalue float(6,2),
cond enum('unacceptable','used acceptable','used good','used very good','like-new','new'),
image blob,
priority enum('not important','important','urgent'),
duedate date
)
ENGINE = InnoDB;
 -- indicates how important item is, how 
 -- often to remind borrower to return it, not important has no specific return date,
 -- important indicates return within a week of the indicated day, urgent indicates return
 -- necessary within a day of the date indicated

create table messageReceived(
mid integer auto_increment primary key,
senderID varchar(40),
receiverID varchar(40),
sendTime timestamp,
subject text, 
content text,
foreign key(senderID) references users(email)
)

ENGINE = InnoDB;

create table messageSent(
mid integer auto_increment primary key,
senderID varchar(40),
receiverID varchar(40),
sendTime timestamp,
subject text, 
content text,
foreign key(senderID) references users(email)

)

ENGINE = InnoDB;

-- create relationship tables

create table borrows(
objectNum int,
bemail varchar(40),
lenderID varchar(40),
confirmed enum('y','n'),
foreign key (objectNum) references item(objectID),
foreign key (lenderID) references users(email)
)

ENGINE = InnoDB;
