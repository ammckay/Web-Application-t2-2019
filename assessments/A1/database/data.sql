drop table if exists posts;

create table posts (
    id integer not null primary key autoincrement,    
    name varchar(80) not null,    
    date varchar(80) not null,
    title text default '',
    message text default ''
);

insert into posts values (null, "John Smith", "2019-06-12", "Truth", "It is Truth");
insert into posts values (null, "Will Smith", "2019-06-13", "Not Truth", "It is not Truth");