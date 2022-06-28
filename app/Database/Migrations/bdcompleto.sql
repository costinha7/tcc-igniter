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



/*create table contato_funcionario(
id_contato_funcionario_null int primary key auto_increment,
telefone_funcionario char(12),
celular_funcionario char(14),
email_funcionario_null varchar(50)
);*/



create table cliente( 
id_cliente int primary key auto_increment,
nome_cliente varchar(50),
cpf_cliente char(11),
data_cadastro date,
telefone_cliente char(12),
celular_cliente char(14),
email_cliente varchar(50)
);



/*create table contato_cliente(
id_contato_cliente int primary key auto_increment,
telefone_cliente char(12),
celular_cliente char(14),
email_cliente varchar(50)
);*/



/*create table usuarios(
id_usuario int not null primary key auto_increment,
usuario varchar (220) not null,
email_usuario varchar(30),
senha_usuario varchar(80),
status_usuario enum('b','d') 
);*/



create table livro(
id_livro int primary key auto_increment,
codigo char (4) unique,
titulo varchar(50),  
data_publicacao date,
idioma varchar(30),
volume int, 
edicao int,
data_registro date,
descricao text,
status_livro enum('d','i')
);



create table autor(
id_autor int primary key auto_increment, 
nome_autor varchar(50)
);



create table autor_livro(
autor_livro_id int primary key auto_increment
);



create table editora(
id_editora int primary key auto_increment,
nome_editora varchar(30)
);



create table editora_livro( 
editora_id_livro int primary key auto_increment
);



create table genero( 
id_genero int primary key auto_increment, 
tipo_genero varchar(30)  
);



create table genero_livro( 
genero_id_livro int primary key auto_increment
);



create table reserva(
id_reserva int primary key auto_increment,
data_reserva date,
data_entrega date,
cliente_reserva varchar(45),
clivro_reserva int,
status_reserva enum('d','i')
);



create table reserva_livro( 
livro_id_reserva int primary key auto_increment
);

create table lista( 
id_lista int primary key auto_increment
);



# relacionamentos

/*#relacao funcionario usuario do sistema
alter table funcionario add id_usuario_funcionario int not null;
alter table funcionario add foreign key(id_usuario_funcionario) references funcionario(id_funcionario)
on delete cascade on update cascade; */

/*#relacao contato funcionario
alter table contato_funcionario add nome_funcionario int not null;
alter table contato_funcionario add foreign key (nome_funcionario) references funcionario(id_funcionario)
on delete cascade on update cascade;*/

/*#relacao contato cliente
alter table contato_cliente add nome_cliente int not null;
alter table contato_cliente add foreign key (nome_cliente) references cliente(id_cliente)
on delete cascade on update cascade;*/

#relacao reserva cliente

alter table cliente add id_reserva_cliente int;
alter table cliente add foreign key(id_reserva_cliente) references reserva(id_reserva)
on delete cascade on update cascade;

#relacionamentos autor livro

alter table autor_livro add codigo_autor_livro int;
alter table autor_livro add foreign key(codigo_autor_livro) references autor(id_autor)
on delete cascade on update cascade;

alter table autor_livro add codigo_livro_autor int;
alter table autor_livro add foreign key(codigo_livro_autor) references livro(id_livro)
on delete cascade on update cascade;

#relacionamento genero livro

alter table genero_livro add codigo_genero_livro int;
alter table genero_livro add foreign key(codigo_genero_livro) references genero(id_genero)
on delete cascade on update cascade;

alter table genero_livro add codigo_livro_genero int;
alter table genero_livro add foreign key(codigo_livro_genero) references livro(id_livro)
on delete cascade on update cascade;

#relacionamento editora livro

alter table editora_livro add id_editora int;
alter table editora_livro add foreign key(id_editora) references editora(id_editora)
on delete cascade on update cascade;

alter table editora_livro add id_livro int;
alter table editora_livro add foreign key(id_livro) references livro(id_livro)
on delete cascade on update cascade;

#relacionamento lista

alter table lista add codigo_livro_lista int;
alter table lista add foreign key(codigo_livro_lista) references livro(id_livro)
on delete cascade on update cascade;

alter table lista add id_cliente_lista int;
alter table lista add foreign key(id_cliente_lista) references cliente(id_cliente)
on delete cascade on update cascade;