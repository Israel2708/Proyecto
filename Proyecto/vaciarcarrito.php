<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vaciar carrito de la compra</title>
</head>
<body>
<?php
    // Hago lo que sea para añadir en sesion
    session_start();
    
    unset($_SESSION['productospedidos']);
    //Redirigo de vuelta a la pagina del carrito
    Header("Location: carrito.php");
?>
</body>
</html>