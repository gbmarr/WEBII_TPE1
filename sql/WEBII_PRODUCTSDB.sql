-- Created by Vertabelo (http://vertabelo.com)
-- Last modification date: 2024-04-30 12:18:51.254

-- tables
-- Table: categoria
CREATE TABLE categoria (
    idCat int  NOT NULL AUTO_INCREMENT,
    descripcion varchar(30)  NOT NULL,
    CONSTRAINT categoria_pk PRIMARY KEY (idCat)
);

-- Table: productos
CREATE TABLE productos (
    idProducto int  NOT NULL AUTO_INCREMENT,
    nombre varchar(30)  NOT NULL,
    descripcion varchar(100)  NULL,
    precio decimal(10,2)  NOT NULL,
    stock boolean  NOT NULL DEFAULT 1,
    idCategoria int  NOT NULL,
    categoria_idCat int  NOT NULL,
    CONSTRAINT productos_pk PRIMARY KEY (idProducto)
);

-- Table: usuarios
CREATE TABLE usuarios (
    idUsuario int  NOT NULL AUTO_INCREMENT,
    email varchar(20)  NOT NULL,
    password varchar(20)  NOT NULL,
    nombre varchar(20)  NULL,
    apellido varchar(20)  NULL,
    admin boolean  NOT NULL,
    CONSTRAINT usuarios_pk PRIMARY KEY (idUsuario)
);

-- foreign keys
-- Reference: products_categoria (table: productos)
ALTER TABLE productos ADD CONSTRAINT products_categoria FOREIGN KEY products_categoria (categoria_idCat)
    REFERENCES categoria (idCat);

-- End of file.

