CREATE database usuario;
use usuario;
CREATE table usuarios (
    id int AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR (50),
    email VARCHAR (100),
    senha VARCHAR (32)
)