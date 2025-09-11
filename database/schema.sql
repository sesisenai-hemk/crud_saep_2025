CREATE DATABASE saep_db_hemk;

USE saep_db_hemk;

CREATE TABLE professores (
    id_professor INT AUTO_INCREMENT PRIMARY KEY,
    nome_professor VARCHAR(45) NOT NULL,
    email_professor VARCHAR(87) NOT NULL UNIQUE,
    senha_professor VARCHAR (45) NOT NULL
) 

CREATE TABLE turmas (
    id_turma INT AUTO_INCREMENT PRIMARY KEY,
    nome_turma VARCHAR(45) NOT NULL UNIQUE,
    fk_professor INT NOT NULL,
    FOREIGN KEY (fk_professor) REFERENCES professores(id_professor)
)

CREATE TABLE atividades (
    id_atividade INT AUTO_INCREMENT PRIMARY KEY,
    descricao_atividade VARCHAR(255) NOT NULL,
    fk_turma INT NOT NULL,
    FOREIGN KEY (fk_turma) REFERENCES turmas(id_turma)
)