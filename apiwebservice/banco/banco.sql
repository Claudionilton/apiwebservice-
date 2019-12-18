
create database bancoteste 

use bancoteste

create table `pessoa`  (
  `id_pessoa` integer not null primary key auto_increment,
  `telefone` integer not null,
  `cpf` varchar(12) not null
);

create table `curso`(
    `id_matricula` varchar(20) not null primary key,
    `nome` varchar(50) not null
);

create table `pessoa_curso` (
    `id_pessoa_curso` integer not null primary key auto_increment, 
    `id_pessoa_fkey` integer not null,
    `id_matricula_fkey` integer not null,
    foreign key(id_pessoa_fkey) references pessoa(id_pessoa),
    foreign key(id_matricula_fkey) references nome(id_matricula)
);

