<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Baja Empleados</title>
  </head>
  <body>
    <?php
    require_once 'metodos.php';
    $objMetodo = new metodos();
    if(!isset($_POST["Enviar"])){
    echo
        '
          <form action="#" METHOD="POST">
            <label for="delete">¿Seguro que quiere eliminar este elemento?</label></br>
            <input type="hidden" name="id" value="'.$_GET["i"].'">
            <input type="radio" name="delete" value="1">Si
            <input type="radio" name="delete" value="0" checked>No </br>
            <input type="submit" name="Enviar">
          </form>
        ';
      }else {
        if($_POST["delete"]==1){
          $consulta ="DELETE
                      FROM Empleados
                      WHERE IdEmpleado=".$_POST["id"].";";

          $objMetodo->realizarconsulta($consulta);
        }
          header("Location:index.php");
      }
     ?>
  </body>
</html>
