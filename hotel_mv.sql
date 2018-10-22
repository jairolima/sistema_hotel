-- NOME DO BANCO DE DADOS: hotel_mv

create table estadia(
	idE int(10) primary key auto_increment,
    dataC date,
    dataS date,
    adulto varchar(2),
    crianca varchar(2),
    idadeCC varchar(2),
	CPF_H varchar(11),
    nome_H varchar(45)
    
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

insert into suite(numero, tipo, ocupado) 
values
	('001', 'individual-simples', 'N'),
    ('002', 'individual_simples', 'N'),
    ('003', 'casal-simples', 'N'),
    ('004', 'casal_simples', 'N'),
    ('005', 'individual-deluxe', 'N'),
    ('006', 'individual_deluxe', 'N'),
    ('007', 'casal-deluxe', 'N'),
    ('008', 'casal_deluxe', 'N');




