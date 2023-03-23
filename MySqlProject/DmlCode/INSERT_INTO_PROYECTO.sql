use manjares;

INSERT INTO RESTAURANTES (NOMBRE_RESTAURANTE) VALUES ('Manjares de Occidente');

INSERT INTO TBL_PRODUCTOS (NOMBRE_PRODUCTO, UBICACION_BODEGA, PRECIO_VENTA, CANTIDAD_ACTUAL, CODIGO_RESTAURANTE) VALUES ('Filete de res', 'Bodega 1', 25.50, 50, 1);
INSERT INTO TBL_PRODUCTOS (NOMBRE_PRODUCTO, UBICACION_BODEGA, PRECIO_VENTA, CANTIDAD_ACTUAL, CODIGO_RESTAURANTE) VALUES ('Salmón ahumado', 'Bodega 2', 35.75, 25, 1);
INSERT INTO TBL_PRODUCTOS (NOMBRE_PRODUCTO, UBICACION_BODEGA, PRECIO_VENTA, CANTIDAD_ACTUAL, CODIGO_RESTAURANTE) VALUES ('Queso mozzarella', 'Bodega 1', 10.25, 75, 1);
INSERT INTO TBL_PRODUCTOS (NOMBRE_PRODUCTO, UBICACION_BODEGA, PRECIO_VENTA, CANTIDAD_ACTUAL, CODIGO_RESTAURANTE) VALUES ('Pasta fusilli', 'Bodega 3', 8.99, 100, 1);
INSERT INTO TBL_PRODUCTOS (NOMBRE_PRODUCTO, UBICACION_BODEGA, PRECIO_VENTA, CANTIDAD_ACTUAL, CODIGO_RESTAURANTE) VALUES ('Vino tinto reserva', 'Bodega 4', 45.50, 20, 1);


INSERT INTO TBL_PROVEEDORES (CODIGO_PROVEEDOR, NOMBRE_PROVEEDOR, DIRECCION_PROVEEDOR, RTN_PROVEEDOR, CIUDAD_PROVEEDOR)
VALUES (1, 'Proveedor de Tomates', 'Calle 10, Colonia Centro, Tegucigalpa', '1234567890123456', 'Tegucigalpa');

INSERT INTO TBL_PROVEEDORES (CODIGO_PROVEEDOR, NOMBRE_PROVEEDOR, DIRECCION_PROVEEDOR, RTN_PROVEEDOR, CIUDAD_PROVEEDOR)
VALUES (2, 'Proveedor de Quesos', 'Calle 5, Colonia Barandillas, San Pedro Sula', '2345678901234567', 'San Pedro Sula');

INSERT INTO TBL_PROVEEDORES (CODIGO_PROVEEDOR, NOMBRE_PROVEEDOR, DIRECCION_PROVEEDOR, RTN_PROVEEDOR, CIUDAD_PROVEEDOR)
VALUES (3, 'Proveedor de Carnes', 'Avenida Principal, Colonia Lomas del Guijarro, Tegucigalpa', '3456789012345678', 'Tegucigalpa');

INSERT INTO TBL_PROVEEDORES (CODIGO_PROVEEDOR, NOMBRE_PROVEEDOR, DIRECCION_PROVEEDOR, RTN_PROVEEDOR, CIUDAD_PROVEEDOR)
VALUES (4, 'Proveedor de Frutas', 'Calle 3, Barrio El Benque, San Pedro Sula', '4567890123456789', 'San Pedro Sula');

INSERT INTO TBL_PROVEEDORES (CODIGO_PROVEEDOR, NOMBRE_PROVEEDOR, DIRECCION_PROVEEDOR, RTN_PROVEEDOR, CIUDAD_PROVEEDOR)
VALUES (5, 'Proveedor de Verduras', 'Calle Principal, Colonia Las Lomas, Tegucigalpa', '5678901234567890', 'Tegucigalpa');

INSERT INTO TBL_PROVEEDORES (CODIGO_PROVEEDOR, NOMBRE_PROVEEDOR, DIRECCION_PROVEEDOR, RTN_PROVEEDOR, CIUDAD_PROVEEDOR)
VALUES (6, 'Proveedor de Plasticos', 'Calle Principal, Colonia Las Lomas, Choluteca', '6546546546516', 'Tegucigalpa');


INSERT INTO TBL_TELEFONOS_PROVEEDOR (NUMERO_TELEFONO, CODIGO_PROVEEDOR) VALUES
('9999-8888', 1),
('2222-3333', 2),
('7777-6666', 3),
('4444-5555', 4),
('1111-0000', 5);


INSERT INTO TBL_ACOMPANANTES (NOMBRE_ACOMPANANTE, PRECIO_ACOMPANATE) VALUES
('Arroz blanco', 2.50),
('Frijoles refritos', 1.50),
('Tostones', 3.00),
('Ensalada mixta', 4.00),
('Pure de papa', 3.50);


INSERT INTO TBL_PLATOS(NOMBRE_PLATO, PRECIO_PLATO, FECHA_HORA_MODIFICACION, FECHA_HORA_CREACION) 
VALUES ('Filete Mignon con Salsa de Champiñones', 25.99, NOW(), NOW());

INSERT INTO TBL_PLATOS(NOMBRE_PLATO, PRECIO_PLATO, FECHA_HORA_MODIFICACION, FECHA_HORA_CREACION) 
VALUES ('Spaghetti con Salsa de Tomate y Albóndigas', 15.99, NOW(), NOW());

INSERT INTO TBL_PLATOS(NOMBRE_PLATO, PRECIO_PLATO, FECHA_HORA_MODIFICACION, FECHA_HORA_CREACION) 
VALUES ('Salmón a la Parrilla con Vegetales', 19.99, NOW(), NOW());

INSERT INTO TBL_PLATOS(NOMBRE_PLATO, PRECIO_PLATO, FECHA_HORA_MODIFICACION, FECHA_HORA_CREACION) 
VALUES ('Ensalada César con Pollo a la Parrilla', 12.99, NOW(), NOW());

INSERT INTO TBL_PLATOS(NOMBRE_PLATO, PRECIO_PLATO, FECHA_HORA_MODIFICACION, FECHA_HORA_CREACION) 
VALUES ('Hamburguesa de Carne con Queso y Papas Fritas', 9.99, NOW(), NOW());


INSERT INTO TBL_MENUS_DIARIOS (FECHA_ELABORACION, DESCRIPCION, FECHA_HORA_MODIFICACION, FECHA_HORA_CREACION)
VALUES ('2023-03-07 12:00:00', 'Hamburguesa con papas fritas', NOW(), NOW());

INSERT INTO TBL_MENUS_DIARIOS (FECHA_ELABORACION, DESCRIPCION, FECHA_HORA_MODIFICACION, FECHA_HORA_CREACION)
VALUES ('2023-03-07 12:00:00', 'Ensalada César con pollo', NOW(), NOW());

INSERT INTO TBL_MENUS_DIARIOS (FECHA_ELABORACION, DESCRIPCION, FECHA_HORA_MODIFICACION, FECHA_HORA_CREACION)
VALUES ('2023-03-07 12:00:00', 'Sopa de verduras con pollo', NOW(), NOW());

INSERT INTO TBL_MENUS_DIARIOS (FECHA_ELABORACION, DESCRIPCION, FECHA_HORA_MODIFICACION, FECHA_HORA_CREACION)
VALUES ('2023-03-07 12:00:00', 'Arroz frito con camarones', NOW(), NOW());

INSERT INTO TBL_MENUS_DIARIOS (FECHA_ELABORACION, DESCRIPCION, FECHA_HORA_MODIFICACION, FECHA_HORA_CREACION)
VALUES ('2023-03-07 12:00:00', 'Pizza de jamón y champiñones', NOW(), NOW());

INSERT INTO TBL_MENUS_DIARIOS (FECHA_ELABORACION, DESCRIPCION, FECHA_HORA_MODIFICACION, FECHA_HORA_CREACION)
VALUES ('2023-03-07 12:00:00', 'Pizza de jamón y champiñones', NOW(), NOW());

INSERT INTO TBL_MENUS_DIARIOS (FECHA_ELABORACION, DESCRIPCION, FECHA_HORA_MODIFICACION, FECHA_HORA_CREACION)
VALUES ('2023-06-26 12:00:00', 'Pizza de jamón y champiñones', NOW(), NOW());

INSERT INTO TBL_BITACORAS (USUARIO, DESCRIPCION, FECHA_HORA_OPERACION)
VALUES ('Juan', 'Se modificó el precio del plato 1', '2023-03-07 10:30:00');

INSERT INTO TBL_BITACORAS (USUARIO, DESCRIPCION, FECHA_HORA_OPERACION)
VALUES ('Maria', 'Se agregó un nuevo proveedor', '2023-03-07 12:15:00');

INSERT INTO TBL_BITACORAS (USUARIO, DESCRIPCION, FECHA_HORA_OPERACION)
VALUES ('Pedro', 'Se eliminó el producto 3 del inventario', '2023-03-07 14:20:00');

INSERT INTO TBL_BITACORAS (USUARIO, DESCRIPCION, FECHA_HORA_OPERACION)
VALUES ('Luisa', 'Se modificó la descripción del menú del día', '2023-03-07 16:45:00');

INSERT INTO TBL_BITACORAS (USUARIO, DESCRIPCION, FECHA_HORA_OPERACION)
VALUES ('Carlos', 'Se agregó un nuevo acompañante al menú', '2023-03-07 18:30:00');

INSERT INTO PROVEEDORES_SUMINISTRAN_PRODUCTOS (CODIGO_PRODUCTO, CODIGO_PROVEEDOR)
VALUES (1, 3), -- Filete de res es suministrado por Proveedor de Carnes
       (2, 4), -- Salmón ahumado es suministrado por Proveedor de Frutas
       (3, 2), -- Queso mozzarella es suministrado por Proveedor de Quesos
       (4, 1), -- Pasta fusilli es suministrado por Proveedor de Tomates
       (5, 3); -- Vino tinto reserva es suministrado por Proveedor de Carnes
       
       
INSERT INTO TBL_PRODUCTOS_UTILIZAN_ACOMPANANTES (CODIGO_ACOMPANANTE, CODIGO_PRODUCTO) VALUES (1, 1);
INSERT INTO TBL_PRODUCTOS_UTILIZAN_ACOMPANANTES (CODIGO_ACOMPANANTE, CODIGO_PRODUCTO) VALUES (2, 1);
INSERT INTO TBL_PRODUCTOS_UTILIZAN_ACOMPANANTES (CODIGO_ACOMPANANTE, CODIGO_PRODUCTO) VALUES (1, 2);
INSERT INTO TBL_PRODUCTOS_UTILIZAN_ACOMPANANTES (CODIGO_ACOMPANANTE, CODIGO_PRODUCTO) VALUES (3, 3);
INSERT INTO TBL_PRODUCTOS_UTILIZAN_ACOMPANANTES (CODIGO_ACOMPANANTE, CODIGO_PRODUCTO) VALUES (4, 4);

INSERT INTO TBL_ACOMPANANTES_FORMAN_PLATOS (CODIGO_ACOMPANANTE, CODIGO_PLATO) VALUES (1, 1); -- El plato 1 (Filete Mignon con Salsa de Champiñones) incluye arroz blanco como acompañante
INSERT INTO TBL_ACOMPANANTES_FORMAN_PLATOS (CODIGO_ACOMPANANTE, CODIGO_PLATO) VALUES (2, 2); -- El plato 2 (Spaghetti con Salsa de Tomate y Albóndigas) incluye frijoles refritos como acompañante
INSERT INTO TBL_ACOMPANANTES_FORMAN_PLATOS (CODIGO_ACOMPANANTE, CODIGO_PLATO) VALUES (3, 3); -- El plato 3 (Salmón a la Parrilla con Vegetales) incluye tostones como acompañante
INSERT INTO TBL_ACOMPANANTES_FORMAN_PLATOS (CODIGO_ACOMPANANTE, CODIGO_PLATO) VALUES (4, 4); -- El plato 4 (Ensalada César con Pollo a la Parrilla) incluye ensalada mixta como acompañante
INSERT INTO TBL_ACOMPANANTES_FORMAN_PLATOS (CODIGO_ACOMPANANTE, CODIGO_PLATO) VALUES (5, 5); -- El plato 5 (Hamburguesa de Carne con Queso y Papas Fritas) incluye puré de papa como acompañante
	
INSERT INTO TBL_PLATOS_EN_MENU (CODIGO_PLATO, CODIGO_MENU, CANTIDAD_A_PRODUCIR, EXISTENCIA_ACTUAL) VALUES
(1, 1, 50, 50),
(2, 1, 30, 30),
(3, 2, 20, 20),
(4, 2, 40, 40),
(5, 3, 60, 60);
INSERT INTO TBL_PLATOS_EN_MENU (CODIGO_PLATO, CODIGO_MENU, CANTIDAD_A_PRODUCIR, EXISTENCIA_ACTUAL) VALUES
(2, 6, 50, 70);

INSERT INTO TBL_PLATOS_EN_MENU (CODIGO_PLATO, CODIGO_MENU, CANTIDAD_A_PRODUCIR, EXISTENCIA_ACTUAL) VALUES
(2, 7, 50, 70);

SELECT * FROM restaurantes;
SELECT * FROM tbl_productos;
SELECT * FROM tbl_proveedores;
SELECT * FROM tbl_telefonos_proveedor;
SELECT * FROM tbl_acompanantes;
SELECT * FROM tbl_platos;
SELECT * FROM tbl_menus_diarios;
SELECT * FROM tbl_platos_en_menu;
SELECT * FROM tbl_acompanantes_forman_platos;
SELECT * FROM tbl_productos_utilizan_acompanantes;




