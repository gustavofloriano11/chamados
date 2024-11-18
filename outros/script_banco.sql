DROP DATABASE chamados;

CREATE DATABASE chamados;

USE chamados;

CREATE TABLE cliente(
	id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    telefone CHAR(11) NOT NULL
);

CREATE TABLE colaborador(
	id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    telefone CHAR(11) NOT NULL
);

CREATE TABLE chamado(
	id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    id_cliente INT,
    id_colaborador INT,
    descricao TEXT,
    criticidade VARCHAR(5),
    status_chamado VARCHAR(12),
    data_abertura DATE,
    FOREIGN KEY chamado (id_cliente) REFERENCES cliente (id),
    FOREIGN KEY colaborador (id_colaborador) REFERENCES colaborador (id)
);

INSERT INTO cliente (nome, email, telefone)
VALUES ('Gustavo Floriano', 'gustavo@gmail.com', '47992606543');

SELECT * FROM cliente;
SELECT * FROM chamado;