<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Modificar Empleado</title>
  </head>
  <body>
    <?php
    require_once 'metodos.php';
    $objMetodo = new metodos();
    if(!isset($_POST["Enviar"])){
      $consulta = "SELECT*
                  FROM Empleados
                  WHERE IdEmpleado=".$_GET["i"].";";
      $objMetodo->realizarconsulta($consulta);
      $fila=$objMetodo->extraerfila();

      echo
          '
            <form action="#" method="POST">
              <input type="hidden" name="get" value="'.$_GET["i"].'">
              <input type="text" name="nombre" value="'.$fila["Nombre"].'" placeholder="Introduzca nombre"></br>
              <input type="email" name="correo" value="'.$fila["Correo"].'" placeholder = "Introduzca correo"></br>
              <input type="text" name="telefono" value="'.$fila["Telefono"].'" placeholder = "Introduzca telefono"></br>
              <input type="text" name="DNI" value="'.$fila["DNI"].'" placeholder = "Introduzca DNI"></br>
              <input type="submit" name="Enviar">
            </form>
          ';
        }else{
          if(!empty($_POST["nombre"] && $_POST["telefono"] && $_POST["DNI"])){
            if(empty($_POST["correo"])){
              $_POST["correo"] = 'null';
            }else {
              $_POST["correo"]= "'".$_POST["correo"]."'";
            }
            $consulta = "UPDATE Empleados
                          SET Nombre='".$_POST["nombre"]."', Correo =".$_POST["correo"].", Telefono=' ".$_POST["telefono"]."', DNI= '".$_POST["DNI"]."'
                          WHERE IdEmpleado = ".$_POST["get"].";
                          ";
            $objMetodo->realizarconsulta($consulta);
            echo 'Los datos se han modificado correctamente </br>';
            echo '<a href="index.php">Volver a pagina principal</a>';

          }else {
            echo 'Es obligarios rellenar todos los campos a excepcion del correo </br>';
            echo '<a href="modificarempleado.php?i='.$_POST["get"].'">Volver a modificar</a>';
          }
        }
     ?>
  </body>
</html>
