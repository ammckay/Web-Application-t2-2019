drop table if exists posts;
drop table if exists comments;

create table posts (
    id integer not null primary key autoincrement,    
    date varchar(80) not null,    
    name varchar(80) not null,
    title text default '',
    message text default ''
);

create table comments (
    comment_id integer not null primary key autoincrement,
    name varchar(80) not null,
    comment text default '',
    FK_id int
);


insert into posts values (1, "2019-08-2", "John Smith",  "Truth", "It is Truth");   
insert into posts values (2, "2019-08-10", "Will Smith", "Not Truth", "It is not Truth");
insert into posts values (3, "2019-08-11", "Casey Adams", "Movies", "Movies coming out soon will be cool");
insert into posts values (4, "2019-08-12", "Todd Jones", "Feeling", "Feeling okay");
insert into posts values (5, "2019-08-13", "Daisy Brown", "Cats", "Cats are great");


insert into comments values (1, "John Smith",  "Testing 1.1", 1);
insert into comments values (2, "John Smith",  "Testing 1.2", 1);
insert into comments values (3, "John Smith",  "Testing 2.1", 2);
insert into comments values (4, "John Smith",  "Testing 2.2", 2);
insert into comments values (5, "John Smith",  "Testing 3.1", 3);
insert into comments values (6, "John Smith",  "Testing 3.2", 3);
insert into comments values (7, "John Smith",  "Testing 4.1", 4);
insert into comments values (8, "John Smith",  "Testing 4.2", 4);
insert into comments values (9, "John Smith",  "Testing 5.1", 5);
insert into comments values (10, "John Smith",  "Testing 5.2", 5);
