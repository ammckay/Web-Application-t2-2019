drop table if exists posts;
drop table if exists comments;

create table posts (
    id integer not null primary key autoincrement,    
    date varchar(80) not null,    
    name varchar(80) not null,
    title text default '' not null,
    message text default '' not null
);

create table comments (
    comment_id integer not null primary key autoincrement,
    name varchar(80) not null,
    comment text default '',
    FK_id int
);


insert into posts values (1, "2019-08-18", "John Smith",  "Truth", "It is Truth");   
insert into posts values (2, "2019-08-19", "Will Smith", "Not Truth", "It is not Truth");
insert into posts values (3, "2019-08-23", "Casey Adams", "Movies", "Movies coming out soon will be cool");
insert into posts values (4, "2019-08-27", "Todd Jones", "Feeling", "Feeling okay");
insert into posts values (5, "2019-08-28", "Daisy Brown", "Cats", "Cats are great");


insert into comments values (1, "Will Smith",  "Not Truth", 1);
insert into comments values (2, "Casey Adams",  "Sure", 1);
insert into comments values (3, "Casey Adams",  "Cool", 2);
insert into comments values (4, "Todd Jones",  "Yo", 2);
insert into comments values (5, "Daisy Brown",  "Thats great", 3);
insert into comments values (6, "Will Smith",  "Nice!", 3);
insert into comments values (7, "John Smith",  "Thats great", 4);
insert into comments values (8, "Daisy Brown",  "Thats good to hear", 4);
insert into comments values (9, "John Smith",  "Is truth", 5);
insert into comments values (10, "Todd Jones",  "Yup", 5);
