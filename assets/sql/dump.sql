create database `cadastro`;

use `cadastro`;

create table `usuario`(
    id int auto_increment primary key,
    nome varchar(30),
    email varchar(30),
    senha varchar(50)
);

SELECT * FROM `usuario`;