CREATE DATABASE test;

use test;

CREATE TABLE IF NOT EXISTS usuario (
    id_usuario INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    tipo_documento VARCHAR(30) NOT NULL,
    documento VARCHAR(30) NOT NULL,
    nombres VARCHAR(30) NOT NULL,
    apellidos VARCHAR(30) NOT NULL,
    sexo VARCHAR(2) NOT NULL,
    telefono VARCHAR(15) NOT NULL
 ,   email VARCHAR(50) NOT NULL,
    fecha_nac DATE NOT NULL,
    apoderado VARCHAR(100) NOT NULL,
    departamento VARCHAR(50) NOT NULL,
    provincia VARCHAR(50) NOT NULL,
    distrito VARCHAR(50) NOT NULL,
    direccion VARCHAR(100) NOT NULL,
    referencia VARCHAR(100) NOT NULL,
);

CREATE TABLE IF NOT EXISTS reclamacion (
    id_reclamacion INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    tipo_reclamacion VARCHAR(30) NOT NULL,
    fecha_reclamacionc DATE NOT NULL,
    codigo_compra VARCHAR(30) NOT NULL,
    codigo_producto VARCHAR(30) NOT NULL,
    descripcion_producto VARCHAR(200) NOT NULL,
    detalle_desperfecto VARCHAR(200) NOT NULL,
    pedido VARCHAR(100) NOT NULL,
    monto_reclamado DECIMAL,
    FOREIGN KEY (id_usuario)
        REFERENCES usuario(id_usuario)
        ON DELETE CASCADE
        ON UPDATE NO ACTION
);

DELIMITER //
CREATE PROCEDURE insersertar
(IN nombemple VARCHAR(30))
BEGIN

    DECLARE NUM INT;
    DECLARE ID CHAR(5);

    SET NUM = COUNT(*) FROM EMPLEADO;
    SET ID = 'E' + right('000' + cast(@num + 1 as varchar), 4);
    INSERT INTO EMPLEADO VALUES (ID,EMPLEADO);

END //
DELIMITER ;

DELIMITER $$
    CREATE OR REPLACE PROCEDURE saveClaim()
    BEGIN
        INSERT INTO
END$$

