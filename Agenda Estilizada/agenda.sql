create database agenda;
use agenda;

create table contatos(
id int not null auto_increment,
nome varchar(100),
endereco varchar(150),
telefone int(11),
primary key (id)
)
