--1) mostrar los clientes de una provincia especifica
SELECT * FROM clientes WHERE provincia = 'Santa Cruz de Tenerife';

--2) mostrar las provincias donde tengo clientes
SELECT DISTINCT provincia FROM clientes;

--3) mostrar las facturas de un cliente
SELECT * FROM facturas WHERE Id_cliente = 1;

--4) mostrar los proctudos que compro “Construcciones López S.A."
SELECT codigo_producto FROM detalles_factura WHERE Id_cliente = 4;

--5)mostrar la fecha de la ultima compra realizada en donde la poblacion es Lucena
SELECT * FROM facturas INNER JOIN clientes ON facturas.Id_cliente = clientes.Id HAVING poblacion LIKE "Lucena" ORDER BY Fecha LIMIT 1;

--6) mostrar el descuento promedio aplicado a “Construcciones el Derribo, S.A:”
SELECT AVG(descuento) FROM facturas INNER JOIN clientes ON facturas.Id_cliente = clientes.Id AND clientes.nombre = "Construcciones el Derribo, S.A:";

