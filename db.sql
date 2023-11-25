CREATE DATABASE hotelfime;

USE hotelfime;

CREATE TABLE users (
    id INT NOT NULL AUTO_INCREMENT,
    correo VARCHAR(50) NOT NULL,
    contraseña VARCHAR(50) NOT NULL,
     PRIMARY KEY (id)
);

CREATE TABLE habitaciones (
    id INT NOT NULL AUTO_INCREMENT,
    nombre VARCHAR(100) NOT NULL,
    precio INT NOT NULL,
    descripcion VARCHAR(256),
    PRIMARY KEY (id)
);

CREATE TABLE reservas (
    id INT NOT NULL AUTO_INCREMENT,
	idUser INT NOT NULL,
    idHabitacion INT NOT NULL,
    nombre VARCHAR(50) NOT NULL,
    fecha DATE NOT NULL,
    PRIMARY KEY (id),
    FOREIGN KEY (idUser) REFERENCES users(id),
    FOREIGN KEY (idHabitacion) REFERENCES habitaciones(id)
);