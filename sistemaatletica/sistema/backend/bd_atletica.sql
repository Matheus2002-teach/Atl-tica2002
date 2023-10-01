/* Lógico_1: */

CREATE TABLE Usuario (
    matricula VARCHAR PRIMARY KEY,
    nome VARCHAR,
    email VARCHAR,
    senha VARCHAR,
    fk_Curso_id INTEGER
);

CREATE TABLE Curso (
    id INTEGER PRIMARY KEY,
    nome VARCHAR
);

CREATE TABLE Post (
    id_post INTEGER PRIMARY KEY,
    path_pasta_fotos VARCHAR,
    path_arquivo_texto VARCHAR,
    link_inscricao VARCHAR,
    fk_Membro_matricula INTEGER
);

CREATE TABLE Membro (
    matricula INTEGER PRIMARY KEY,
    nome VARCHAR,
    email VARCHAR,
    senha VARCHAR,
    foto_path VARCHAR,
    fk_Curso_id INTEGER
);

CREATE TABLE Produto (
    id_produto INTEGER PRIMARY KEY,
    nome VARCHAR,
    path_fotos VARCHAR,
    link_loja VARCHAR,
    fk_Membro_matricula INTEGER
);
 
ALTER TABLE Usuario ADD CONSTRAINT FK_Usuario_2
    FOREIGN KEY (fk_Curso_id)
    REFERENCES Curso (id)
    ON DELETE CASCADE;
 
ALTER TABLE Post ADD CONSTRAINT FK_Post_2
    FOREIGN KEY (fk_Membro_matricula)
    REFERENCES Membro (matricula)
    ON DELETE CASCADE;
 
ALTER TABLE Membro ADD CONSTRAINT FK_Membro_2
    FOREIGN KEY (fk_Curso_id)
    REFERENCES Curso (id)
    ON DELETE CASCADE;
 
ALTER TABLE Produto ADD CONSTRAINT FK_Produto_2
    FOREIGN KEY (fk_Membro_matricula)
    REFERENCES Membro (matricula)
    ON DELETE CASCADE;