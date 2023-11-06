Create database bd_carro default character set utf8 collate utf8_general_ci;

use bd_carro;

create table marca(
cod_marca integer unsigned not null auto_increment, 
nome_marca nvarchar(45) null,
primary key (cod_marca)
)engine=InnoDB default charset=utf8;

create table modelo (
cod_modelo integer unsigned not null auto_increment,
id_marca integer unsigned not null,
nome_modelo varchar(45) null,
cor_modelo varchar(20) null,
ano_modelo year null,
placa_modelo char(8) null,
primary key (cod_modelo),
foreign key (id_marca) references marca (cod_marca)
)engine=InnoDB default charset=utf8;