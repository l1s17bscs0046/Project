drop database online_study;
create database online_study;
use online_study;

show tables;

create table education(
E_id int not null auto_increment,
title varchar(50) not null,
constraint EdPK primary key (E_id),
constraint EdUn unique (title));

insert into education(title) 
values
("Matric"),
("Intermediate"),
("Bachelors"),
("Masters");

create table Student(
Std_id int NOT NULL auto_increment,
Fname varchar(50) not null,
Lname varchar(50) not null,
gender varchar(6) not null,
DoB date not null,
Education int not null,
email varchar(50) not null,
profile_pic varchar(100),
password varchar(50) not null,
constraint StdPK primary key(Std_id),
constraint StdEm unique(email),
constraint EdFK foreign key(Education) references education(E_id)
on delete cascade on update cascade);

create table Admins(
M_id int not null auto_increment,
Fname varchar(50) not null,
Lname varchar(50) not null,
gender varchar(6) not null,
email varchar(50) not null,
username varchar(50) not null,
password varchar(50) not null,
phone varchar(12),
constraint AdmPK primary key(M_id),
constraint AdmEm unique(email),
constraint AdmUN unique(username));

insert into Admins(Fname, Lname, gender, email,username,password, phone)
values
("Ahmed", "Asad", 'M', "a.a3137@ucp.edu.pk","ahmedasad","bscs46",NULL),
("Hamda", "Nawazish Ali", 'F', "hamdacheema577@ucp.edu.pk","hamdacheema","bscs07",NULL),
("Muhammad Annas", "Asif", 'M', "muhammad.annas@ucp.edu.pk","muhammad.annas","bscs22",NULL);

drop table Subjects;
create table Subjects(
Sub_id int not null auto_increment,
Title varchar(30) not null,
constraint SubPK primary key (Sub_id),
constraint SubEm unique (Title));

insert into Subjects(Title) values
("English"),
("Programming");

create table Files(
F_id int not null auto_increment,
FileName varchar(50) not null,
constraint FilPK primary key(F_id),
constraint FilUn unique(FileName));

create table Images(
I_id int not null auto_increment,
ImgName varchar(50) not null,
constraint ImgPK primary key(I_id),
constraint ImgUn unique(ImgName));

create table Subject_Content(
title varchar(30) not null,
topic varchar(50) not null,
content text,
Files int,
Image int,
constraint SubFK foreign key(title) references Subjects(Title) 
on delete cascade on update cascade,
constraint FilFK foreign key(Files) references Files(F_id) 
on delete cascade on update cascade,
constraint ImgFK foreign key(Image) references Images(I_id) 
on delete cascade on update cascade);

insert into Subject_content(title, topic, content, Files, image)
values
("programming","Odd/Even Number","#include <iostream>
using namespace std;
int main()
{
    int n;
    cout << ``Enter an integer: ``;
    cin >> n;
    if ( n % 2 == 0)
        cout << n << `` is even.``;
    else
        cout << n << `` is odd.``;
    return 0;
}",NULL,NULL),
("programming", "Swapping integers","#include <iostream>
using namespace std;
int main()
{
    int a = 5, b = 10, temp;
    cout << ``Before swapping.`` << endl;
    cout << ``a = `` << a << ``, b = `` << b << endl;
    temp = a;
    a = b;
    b = temp;
    cout << ``\nAfter swapping.`` << endl;
    cout << ``a = `` << a << ``, b = `` << b << endl;
    return 0;
}",NULL,NULL);

drop table Student_courses;
create table Student_courses(
Std_id int not null,
Sub_id int not null,
constraint StSbPK primary key(Std_id, Sub_id),
constraint StdFK foreign key (Std_id) references Student(Std_id)
on delete cascade on update cascade,
constraint StSubFK foreign key (Sub_id) references Subjects(Sub_id)
on delete cascade on update cascade);


insert into student_courses values (1, 2),(1,1);