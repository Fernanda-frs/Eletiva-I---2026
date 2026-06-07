
SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE,
SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

CREATE SCHEMA IF NOT EXISTS `academia_php` DEFAULT CHARACTER SET utf8;
USE `academia_php`;


CREATE TABLE IF NOT EXISTS usuario (
    id INT NOT NULL AUTO_INCREMENT,
    nome VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    senha TEXT NOT NULL,
    PRIMARY KEY(id)
);



CREATE TABLE IF NOT EXISTS professor (
    id INT NOT NULL AUTO_INCREMENT,
    nome VARCHAR(255) NOT NULL,
    cref VARCHAR(50) NOT NULL,
    telefone VARCHAR(20),
    PRIMARY KEY(id)
);


CREATE TABLE IF NOT EXISTS plano (
    id INT NOT NULL AUTO_INCREMENT,
    descricao VARCHAR(255) NOT NULL,
    valor DECIMAL(8,2) NOT NULL,
    duracao_meses INT NOT NULL,
    PRIMARY KEY(id)
);

CREATE TABLE IF NOT EXISTS aluno (
    id INT NOT NULL AUTO_INCREMENT,
    nome VARCHAR(255) NOT NULL,
    cpf VARCHAR(14) NOT NULL,
    telefone VARCHAR(20),
    professor_id INT NOT NULL,
    plano_id INT NOT NULL,
    PRIMARY KEY(id),

    INDEX fk_aluno_professor_idx (professor_id ASC),
    INDEX fk_aluno_plano_idx (plano_id ASC),

    CONSTRAINT fk_aluno_professor
        FOREIGN KEY (professor_id)
        REFERENCES professor(id),

    CONSTRAINT fk_aluno_plano
        FOREIGN KEY (plano_id)
        REFERENCES plano(id)
);
CREATE TABLE IF NOT EXISTS matricula (
    id INT NOT NULL AUTO_INCREMENT,

    aluno_id INT NOT NULL,
    professor_id INT NOT NULL,
    plano_id INT NOT NULL,

    data_matricula DATE NOT NULL,
    data_vencimento DATE NOT NULL,

    status VARCHAR(20) NOT NULL,

    PRIMARY KEY(id),

    INDEX fk_matricula_aluno_idx (aluno_id ASC),
    INDEX fk_matricula_professor_idx (professor_id ASC),
    INDEX fk_matricula_plano_idx (plano_id ASC),

    CONSTRAINT fk_matricula_aluno
        FOREIGN KEY (aluno_id)
        REFERENCES aluno(id),

    CONSTRAINT fk_matricula_professor
        FOREIGN KEY (professor_id)
        REFERENCES professor(id),

    CONSTRAINT fk_matricula_plano
        FOREIGN KEY (plano_id)
        REFERENCES plano(id)
);

SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;