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
        $ID= $_REQUEST['ID'];
        $usuario = $_REQUEST['Nombre'];
        $contraseña = $_REQUEST['Contraseña'];

        // Conecto con la BBDD
        include('conexion.php');
        
        //Construyo SQL 
        $sql= "select * from usuarios where ID=>1";

        // Compruebo si tiene mas de una linea
        

        //Regresamos a la pagina de inicio de sesion
        header("Location: index.php");
        //Sino existe regresamos a la pagina de inicio de sesion

    }else{
        header("Location:usuarios.php");
    }


    ?>
</body>
</html>