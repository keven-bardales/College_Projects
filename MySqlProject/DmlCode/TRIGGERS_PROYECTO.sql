use manjares;
-- Un trigger que sirva para agregar la fecha y hora de creación de los platos cuando se esté ingresando un plato.
DELIMITER $$
CREATE TRIGGER FECHA_CREACION_PLATO BEFORE INSERT ON TBL_PLATOS
FOR EACH ROW
BEGIN
SET NEW.FECHA_HORA_CREACION = NOW();
END$$

DELIMITER ;

insert into tbl_platos(CODIGO_PLATO,NOMBRE_PLATO,PRECIO_PLATO) values(null, 'Papas con carne', 65.99);

DELIMITER $$
-- Un trigger que sirva para modificar la fecha y hora de actualización de los platos cuando se esté modificando un plato.
CREATE TRIGGER MODIFICACION_PLATOS BEFORE UPDATE ON TBL_PLATOS
FOR EACH ROW
BEGIN
 SET NEW.FECHA_HORA_MODIFICACION = NOW();
END$$
DELIMITER ;

DELIMITER $$
-- Un trigger que sirva para agregar la fecha y hora de creación de los menús cuando se esté ingresando un menú.
CREATE TRIGGER FECHA_CREACION_MENU BEFORE INSERT ON TBL_MENUS_DIARIOS
FOR EACH ROW
BEGIN
SET NEW.FECHA_HORA_CREACION = NOW();
END$$
DELIMITER ;

DROP TRIGGER FECHA_CREACION_MENU;
DELIMITER $$
-- Un trigger que sirva para modificar la fecha y hora de actualización de los menús cuando se esté modificando un menú.
CREATE TRIGGER FECHA_MODIF_MENU BEFORE UPDATE ON TBL_MENUS_DIARIOS
FOR EACH ROW 
BEGIN
SET NEW.FECHA_HORA_MODIFICACION = now();
END$$
DELIMITER ;

DELIMITER $$
-- Un trigger que sirva para guardar la información en la tabla bitácoras menú cada vez que se actualiza o ingresa un menú.
CREATE TRIGGER TG_BITACORA_INGRESO_MENU AFTER INSERT ON TBL_MENUS_DIARIOS
FOR EACH ROW
BEGIN
INSERT INTO TBL_BITACORAS (USUARIO,DESCRIPCION,FECHA_HORA_OPERACION) VALUES
 (USER(), CONCAT('Se ha agregado un nuevo menu con codigo: ', NEW.CODIGO_MENU), NOW());
 END$$
 
 CREATE TRIGGER TG_BITACORA_ACTUALIZO_MENU AFTER UPDATE ON TBL_MENUS_DIARIOS
 FOR EACH ROW
 BEGIN
 INSERT INTO TBL_BITACORAS (USUARIO, DESCRIPCION, FECHA_HORA_OPERACION) VALUES
 (USER(), CONCAT('Se actualizo el menu con el codigo: ', NEW.CODIGO_MENU), NOW());
 END$$
DELIMITER ;
