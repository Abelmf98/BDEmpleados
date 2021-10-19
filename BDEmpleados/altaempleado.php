<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Alta</title>
  </head>
  <body>
    <?php
    require_once 'metodos.php';
    $objMetodo = new metodos();
    if(!isset($_POST["Enviar"])){

      echo
          '
            <form action="#" method="POST">
              <input type="text" name="nombre" placeholder="Introduzca nombre"></br>
              <input type="email" name="correo" placeholder = "Introduzca correo"></br>
              <input type="text" name="telefono" placeholder = "Introduzca telefono"></br>
              <input type="text" name="DNI" placeholder = "Introduzca DNI"></br>
              <input type="submit" name="Enviar">
            </form>
          ';
        }else {
          if(!empty($_POST["nombre"] && $_POST["telefono"] && $_POST["DNI"])){
            if(empty($_POST["correo"])){
              $_POST["correo"] = 'null';
            }else {
              $_POST["correo"]= "'".$_POST["correo"]."'";
            }
            $consulta = "INSERT INTO Empleados (Nombre, Correo, Telefono, DNI) VALUES ('".$_POST["nombre"]."',".$_POST["correo"].", '".$_POST["telefono"]."', '".$_POST["DNI"]."'); ";
            $objMetodo->realizarconsulta($consulta);
            if($objMetodo->comprobar()>0){
              echo 'Se ha añadido correctamente el empleado '.$_POST["nombre"].'</br>';
            }else {
              echo 'Se ha producido un error';
            }
            // echo $_POST["nombre"].'</br>';
            // echo $_POST["telefono"].'</br>';
            // echo $_POST["DNI"].'</br>';
            // echo $_POST["correo"];
            echo '<a href="altaempleado.php">Volver a Alta</a></br>';
            echo '<a href="index.php">Volver a Pagina principal</a>';
          }else {
            echo 'Es obligatorio rellenar los campos a excepción del correo';
            echo '<a href="altaempleado.php">Volver a Alta</a>';
          }
        }
      ?>
  </body>
</html>
