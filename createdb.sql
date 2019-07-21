create schema encrypteddb;

create table encryptedmsg(
	message varchar(300) 
);
-- data is stored here from form
insert into encryptedmsg values('Example value');
-- select * from encryptedmsg;
