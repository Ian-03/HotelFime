CREATE DATABASE hotelfime1;

USE hotelfime1;

CREATE TABLE users (
    id INT NOT NULL AUTO_INCREMENT,
    correo VARCHAR(50) NOT NULL,
    password VARCHAR(50) NOT NULL,
     PRIMARY KEY (id)
);

CREATE TABLE habitaciones (
    id INT NOT NULL AUTO_INCREMENT,
    nombre VARCHAR(100) NOT NULL,
    precio INT NOT NULL,
    descripcion VARCHAR(256),
    PRIMARY KEY (id)
);

INSERT INTO habitaciones (nombre, descripcion, precio) VALUES
("Cuarto individual", "Habitación para 1 persona con 1 cama, clima y televisión", 1500),
("Cuarto doble", "Cuenta con 2 camas, 1 baño, vista hacia rectoria y balcón", 3600),
("Suit", "2 Camas ergonomicas, 2 baños con yakuzi, y vista hacia FIME", 4000),
("Mega Suit", "Ideal para reuiones de trabajo, por la cantidad de espacio", 6500),
("Cuarto estudiantil", "Equipada con lo básico para que 1 estudiante pueda hacer tarea y dormir", 800),
("Cuarto grupal", "Perfecto para desarrollar trabajos en equipo y hacer trabajos", 1300);

CREATE TABLE reservas (
    id INT NOT NULL AUTO_INCREMENT,
	idUser INT NOT NULL,
    idHabitacion INT NOT NULL,
    nombre VARCHAR(50) NOT NULL,
    fecha DATE NOT NULL,
    telefono VARCHAR(10) NOT NULL,
    PRIMARY KEY (id),
    FOREIGN KEY (idUser) REFERENCES users(id),
    FOREIGN KEY (idHabitacion) REFERENCES habitaciones(id)
);