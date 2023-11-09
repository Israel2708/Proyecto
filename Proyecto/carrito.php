<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrito de la compra</title>
</head>
<body>
    <?php 
      session_start();
      echo "<p><a href='index.php'>Volver al inicio</a></p>";
      /*Script del carrito*/

      //Vaciar el carrito
      echo "<p><a href='vaciarcarrito.php'>Vaciar</a></p>";
    ?>
</body>
</html>