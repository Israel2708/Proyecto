<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio de Sesion Correcto</title>
</head>
<body>
    <?php 
    if (isset($_REQUEST['Nombre']) && isset($_REQUEST['Contraseña'])){
        //Creamos las variables para los usuarios y las contraseñas
        $usuario = $_REQUEST['Nombre'];
        $contraseña = $_REQUEST['Contraseña'];
        // Conecto con la BBDD
        include('conexion.php');
        //Construyo SQL 
        $sql= "select * from usuarios where nombre='$usuario'";
        //Ejecutamos la consulta
        $result= $conn->query($sql);
        // Compruebo si tiene mas de una linea
        if ($result->num_rows > 0) {
                
        //Regresamos a la pagina de inicio de sesion
        header("Location: index.php");
        //Sino existe regresamos a la pagina de inicio de sesion
        }    
          else 
        { 
        header("Location:usuarios.php");
        }
        }
    ?>
</body>
</html>