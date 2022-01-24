CREATE TABLE users
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
    hotel_name varchar(255),
    checkin date NOT NULL,
    checkout date NOT NULL,
    people INT(11) NOT NULL,
    price INT(11),
    address VARCHAR(255) NOT NULL,
    user_id INT(11),
    hotel_id INT(11),
    FOREIGN KEY (user_id) REFERENCES users(id),
    FOREIGN KEY (hotel_id) REFERENCES hotels(hotel_id)
);