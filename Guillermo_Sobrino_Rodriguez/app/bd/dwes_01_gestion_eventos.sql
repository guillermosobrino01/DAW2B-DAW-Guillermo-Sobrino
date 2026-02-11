CREATE DATABASE dwes_01_gestion_eventos;

USE dwes_01_gestion_eventos;

CREATE TABLE organizadores (
    id INT AUTO_INCREMENT PRIMARY KEY,
    dni VARCHAR(15) NOT NULL UNIQUE,
    nombre VARCHAR(255) NOT NULL,
    contacto VARCHAR(255) NOT NULL
);


CREATE TABLE eventos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(255) NOT NULL,
    fecha DATE NOT NULL,
    ubicacion VARCHAR(255) NOT NULL,
    asistentes INT NOT NULL,
    organizador_id INT NOT NULL,
    FOREIGN KEY (organizador_id) REFERENCES organizadores(id)
);



-- Insertar organizadores
INSERT INTO organizadores (dni, nombre, contacto) VALUES 
('12345678A', 'Eventos Corporativos S.L.', 'info@corporativos.com'),
('23456789B', 'Organización de Congresos Internacionales', 'contact@oci.com'),
('34567890C', 'Planificaciones Innovadoras', 'contact@innovadores.com'),
('45678901D', 'Festival Managers', 'info@festivalmanagers.com'),
('56789012E', 'Team Building Solutions', 'info@teambuilding.com'),
('67890123F', 'Conferencias Globales', 'info@globalconferences.com');

-- Insertar eventos
INSERT INTO eventos (nombre, fecha, ubicacion, asistentes, organizador_id) VALUES 
('Conferencia Internacional de Tecnología', '2024-11-12', 'Madrid', 350, 2),
('Festival de Música Electrónica', '2024-08-20', 'Barcelona', 5000, 4),
('Seminario de Marketing Digital', '2024-10-05', 'Valencia', 150, 1),
('Taller de Innovación Empresarial', '2024-09-15', 'Sevilla', 200, 3),
('Congreso de Energías Renovables', '2024-12-01', 'Bilbao', 450, 2),
('Evento de Networking Empresarial', '2024-09-22', 'Oviedo', 300, 1),
('Festival de Cine Independiente', '2024-07-25', 'Gijón', 1000, 4),
('Jornada de Team Building', '2024-10-12', 'Zaragoza', 50, 5);