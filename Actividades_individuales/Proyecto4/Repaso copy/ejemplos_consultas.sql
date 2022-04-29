-- buscar cliente por id
SELECT * FROM clientes WHERE id = 1;

--buscar cliente por nombre
SELECT * FROM clientes WHERE nombre = 'Juan';

--buscar nombre que empiece por J
SELECT * FROM clientes WHERE nombre LIKE 'J%';

--buscar nombre que contiene una A
SELECT * FROM clientes WHERE nombre LIKE '%A%';

--buscar nombre que termina en N
SELECT * FROM clientes WHERE nombre LIKE '%N';

--concatenar nombre y apellido
SELECT CONCAT(nombre, ' ', apellido) AS nombre_completo FROM clientes;

--buscar nombres que no empiezan por J
SELECT * FROM clientes WHERE nombre NOT LIKE 'J%';

--buscar nombre distintos de clientes
SELECT DISTINCT nombre FROM clientes;

--mostrar clientes ordenador alfabeticamente A-Z
SELECT * FROM clientes ORDER BY nombre ASC;

--mostrar clientes ordenador alfabeticamente Z-A
SELECT * FROM clientes ORDER BY nombre DESC;

--buscar los clientes nacidos en un año especifico
SELECT * FROM clientes WHERE fecha_nacimiento LIKE '%2019%';

--buscar los clientes nacidos antes de un año especifico
SELECT * FROM clientes WHERE fecha_nacimiento < '2019-01-01';

--calcular la edad de un cliente
SELECT DATE_FORMAT(fecha_nacimiento, '%Y') - DATE_FORMAT(CURDATE(), '%Y') AS edad FROM clientes WHERE id = 1;

--calcular la edad de todos los clientes
SELECT DATE_FORMAT(fecha_nacimiento, '%Y') - DATE_FORMAT(CURDATE(), '%Y') AS edad FROM clientes;

--mostrar todos los clientes mayores de edad
SELECT * FROM clientes WHERE DATE_FORMAT(fecha_nacimiento, '%Y') - DATE_FORMAT(CURDATE(), '%Y') > 18;

--contar la cantidad de clientes
SELECT COUNT(*) FROM clientes;

--contar la cantidad de clientes mayores de edad
SELECT COUNT(*) FROM clientes WHERE DATE_FORMAT(fecha_nacimiento, '%Y') - DATE_FORMAT(CURDATE(), '%Y') > 18;

--calcular la media de edad de los clientes
SELECT AVG(DATE_FORMAT(fecha_nacimiento, '%Y') - DATE_FORMAT(CURDATE(), '%Y')) FROM clientes;

--obtener la media de precios de los productos
SELECT AVG(precio) FROM productos;

--sumar el precio de dos productos
SELECT SUM(precio) FROM productos WHERE id = 1 OR id = 2;

--obtener el precio del producto mas barato
SELECT MIN(precio) FROM productos;

--obtener el precio del producto mas caro
SELECT MAX(precio) FROM productos;

--obtener el nombre del precio mas caro
SELECT nombre FROM productos WHERE precio = (SELECT MAX(precio) FROM productos);

--obtener el nombre del precio mas barato
SELECT nombre FROM productos WHERE precio = (SELECT MIN(precio) FROM productos);

--obtener todos los productos ordenados descendientemente por precio
SELECT * FROM productos ORDER BY precio DESC;

--mostrar todos los productos agrupados por marca
SELECT id,nombre,precio FROM productos GROUP BY marca;

--cambiar el nombre de un producto
UPDATE productos SET nombre = 'nuevo nombre' WHERE id = 1;

--aplicar descuento de 10% a todos los productos
UPDATE productos SET precio = precio * 0.90;

--aplicar un aumento de 10% a todos los productos
UPDATE productos SET precio = precio * 1.1;

--aplicar un aumento de 10 euros a todos los productos
UPDATE productos SET precio = precio + 10;

--borrar un producto
DELETE FROM productos WHERE id = 1;

--mostrar todos los productos de un cliente inner join
SELECT * FROM productos INNER JOIN clientes ON productos.cliente_id = clientes.id;

--crear trigger al insertar un producto
CREATE TRIGGER insertar_producto AFTER INSERT ON productos FOR EACH ROW
BEGIN
    INSERT INTO productos_historial (id, nombre, precio, marca) VALUES (NEW.id, NEW.nombre, NEW.precio, NEW.marca);
END;

--crear trigger al modificar un producto
CREATE TRIGGER modificar_producto AFTER UPDATE ON productos FOR EACH ROW
BEGIN
    INSERT INTO productos_historial (id, nombre, precio, marca) VALUES (NEW.id, NEW.nombre, NEW.precio, NEW.marca);
END;

--crear trigger al borrar un producto
CREATE TRIGGER borrar_producto AFTER DELETE ON productos FOR EACH ROW
BEGIN
    INSERT INTO productos_historial (id, nombre, precio, marca) VALUES (OLD.id, OLD.nombre, OLD.precio, OLD.marca);
END;

--crear un procedimiento que me muestre la tabla productos
CREATE PROCEDURE mostrar_productos()
BEGIN
SELECT * FROM productos;
END;

--crear un procedimiento que me muestre los productos de una marca
CREATE PROCEDURE mostrar_productos_marca(marca VARCHAR(50))
BEGIN
SELECT * FROM productos WHERE marca = marca;
END;

