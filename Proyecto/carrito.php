<?php

    session_start();
    include('cabeceracarrito.php');
    
    // Acción: Agregar producto al carrito
    if (isset($_REQUEST['idañadir'])) {
        $pedido = $_REQUEST['idañadir'];

        $pedidosLocal = isset($_SESSION['productospedidos']) ? $_SESSION['productospedidos'] : array();

        // Verificar si el producto ya está en la lista
        //if (!in_array($pedido, $pedidosLocal)) {
            // Añadir el nuevo número al final de la lista
            $pedidosLocal[] = $pedido;
        }

        $_SESSION['productospedidos'] = $pedidosLocal;
    //}

    // Acción: Borrar carrito completo
    if (isset($_REQUEST['borrar_carrito'])) {
        // Borrar todos los elementos del array
        unset($_SESSION['productospedidos']);
    }

//    var_dump($pedidosLocal);

    include('conexion.php');
// Creamos la variable total 
    $total= 0;
   if (isset($pedidosLocal)) {
    foreach ($pedidosLocal as $valor) {
        $sql = "SELECT * FROM productos WHERE id = $valor";
        $result = $conn->query($sql);
        
        echo "<table>";
        echo "<tr>";
        echo "<th>ID</th>";
        echo "<th>Nombre</th>";
        echo "<th>Precio</th>";
        echo "</tr>";

        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row['ID'] . "</td>";
            echo "<td>" . $row['Nombre'] . "</td>";
            echo "<td>" . $row['Precio'] . "</td>";
            echo "</tr>";
            //Sumamos el precio al total
            $total +=$row['Precio'];
           }

        echo "</table>";
    
        
    }
    //Mensaje del precio total
    echo "<p> El precio total del pedido es $total";
    //Mensaje que aparece unicamente si hay pedido
    echo "<p>¿Pedimos sus articulos?</p>";
    echo "<form method='post' action='pedidos.php'>";
    echo "<input type='hidden' name='total_pedido' value='$total'>";
    echo "<button type='submit' name='realizar_pedido'>Realizar Pedido</button>";
    echo "</form>";
    include('piepaginacarrito.php');
    $conn->close();
   } else {
        echo "No hay ningun pedido, esperamos que nos hagas un pedido 😊";
   }
    

    // Enlace para borrar el carrito
    echo "<p><a href='carrito.php?borrar_carrito=1'>Borrar Carrito</a></p>";

    echo "<p><a href='index.php'>Tienda</a></p>";

    
?>
