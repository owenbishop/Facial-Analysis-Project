use project;
SET foreign_key_checks = 0;

SET foreign_key_checks = 1;

create table Admin
(
AdminID int(10) not null auto_increment,
Email_Address varchar(40),
AdminPassword varchar(100),
primary key (AdminID)
);

create table User
(
UserID int(10) not null auto_increment,
Forename varchar(20),
Surname varchar(20),
Email_Address varchar(40),
UserPassword varchar(100),
Date_of_Birth date,
gender varchar(6),
race varchar(20),
Primary key(UserID)
);

create table Image
(
ImageID int unsigned not null auto_increment,
UserID int(10) not null,
Image longtext,
primary key (ImageID),
foreign key (UserID) references user (UserID)
);

create table ImagePath
(
imagePath varchar(100),
UserID int(10) not null,
primary key (imagePath),
foreign key (UserID) references user (UserID)
);

create table ProcessedImage
(
ResultID int unsigned not null auto_increment,
UserID int(10) not null, 
ImageID int unsigned not null,
Resulted_Image blob,
Comments text,
Extra_Information varchar(20),
primary key (ResultID),
foreign key (UserID) references user (UserID),
foreign key (ImageID) references image (ImageID)
);

create table result(
user varchar(100),
path varchar(100));

create table Consent
(
ConsentID int unsigned not null auto_increment,
UserID int(10) not null,
Consent varchar(10), 
primary key(ConsentID),
foreign key(UserID) references user (UserID)
);


