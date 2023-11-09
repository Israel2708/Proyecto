<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Añadir al carrito de la compra</title>
</head>
<body>
<?php
    // Hago lo que sea para añadir en sesion
    $ID=$_REQUEST["a href='añadircarrito.php?idañdir=.$row['ID']."];
    session_start();
    $_SESSION['msg'] = "Añadido al carrito";
    //Declaramos el array
    $idguardados = array();
    //Redirigo de vuelta a la pagina de productos
    Header("Location: index.php");
?>
</body>
</html>