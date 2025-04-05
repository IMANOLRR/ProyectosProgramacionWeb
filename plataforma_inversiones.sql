
CREATE DATABASE plataforma_inversiones;
USE plataforma_inversiones;

-- Tabla Usuario
CREATE TABLE Usuario (
    id_usuario INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL,
    correo VARCHAR(100) NOT NULL UNIQUE,
    contrasena VARCHAR(255) NOT NULL,
    tipo_cuenta ENUM('Standard', 'Premium') NOT NULL,
    fecha_registro TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Tabla Activo
CREATE TABLE Activo (
    id_activo INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL,
    tipo_activo ENUM('Divisa', 'Accion', 'Criptomoneda', 'Otro') NOT NULL
);

-- Tabla Recomendacion
CREATE TABLE Recomendacion (
    id_recomendacion INT AUTO_INCREMENT PRIMARY KEY,
    id_usuario INT NOT NULL,
    id_activo INT NOT NULL,
    porcentaje_riesgo DECIMAL(5,2) NOT NULL,
    sugerencia ENUM('Comprar', 'Vender', 'Mantener') NOT NULL,
    fecha DATE NOT NULL,
    FOREIGN KEY (id_usuario) REFERENCES Usuario(id_usuario),
    FOREIGN KEY (id_activo) REFERENCES Activo(id_activo)
);

-- Tabla Historial_Consulta
CREATE TABLE Historial_Consulta (
    id_consulta INT AUTO_INCREMENT PRIMARY KEY,
    id_usuario INT NOT NULL,
    fecha DATETIME NOT NULL,
    resultado_json JSON,
    FOREIGN KEY (id_usuario) REFERENCES Usuario(id_usuario)
);

-- Tabla Alerta
CREATE TABLE Alerta (
    id_alerta INT AUTO_INCREMENT PRIMARY KEY,
    id_usuario INT NOT NULL,
    id_activo INT NOT NULL,
    condicion VARCHAR(100) NOT NULL,
    fecha_creacion TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (id_usuario) REFERENCES Usuario(id_usuario),
    FOREIGN KEY (id_activo) REFERENCES Activo(id_activo)
);
