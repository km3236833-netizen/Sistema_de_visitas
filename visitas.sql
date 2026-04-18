CREATE DATABASE visitas;

USE visitas;

CREATE TABLE visitas (
   id INT PRIMARY KEY AUTO_INCREMENT,
   nombre_completo VARCHAR(100) NOT NULL,
   persona_visitada VARCHAR(100) NOT NULL,
   fecha DATE NOT NULL,
   hora_entrada TIME NOT NULL,
   hora_salida TIME NULL,
   created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);