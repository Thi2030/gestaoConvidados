create database etec;

use etec;

create table tb_convidados(
	id_convidado int not null primary key auto_increment,
    nome varchar(30), 
    acompanhantes int
);

select * from tb_convidados;