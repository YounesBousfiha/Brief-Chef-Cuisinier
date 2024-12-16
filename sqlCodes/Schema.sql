-- SQL Code Pour la Creation de base de données et des Tableux et éstablishe leur relations

CREATE DATABASE IF NOT EXISTS ChefCuisinier;

USE ChefCuisinier;


CREATE TABLE IF NOT EXISTS Roles(
    ID int NOT NULL AUTO_INCREMENT,
    Role_name ENUM('Chef', 'Client'),
    PRIMARY KEY(ID)
);

CREATE TABLE IF NOT EXISTS User(
    ID int NOT NULL AUTO_INCREMENT,
    Nom varchar(50) NOT NULL,
    Prenom varchar(50) NOT NULL,
    Email varchar(50) NOT NULL UNIQUE,
    Password varchar(100) NOT NULL,
    Phone varchar(15) NOT NULL,
    Role_id int NOT NULL,
    PRIMARY KEY(ID),
    FOREIGN KEY(role_id) REFERENCES Roles(ID)
);

CREATE TABLE IF NOT EXISTS Plats(
    ID int NOT NULL AUTO_INCREMENT,
    Plat_type varchar(100) NOT NULL,
    Plat_desc varchar(100) NOT NULL,
    Created_by int NOT NULL,
    PRIMARY KEY(ID),
    FOREIGN kEY(created_by) REFERENCES User (ID)
);

CREATE TABLE IF NOT EXISTS Menu(
    ID int NOT NULL AUTO_INCREMENT,
    Nom varchar(255) NOT NULL,
    Created_by int NOT NULL,
    PRIMARY KEY(ID),
    FOREIGN KEY (created_by) REFERENCES User (ID)
);

CREATE TABLE IF NOT EXISTS Reservations(
    ID int NOT NULL AUTO_INCREMENT,
    date_reservation Date NOT NULL,
    NumDesPersonne int NOT NULL,
    reser_status ENUM('Pending', 'Approved', 'Rejected') DEFAULT 'Pending',
    User_id int NOT NULL,
    Menu_id int NOT NULL,
    PRIMARY KEY(ID),
    FOREIGN KEY(User_id) REFERENCES User(ID),
    FOREIGN KEY(Menu_id) REFERENCES Menu(ID)
);

CREATE TABLE IF NOT EXISTS Menu_Plats(
    ID int NOT NULL AUTO_INCREMENT,
    Menu_id int NOT NULL,
    Plat_id int NOT NULL,
    PRIMARY KEY(ID),
    FOREIGN KEY(Menu_id) REFERENCES Menu(ID),
    FOREIGN KEY(Plat_id) REFERENCES Plats(ID)
);