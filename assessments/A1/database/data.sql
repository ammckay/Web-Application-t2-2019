drop table if exists posts;

create table posts (
    id integer not null primary key autoincrement,    
    date varchar(80) not null,    
    name varchar(80) not null,
    title text default '',
    message text default ''
);


insert into posts values (null, "2019-06-13", "John Smith",  "Truth", "It is Truth");
insert into posts values (null, "2019-06-13", "Will Smith", "Not Truth", "It is not Truth");
insert into posts values (null, "2019-06-12", "Casey Adams", "Movies", "Movies coming out soon will be cool");
insert into posts values (null, "2019-06-12", "Todd Jones", "Feeling", "Feeling okay");
insert into posts values (null, "2019-06-10", "Daisy Brown", "Cats", "Cats are great");
