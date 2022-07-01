create database bs_ign
default character set utf8mb4 
default collate utf8mb4_unicode_ci;


use bs_ign;


create table funcionario(
id_funcionario int primary key auto_increment,
nome_funcionario varchar(50),
cpf_funcionario char(11),
cargo varchar(30),
data_admissao date,
usuario_funcionario varchar (220),
senha_funcionario varchar(100),
email_funcionario varchar(50),
celular_funcionario char(14)
);


create table cliente( 
id_cliente int primary key auto_increment,
nome_cliente varchar(50),
cpf_cliente char(11),
data_cadastro date,
telefone_cliente char(12),
celular_cliente char(14),
email_cliente varchar(50)
);



create table livro(
id_livro int primary key auto_increment,
codigo char (4) unique,
titulo varchar(50), 
data_publicacao date,
idioma varchar(30),
volume int,
genero varchar(20),
autor varchar(20),
editora varchar(20),
edicao int,
data_registro date,
descricao text
);



create table reserva(
id_reserva int primary key auto_increment,
data_reserva date,
data_entrega date,
cliente_reserva varchar(45),
clivro_reserva int
);