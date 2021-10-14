/*Abel Mansilla Felipe*/
CREATE DATABASE BDEmpleados;

CREATE TABLE Empleados(
  IdEmpleado smallint PRIMARY KEY AUTO_INCREMENT,
  Nombre varchar (50),
  Correo varchar(60),
  Telefono smallint,
  DNI char(8)
);
