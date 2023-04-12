CREATE TABLE products (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
sku VARCHAR(50) NOT NULL UNIQUE,
name VARCHAR(100) NOT NULL,
price DECIMAL(10, 2) NOT NULL,
size INT,
weight DECIMAL(6, 2),
height DECIMAL(6, 2),
width DECIMAL(6, 2),
length DECIMAL(6, 2)
);

-- CREATE TABLE dvd (
--   id INT PRIMARY KEY,
--   size_mb INT
-- );

-- CREATE TABLE book (
--   id INT PRIMARY KEY,
--   weight_kg DECIMAL(10,2)
-- );

-- CREATE TABLE furniture (
--   id INT PRIMARY KEY,
--   height_cm INT,
--   width_cm INT,
--   length_cm INT
-- );

-- CREATE TABLE categories (
--   id INT PRIMARY KEY,
--   name VARCHAR(255)
-- );

-- INSERT INTO categories (id, name) VALUES (1, 'DVD');
-- INSERT INTO categories (id, name) VALUES (2, 'Book');
-- INSERT INTO categories (id, name) VALUES (3, 'Furniture');

-- CREATE TABLE products (
--   id INT PRIMARY KEY,
--   name VARCHAR(255),
--   price DECIMAL(10,2),
--   category_id INT,
--   FOREIGN KEY (category_id) REFERENCES categories(id),
--   dvd_id INT NULL,
--   book_id INT NULL,
--   furniture_id INT NULL,
--   CONSTRAINT FK_products_dvd FOREIGN KEY (dvd_id) REFERENCES dvd(id),
--   CONSTRAINT FK_products_book FOREIGN KEY (book_id) REFERENCES book(id),
--   CONSTRAINT FK_products_furniture FOREIGN KEY (furniture_id) REFERENCES furniture(id)
-- );
