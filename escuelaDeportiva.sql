/*Abel Mansilla Felipe*/
CREATE DATABASE BDEmpleados;

CREATE TABLE Empleados(
  IdEmpleado smallint UNSIGNED PRIMARY KEY AUTO_INCREMENT,
  Nombre varchar (50) NOT NULL,
  Correo varchar(100) UNIQUE NULL,
  Telefono varchar(9) NOT NULL,
  DNI char(9) UNIQUE NOT NULL
);
