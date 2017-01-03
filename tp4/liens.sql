/* creation de la table blog*/
create database utilisateur;
use utilisateur;
/* creation de la table users */
create table users (
id int(11) not null auto_increment,
username varchar(16) not null,
pwd char(40) not null,
email varchar(100) not null,
PRIMARY key(id));
