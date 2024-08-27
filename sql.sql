CREATE DATABASE car_showroom;

USE car_showroom;

CREATE TABLE cars (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100),
    image_url VARCHAR(255),
    engine VARCHAR(100),
    power VARCHAR(100),
    price VARCHAR(100)
);
