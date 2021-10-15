/*Abel Mansilla Felipe*/
CREATE DATABASE BDEmpleados;

CREATE TABLE Empleados(
  IdEmpleado tinyint UNSIGNED PRIMARY KEY AUTO_INCREMENT,
  Nombre varchar (50) NOT NULL,
  Correo varchar(100) UNIQUE NULL,
  Telefono char (9) NOT NULL,
  DNI char(9) UNIQUE NOT NULL
);
