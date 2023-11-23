<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['realizar_pedido'])) {
    // Obtén los datos del pedido desde carrito.php
    $total_pedido = isset($_POST['total_pedido']) ? $_POST['total_pedido'] : 0;

    // Accede a la información del usuario si es necesario
    $dias=rand(2,10);

    // Aquí puedes procesar los datos del pedido y actualizar tu base de datos
    
    // Muestra un mensaje de confirmación al usuario
    echo "<h2>¡Pedido realizado con éxito!</h2>";
    echo "<p>Detalles del pedido:</p>";
    echo "<p>Total del pedido: $total_pedido</p>";
    echo "<p> Su pedido le llegara en $dias dias";
    // Puedes mostrar más detalles del pedido según tus necesidades
    // ...

    // Puedes incluir un enlace de vuelta a la tienda u otra página
    echo "<p><a href='index.php'>Volver a la tienda</a></p>";
} else {
    // Si alguien intenta acceder directamente a esta página sin realizar un pedido, redirige a la tienda o realiza alguna acción adecuada
    header("Location: index.php");
    exit();
}


?>