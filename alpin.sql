CREATE DATABASE webstore;
USE webstore;

CREATE TABLE users (
  id INT AUTO_INCREMENT PRIMARY KEY,
  username VARCHAR(100),
  password TEXT
);

CREATE TABLE produk (
  id INT AUTO_INCREMENT PRIMARY KEY,
  judul VARCHAR(255),
  file TEXT
);
