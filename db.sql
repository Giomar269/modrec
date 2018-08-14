DROP PROCEDURE IF EXISTS guardarReclamo;
DELIMITER $$
CREATE OR REPLACE PROCEDURE `guardar_reclamo`(IN tipo_documento VARCHAR, IN documento VARCHAR, IN nombres_cliente VARCHAR, IN apellidos_cliente VARCHAR, IN sexo_cliente VARCHAR, IN telefono_cliente VARCHAR, IN email_cliente VARCHAR, IN apoderado_cliente VARCHAR, IN departamento_cliente VARCHAR, IN provincia_cliente VARCHAR, IN distrito_cliente VARCHAR, IN direccion_cliente VARCHAR, IN referencia_cliente VARCHAR, IN codigo_compra VARCHAR, IN fecha_compra DATE, IN cod_producto_compra VARCHAR, IN descripcion_producto VARCHAR, IN tipo_reclamacion VARCHAR, IN detalle_desperfecto VARCHAR, IN pedido_desperfecto VARCHAR, IN monto_reclamado decimal,
)
BEGIN
   INSERT INTO reclamos VALUES (tipo_documento, documento, nombres_cliente, apellidos_cliente, sexo_cliente, telefono_cliente, email_cliente, apoderado_cliente, departamento_cliente, provincia_cliente, distrito_cliente, direccion_cliente, referencia_cliente, codigo_compra, fecha_compra, cod_producto_compra, descripcion_producto, tipo_reclamacion, detalle_desperfecto, pedido_desperfecto, monto_reclamado);
END


DELIMITER $$
CREATE FUNCTION max_reclamo() RETURNS INT
    DETERMINISTIC
BEGIN
    RETURN (SELECT max(id) FROM reclamos);
END


CREATE DATABASE libro_reclamaciones;
USE libro_reclamaciones;
CREATE TABLE IF NOT EXISTS reclamos(
    id INT NOT NULL AUTO_INCREMENT,
    tipo_documento VARCHAR(50) NOT NULL,
    documento VARCHAR(50) NOT NULL,
    nombres_cliente VARCHAR(100) NOT NULL,
    apellidos_cliente VARCHAR(100) NOT NULL,
    sexo_cliente VARCHAR(2) NOT NULL,
    telefono_cliente VARCHAR(20) NOT NULL,
    email_cliente VARCHAR(60) NOT NULL,
    apoderado_cliente VARCHAR(100),

    departamento_cliente VARCHAR(100) NOT NULL,
    provincia_cliente VARCHAR(100) NOT NULL,
    distrito_cliente VARCHAR(100) NOT NULL,
    direccion_cliente VARCHAR(200) NOT NULL,
    referencia_cliente VARCHAR(200) NOT NULL,

    codigo_compra VARCHAR(20) NOT NULL,
    fecha_compra DATE NOT NULL,
    cod_producto_compra VARCHAR(20) NOT NULL,
    descripcion_producto VARCHAR(500) NOT NULL,

    tipo_reclamacion VARCHAR(200) NOT NULL,
    detalle_desperfecto VARCHAR(500) NOT NULL,
    pedido_desperfecto VARCHAR(500) NOT NULL,
    monto_reclamado decimal(15,2),

    PRIMARY KEY ( id )
);


db: upgrade_librorecla
user: upgrade_librorec
pass: librorec
