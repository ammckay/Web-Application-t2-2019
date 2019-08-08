/* Posts database in MySQL. */
drop table if exists posts;

/* Posts table */
create table posts (
  icon varchar(40),
  date varchar(40),
  name varchar(40),
  title varchar(40),
  message varchar(120)
);

/* Insert into posts */
insert into posts(icon, date, name, title, message) values ('ICON', '2019-06-21', 'John Smith', 'Truth', 'It is the truth');
insert into posts(icon, date, name, title, message) values ('ICON', '2019-06-22', 'Will Smith', 'Not Truth', 'It is not the truth');
