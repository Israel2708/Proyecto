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
    //Declaramos un array para los usuarios
    $usuariosguardados = array();
    //Declaramos un array para las contraseñas
    $contraseñasguardadas = array();
    //Si ya existe el array de los usuarios lo recupero para no sobreescribir
    if(isset($_SESSION['usuariosguardados']));
    //Si ya existe el array de la contraseñas lo recupero para no sobreescribir
    if(isset($_SESSION['contraseñasguardadas']));

    //Guardamos el usuario y contraseña en la lista
    $usuariosguardados[] = $usuario;
    $contraseñasguardadas[] = $contraseña;
    $_SESSION['usuariosguardados']= $usuariosguardados;
    $_SESSION['contraseñasguardadas']= $contraseñasguardadas;
    //Regresamos a la pagina de inicio de sesion
    header("Location: usuarios.php");
    ?>
</body>
</html>