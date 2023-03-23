use manjares;

select count(CODIGO_PLATO) as platos_pure
from tbl_acompanantes_forman_platos
where CODIGO_ACOMPANANTE = 5;

-- Obtener cuántos platos tienen el acompañante puré.
select count(CODIGO_PLATO) as platos_pure, tbl_acompanantes.NOMBRE_ACOMPANANTE as NOMBRE_ACOMPANANTE
from tbl_acompanantes_forman_platos
inner join tbl_acompanantes
on tbl_acompanantes_forman_platos.CODIGO_ACOMPANANTE = tbl_acompanantes.CODIGO_ACOMPANANTE
where tbl_acompanantes_forman_platos.CODIGO_ACOMPANANTE = 5
group by tbl_acompanantes_forman_platos.CODIGO_ACOMPANANTE;

-- Listar todos los platos que pertenecen al menú de una fecha en específico
select tbl_platos.NOMBRE_PLATO, date_format(FECHA_ELABORACION,'%d/%m/%Y' ) AS 'Fecha elaboracion del Menu'
from tbl_platos_en_menu
inner join tbl_platos
on tbl_platos_en_menu.CODIGO_PLATO = tbl_platos.CODIGO_PLATO
inner join tbl_menus_diarios
on tbl_platos_en_menu.CODIGO_MENU = tbl_menus_diarios.CODIGO_MENU 
where tbl_menus_diarios.FECHA_ELABORACION = '2023-06-26 12:00:00';

-- Listar todos los platos de cada uno de los menús registrados y además, mostrar todos los acompañantes que conforman cada plato.
select tbl_platos.nombre_plato, 
date_format(FECHA_ELABORACION, '%d/%m/%Y') as 'Fecha del Menu', tbl_acompanantes.nombre_Acompanante as 'Acompañante del plato'
from tbl_platos_en_menu
inner join tbl_platos
on tbl_platos_en_menu.CODIGO_PLATO = tbl_platos.CODIGO_PLATO
inner join tbl_menus_diarios
on tbl_platos_en_menu.CODIGO_MENU = tbl_menus_diarios.CODIGO_MENU
inner join tbl_acompanantes_forman_platos
on tbl_acompanantes_forman_platos.CODIGO_PLATO = tbl_platos.CODIGO_PLATO
inner join tbl_acompanantes
on tbl_acompanantes.CODIGO_ACOMPANANTE = tbl_acompanantes_forman_platos.CODIGO_ACOMPANANTE;

SELECT tbl_menus_diarios.codigo_menu as 'Codigo de Menu',
       COUNT(tbl_platos_en_menu.CODIGO_PLATO) AS 'Cantidad de platos en Menu'
FROM tbl_menus_diarios
INNER JOIN tbl_platos_en_menu
ON tbl_platos_en_menu.CODIGO_MENU = tbl_menus_diarios.CODIGO_MENU
GROUP BY tbl_platos_en_menu.CODIGO_MENU;

-- Obtener cuántos platos tiene cada menú que se encuentra almacenado.

SELECT tbl_menus_diarios.CODIGO_MENU, COUNT(tbl_platos.codigo_plato) AS cantidad_platos
FROM tbl_menus_diarios
LEFT JOIN tbl_platos ON tbl_menus_diarios.CODIGO_MENU = tbl_platos.codigo_plato
GROUP BY tbl_menus_diarios.CODIGO_MENU;

select tbl_menus_diarios.codigo_menu, count(tbl_platos_en_menu.codigo_plato) as 'cantidad de platos en menu'
from tbl_menus_diarios
inner join tbl_platos_en_menu on tbl_menus_diarios.codigo_menu = tbl_platos_en_menu.codigo_plato
group by tbl_menus_diarios.codigo_menu;

-- Obtener los nombres de los productos que proporciona cada proveedor que pertenece a la ciudad de Tegucigalpa o San Pedro Sula.
SELECT tbl_productos.NOMBRE_PRODUCTO, tbl_proveedores.NOMBRE_PROVEEDOR, tbl_proveedores.CIUDAD_PROVEEDOR
FROM tbl_productos
INNER JOIN proveedores_suministran_productos ON tbl_productos.CODIGO_INVENTARIO =  proveedores_suministran_productos.CODIGO_PRODUCTO
INNER JOIN tbl_proveedores ON proveedores_suministran_productos.CODIGO_PROVEEDOR = tbl_proveedores.CODIGO_PROVEEDOR
WHERE tbl_proveedores.CIUDAD_PROVEEDOR IN ('Tegucigalpa', 'San Pedro Sula');
-- Mostrar la información de los proveedores y la cantidad de productos que proporciona cada uno de ellos.
SELECT TBL_PROVEEDORES.NOMBRE_PROVEEDOR, COUNT(PROVEEDORES_SUMINISTRAN_PRODUCTOS.CODIGO_PRODUCTO) AS CANTIDAD_PRODUCTOS
FROM TBL_PROVEEDORES
INNER JOIN PROVEEDORES_SUMINISTRAN_PRODUCTOS ON TBL_PROVEEDORES.CODIGO_PROVEEDOR = PROVEEDORES_SUMINISTRAN_PRODUCTOS.CODIGO_PROVEEDOR
GROUP BY TBL_PROVEEDORES.CODIGO_PROVEEDOR;








select * from tbl_acompanantes;

select * from tbl_platos;

select * from tbl_acompanantes_forman_platos;

