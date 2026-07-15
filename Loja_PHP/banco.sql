-- Aula de PHP com Prof. Lucas Castellan
-- Estrutura do Banco de Dados

CREATE DATABASE IF NOT EXISTS loja_php;
USE loja_php;

CREATE TABLE produtos ( 
  id INT AUTO_INCREMENT PRIMARY KEY,
  nome VARCHAR(100) NOT NULL,
  preco DECIMAL(10,2) NOT NULL,
  quantidade INT NOT NULL DEFAULT 0 
);


