CREATE TABLE user
(
    id INT(11) PRIMARY KEY NOT NULL AUTO_INCREMENT,
    name VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    phone int(20) NOT NULL,
    password VARCHAR(255) NOT NULL
);

CREATE TABLE hotels
(
    hotel_id INT(11) PRIMARY KEY NOT NULL AUTO_INCREMENT,
    hotel_name VARCHAR(255) NOT NULL,
    rooms int(11) NOT NULL,
    price INT(11) NOT NULL,
    photo VARCHAR(255),
    description VARCHAR(255) ,
    status VARCHAR(255),
    hotel_type VARCHAR(255) NOT NULL
);

CREATE TABLE hotel_book
(
    checkin date NOT NULL,
    checkout date NOT NULL,
    room INT(11) NOT NULL,
    address VARCHAR(255) NOT NULL,
);