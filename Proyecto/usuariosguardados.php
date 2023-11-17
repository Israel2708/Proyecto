<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio de Sesion Correcto</title>
</head>
<body>
    <?php 
    //Creamos las variables para los usuarios y las contraseñas
    $usuario = $_REQUEST['Nombre'];
    $contraseña = $_REQUEST['Contraseña'];

    // Conecto con la BBDD
 include('conexion.php');
    // Construyo un select where usuario and passwod
    $sql="SELECT * FROM usuarios WHERE nombre = "; 
    // Si me devuelve una fila todo ok

    // Si son 0 filas error

    //Regresamos a la pagina de inicio de sesion
    header("Location: usuarios.php");
    
    ?>
</body>
</html>