-- Crear la base de datos
CREATE DATABASE db_empleados;

-- Usar la base de datos
USE db_empleados;

-- Crear la tabla 'personal'
CREATE TABLE personal (
    id INT PRIMARY KEY AUTO_INCREMENT,
    nombre VARCHAR(100) NOT NULL,
    edad INT NOT NULL,
    salario DECIMAL(10,2) NOT NULL,
    fecha DATE NOT NULL
);

-- Insertar los datos de ejemplo
INSERT INTO personal (nombre, edad, salario, fecha) VALUES
('Tiger Nixon', 61, 320800.00, '2020-12-14'),
('Garrett Winters', 63, 170750.00, '2020-12-14'),
('Ashton Cox', 66, 86000.00, '2020-12-14'),
('Cedric Kelly', 22, 433060.00, '2020-12-14'),
('Airi Satou', 33, 162700.00, '2020-12-14');
