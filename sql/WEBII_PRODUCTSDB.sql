-- Created by Vertabelo (http://vertabelo.com)
-- Last modification date: 2024-04-29 21:20:53.552

-- tables
-- Table: categoria
CREATE TABLE categoria (
    idCat int  NOT NULL AUTO_INCREMENT,
    descripcion varchar(30)  NOT NULL,
    CONSTRAINT categoria_pk PRIMARY KEY (idCat)
);

-- Table: products
CREATE TABLE products (
    idProducto int  NOT NULL AUTO_INCREMENT,
    nombre varchar(30)  NOT NULL,
    descripcion varchar(100)  NOT NULL,
    precio decimal(10,2)  NOT NULL,
    stock boolean  NOT NULL,
    idCategoria int  NOT NULL,
    categoria_idCat int  NOT NULL,
    CONSTRAINT products_pk PRIMARY KEY (idProducto)
);

-- foreign keys
-- Reference: products_categoria (table: products)
ALTER TABLE products ADD CONSTRAINT products_categoria FOREIGN KEY products_categoria (categoria_idCat)
    REFERENCES categoria (idCat);

-- End of file.

