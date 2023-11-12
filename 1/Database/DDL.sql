
CREATE DATABASE Sistema;
USE             Sistema;

CREATE TABLE Usuarios (
    UsuarioId                INT          NOT NULL AUTO_INCREMENT,
    UsuarioNome              VARCHAR(80)  NOT NULL,
    UsuarioEmail             VARCHAR(80)  NOT NULL,
    UsuarioSenha             VARCHAR(355) NOT NULL,

    PRIMARY KEY (UsuarioId)
);
