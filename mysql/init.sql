-- init.sql
-- Este script se ejecutará cuando el contenedor MySQL se inicie por primera vez.

-- Usar la base de datos 'sistema_telefonico'
USE sistema_telefonico;

-- Crear la tabla 'usuarios' si no existe
CREATE TABLE IF NOT EXISTS usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL,
    email VARCHAR(100) UNIQUE NOT NULL,
    password VARCHAR(255) NOT NULL,
    rol ENUM('admin', 'usuario') DEFAULT 'usuario', -- Añadir un rol para ejemplo
    fecha_registro TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Insertar algunos datos de ejemplo en la tabla 'usuarios'
INSERT INTO usuarios (nombre, email, password, rol) VALUES
('Juan Pérez', 'juan.perez@example.com', 'contrasena_segura1', 'admin'),
('María García', 'maria.garcia@example.com', 'otra_contrasena2', 'usuario'),
('Carlos Ruiz', 'carlos.ruiz@example.com', 'password321', 'usuario');

-- Crear la tabla 'contactos'
CREATE TABLE IF NOT EXISTS contactos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    usuario_id INT NOT NULL,
    nombre_contacto VARCHAR(100) NOT NULL,
    telefono VARCHAR(20),
    email_contacto VARCHAR(100),
    FOREIGN KEY (usuario_id) REFERENCES usuarios(id) ON DELETE CASCADE
);

-- Insertar datos de ejemplo en la tabla 'contactos'
-- Asumiendo que Juan (id=1) tiene contactos
INSERT INTO contactos (usuario_id, nombre_contacto, telefono, email_contacto) VALUES
(1, 'Laura Martínez', '123-456-7890', 'laura.m@example.com'),
(1, 'Pedro López', '098-765-4321', 'pedro.l@example.com');

-- Crear una tabla simple para pruebas (opcional)
CREATE TABLE IF NOT EXISTS productos_temp (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(255) NOT NULL,
    precio DECIMAL(10, 2)
);

INSERT INTO productos_temp (nombre, precio) VALUES
('Producto A', 10.50),
('Producto B', 25.75);

USE sistema_telefonico;

-- Tabla de usuarios (modificada para incluir nuevos campos)
CREATE TABLE IF NOT EXISTS users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    first_name VARCHAR(50) NOT NULL,
    last_name VARCHAR(50) NOT NULL,
    username VARCHAR(50) UNIQUE, -- Hacerlo opcional si el email es el principal, o mantenerlo si quieres ambos
    email VARCHAR(100) NOT NULL UNIQUE,
    rol VARCHAR(50), -- Campo para el rol del usuario
    password VARCHAR(255) NOT NULL, -- Para contraseñas hasheadas
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);