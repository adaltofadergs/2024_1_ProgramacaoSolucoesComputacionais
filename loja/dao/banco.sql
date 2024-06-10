CREATE DATABASE market;

USE market;

CREATE TABLE cidade (
	id INT NOT NULL PRIMARY KEY AUTO_INCREMENT , 
    nome VARCHAR(100) NOT NULL
);

CREATE TABLE cliente (
	id INT NOT NULL PRIMARY KEY AUTO_INCREMENT , 
    nome VARCHAR(100) NOT NULL, 
    nascimento DATE DEFAULT '1980-04-20',
    salario DOUBLE DEFAULT 1412.00 ,
    codCidade INT NOT NULL ,
    FOREIGN KEY (codCidade) REFERENCES cidade( id )
);

CREATE TABLE usuario(
	id INT NOT NULL PRIMARY KEY AUTO_INCREMENT ,
	nome VARCHAR(100) NOT NULL ,
	email VARCHAR(200)  NOT NULL ,
	senha VARCHAR(300) NOT NULL ,
    admin BOOLEAN DEFAULT 0
);

-- Inserindo um usuário admin, senha 1234
INSERT INTO usuario (nome, email, senha, admin) 
VALUES ('Administrador' , 'admin@loja.com' , '81dc9bdb52d04dc20036dbd8313ed055' , 1);