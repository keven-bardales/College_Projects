Create Database MANJARES;
use MANJARES;

DROP TABLE TBL_PRODUCTOS;

DROP DATABASE MANJARES;


CREATE TABLE RESTAURANTES(
CODIGO_RESTAURANTE INT PRIMARY KEY auto_increment,
NOMBRE_RESTAURANTE VARCHAR(45) NOT NULL
);

CREATE TABLE TBL_PRODUCTOS(
CODIGO_INVENTARIO INT PRIMARY KEY AUTO_INCREMENT,
NOMBRE_PRODUCTO VARCHAR(45) NOT NULL,
UBICACION_BODEGA VARCHAR(45) NOT NULL,
PRECIO_VENTA DECIMAL(10,2) NOT NULL,
CANTIDAD_ACTUAL INT NOT NULL,
CODIGO_RESTAURANTE INT NOT NULL
);

select * from TBL_PRODUCTOS;

ALTER TABLE TBL_PRODUCTOS ADD CONSTRAINT FK_PRODUCTO_RESTAURANTE
FOREIGN KEY (CODIGO_RESTAURANTE) REFERENCES RESTAURANTES
(CODIGO_RESTAURANTE);

CREATE TABLE TBL_PROVEEDORES(
CODIGO_PROVEEDOR INT PRIMARY KEY,
NOMBRE_PROVEEDOR VARCHAR(45) NOT NULL,
DIRECCION_PROVEEDOR VARCHAR(200) NOT NULL,
RTN_PROVEEDOR VARCHAR(16) UNIQUE NOT NULL,
CIUDAD_PROVEEDOR VARCHAR(45) NOT NULL
);

select * from tbl_proveedores;

CREATE TABLE TBL_TELEFONOS_PROVEEDOR(
CODIGO_TELEFONO INT PRIMARY KEY AUTO_INCREMENT,
NUMERO_TELEFONO VARCHAR(45) NOT NULL,
CODIGO_PROVEEDOR INT
);

select * from tbl_telefonos_proveedor;

ALTER TABLE TBL_TELEFONOS_PROVEEDOR ADD CONSTRAINT FK_TELEFONOS_PROVEEDOR
FOREIGN KEY (CODIGO_PROVEEDOR) REFERENCES TBL_PROVEEDORES (CODIGO_PROVEEDOR);

CREATE TABLE PROVEEDORES_SUMINISTRAN_PRODUCTOS(
CODIGO_PRODUCTO INT,
CODIGO_PROVEEDOR INT,
PRIMARY KEY (CODIGO_PRODUCTO, CODIGO_PROVEEDOR)
);

select * from PROVEEDORES_SUMINISTRAN_PRODUCTOS;

ALTER TABLE PROVEEDORES_SUMINISTRAN_PRODUCTOS ADD CONSTRAINT FK_PROVEEDOR_CODIGO_TBLSUMINISTRAN
FOREIGN KEY (CODIGO_PROVEEDOR) REFERENCES TBL_PROVEEDORES (CODIGO_PROVEEDOR);

ALTER TABLE PROVEEDORES_SUMINISTRAN_PRODUCTOS ADD CONSTRAINT FK_PRODUCTO_CODIGO_TBLSUMINISTRAN
FOREIGN KEY (CODIGO_PRODUCTO) REFERENCES TBL_PRODUCTOS (CODIGO_INVENTARIO);

CREATE TABLE TBL_ACOMPANANTES(
CODIGO_ACOMPANANTE INT PRIMARY KEY AUTO_INCREMENT,
NOMBRE_ACOMPANANTE VARCHAR(45) NOT NULL,
PRECIO_ACOMPANATE DECIMAL (10,2) NOT NULL

);

CREATE TABLE TBL_PRODUCTOS_UTILIZAN_ACOMPANANTES(
CODIGO_ACOMPANANTE INT,
CODIGO_PRODUCTO INT,
PRIMARY KEY (CODIGO_ACOMPANANTE, CODIGO_PRODUCTO)
);

ALTER TABLE TBL_PRODUCTOS_UTILIZAN_ACOMPANANTES ADD CONSTRAINT FK_CODIGO_ACOMPANANTE
FOREIGN KEY (CODIGO_ACOMPANANTE) REFERENCES TBL_ACOMPANANTES (CODIGO_ACOMPANANTE);

ALTER TABLE TBL_PRODUCTOS_UTILIZAN_ACOMPANANTES ADD CONSTRAINT FK_CODIGO_PRODUCTO
FOREIGN KEY (CODIGO_PRODUCTO) REFERENCES TBL_PRODUCTOS (CODIGO_INVENTARIO);

CREATE TABLE TBL_PLATOS(
CODIGO_PLATO INT PRIMARY KEY AUTO_INCREMENT,
NOMBRE_PLATO VARCHAR(45) NOT NULL,
PRECIO_PLATO DECIMAL(10,2) NOT NULL,
FECHA_HORA_MODIFICACION DATETIME NOT NULL,
FECHA_HORA_CREACION DATETIME NOT NULL
);

CREATE TABLE TBL_ACOMPANANTES_FORMAN_PLATOS(
CODIGO_ACOMPANANTE INT,
CODIGO_PLATO INT,
PRIMARY KEY (CODIGO_ACOMPANANTE,CODIGO_PLATO)
);

ALTER TABLE TBL_ACOMPANANTES_FORMAN_PLATOS ADD CONSTRAINT FK_CODIGO_ACOMPANANTE_PLATOS
FOREIGN KEY (CODIGO_ACOMPANANTE) REFERENCES TBL_ACOMPANANTES (CODIGO_ACOMPANANTE);

ALTER TABLE TBL_ACOMPANANTES_FORMAN_PLATOS ADD CONSTRAINT FK_CODIGO_PLATO_ACOMPANANTE
FOREIGN KEY (CODIGO_PLATO) REFERENCES TBL_PLATOS (CODIGO_PLATO);

CREATE TABLE TBL_MENUS_DIARIOS(
CODIGO_MENU INT PRIMARY KEY AUTO_INCREMENT,
FECHA_ELABORACION DATETIME NOT NULL,
DESCRIPCION VARCHAR(45) NOT NULL,
FECHA_HORA_MODIFICACION DATETIME NOT NULL,
FECHA_HORA_CREACION DATETIME NOT NULL
);

CREATE TABLE TBL_PLATOS_EN_MENU(
CODIGO_PLATO INT,
CODIGO_MENU INT,
CANTIDAD_A_PRODUCIR INT NOT NULL,
EXISTENCIA_ACTUAL INT NOT NULL,
PRIMARY KEY(CODIGO_PLATO,CODIGO_MENU)
);

ALTER TABLE TBL_PLATOS_EN_MENU ADD CONSTRAINT FK_CODIGO_MENUDIARIO
FOREIGN KEY (CODIGO_MENU) REFERENCES TBL_MENUS_DIARIOS (CODIGO_MENU);

ALTER TABLE TBL_PLATOS_EN_MENU ADD CONSTRAINT FK_CODIGO_PLATO_MENU
FOREIGN KEY (CODIGO_PLATO) REFERENCES TBL_PLATOS (CODIGO_PLATO);

CREATE TABLE TBL_BITACORAS(
CODIGO_BITACORA INT PRIMARY KEY AUTO_INCREMENT,
USUARIO VARCHAR (45) NOT NULL,
DESCRIPCION VARCHAR (200) NOT NULL,
FECHA_HORA_OPERACION DATETIME NOT NULL
);




