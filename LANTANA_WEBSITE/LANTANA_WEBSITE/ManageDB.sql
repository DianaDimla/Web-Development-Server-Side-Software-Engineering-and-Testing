CREATE DATABASE IF NOT EXISTS ManageDB;
USE ManageDB;

CREATE TABLE IF NOT EXISTS users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name_user VARCHAR(255) NOT NULL,
    email_user VARCHAR(255) NOT NULL UNIQUE,
    address_user VARCHAR(255) NOT NULL,
    phoneNo_user VARCHAR(20) NOT NULL
);
