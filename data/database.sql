CREATE DATABASE IF NOT EXISTS webii_productsTPE;
USE webii_productsTPE;

-- Table categories
CREATE TABLE IF NOT EXISTS categories (
    idcat INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(50) NOT NULL
);

-- Table products
CREATE TABLE IF NOT EXISTS products (
    idproduct INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(50) NOT NULL,
    description VARCHAR(200) NOT NULL,
    idcategory INT,
    stock BOOLEAN NOT NULL,
    price FLOAT NOT NULL,
    FOREIGN KEY (idcategory) REFERENCES categories(idcat)
);

-- Table users
CREATE TABLE IF NOT EXISTS users (
    iduser INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(30) NOT NULL,
    surname VARCHAR(30) NOT NULL,
    email VARCHAR(50) NOT NULL,
    pass VARCHAR(15) NOT NULL,
    admin BOOLEAN NOT NULL
);

-- Inserts en tabla CATEGORIES
INSERT INTO categories (name) VALUES
('Electrónica'),
('Ropa'),
('Hogar');

-- Inserts en tabla PRODUCTS
INSERT INTO products (name, description, idcategory, stock, price) VALUES
('Televisor', 'Televisor LED de 42 pulgadas', 1, TRUE, 200),
('Camiseta', 'Camiseta de algodón 100%', 2, TRUE, 30.00),
('Sofá', 'Sofá de 3 plazas color gris', 3, TRUE, 500.10),
('Auriculares', 'Auriculares con cancelación de ruido', 1, TRUE, 1500);

-- Inserts en tabla USERS
INSERT INTO users (name, surname, email, pass, admin) VALUES
('Admin', 'User', 'admin@admin.com', 'webadmin', TRUE),
('Gabriel', 'M', 'gb@web.com', 'password123', FALSE),
('G', 'Marrero', 'gm@web.com', 'password456', FALSE);
