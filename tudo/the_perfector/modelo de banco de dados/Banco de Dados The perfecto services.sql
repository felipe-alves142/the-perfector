create database bd_tps;
use bd_tps;
create table cliente(
CPF int(11) primary key not null ,
nome varchar(100) not null,
email varchar(100) not null,
cidade varchar(100),
estado varchar(100),
telefone int(10),
celular int(11) not null,
id_imagem char,
senha char(20) not null,
data_nascimento date)charset = utf8;

create table pedido(
cpf_cliente int(11) not null,
id_pedido int(10) auto_increment primary key not null,
id_categoria int(10) not null,
data_conclusao date not null)charset = utf8;

create table empresa(
cnpj int(14) primary key not null,
estado varchar(100) not null,
id_categoria int(50) not null,
nome varchar(100) not null,
cidade varchar(100) not null,
telefone int(8) not null,
senha char(20) not null,
email varchar(100) not null,
id_imagem char(20))charset = utf8;


create table categoria(
ID int PRIMARY KEY auto_increment,
nome varchar(50) not null)charset = utf8;





