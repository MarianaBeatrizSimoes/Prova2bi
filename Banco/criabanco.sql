DROP DATABASE IF EXISTS Prova2;
CREATE DATABASE IF NOT EXISTS Prova2;
USE Prova2;
DROP TABLE IF EXISTS fluxo_caixa;
CREATE TABLE fluxo_caixa(
    id      INTEGER NOT NULL AUTO_INCREMENT,
    data    date  NOT NULL,
    tipo    VARCHAR(10) NOT NULL,
    valor   decimal(10,2) NOT NULL,
    historico VARCHAR(150) NOT NULL,
    cheque     VARCHAR(3) NOT NULL,
    PRIMARY KEY (id)
);