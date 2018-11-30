
-- NOME DO BANCO DE DADOS: hotel_mv

create table estadia(
	idE int(10) primary key auto_increment,
    dataC date,
    dataS date,
    adulto varchar(2),
    crianca varchar(2),
    idadeCC varchar(2),
	CPF_H varchar(11),
    nome_H varchar(45),
    suite_H varchar(45)
    
)engine=InnoDB default charset=utf8;

create table hospede(
	CPF varchar(11),
    nome varchar(45),
    senha varchar(6),
    email varchar(50)
    
)engine=InnoDB default charset=utf8;

create table suite(
	numero varchar(3),
    tipo varchar(45),
    ocupado char(1)
    
)engine=InnoDB default charset=utf8;

create table user(
	login varchar(45),
    senha varchar(8),
    tipo int(1)
    
)engine=InnoDB default charset=utf8;

insert into user(login, senha, tipo) values
	('admin', 'admin', 1);

insert into suite(numero, tipo, ocupado) values
	('001', 'Individual', 'N'),
    ('002', 'Individual', 'N'),
    ('003', 'Individual', 'N'),
    ('004', 'Individual', 'N'),
    ('005', 'Casal Simples', 'N'),
    ('006', 'Casal Simples', 'N'),
    ('007', 'Casal Simples', 'N'),
    ('008', 'Casal Simples', 'N'),
    ('009', 'Casal Deluxe', 'N'),
    ('010', 'Casal Deluxe', 'N'),
    ('011', 'Casal Deluxe', 'N'),
    ('012', 'Casal Deluxe', 'N');




