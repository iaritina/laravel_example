CREATE DATABASE laravel_examples;

CREATE TABLE USERS(
    id int AUTO_INCREMENT PRIMARY KEY,
    pseudo VARCHAR(255) NOT NULL
);
CREATE TABLE BRANDS(
    id int AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL
);
