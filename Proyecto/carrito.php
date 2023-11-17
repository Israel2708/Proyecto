<?php
    session_start();
    include('cabeceracarrito.php');

    // Acción: Agregar producto al carrito
    if (isset($_REQUEST['idañadir'])) {
        $pedido = $_REQUEST['idañadir'];

        $pedidosLocal = isset($_SESSION['productospedidos']) ? $_SESSION['productospedidos'] : array();

        // Verificar si el producto ya está en la lista
        if (!in_array($pedido, $pedidosLocal)) {
            // Añadir el nuevo número al final de la lista
            $pedidosLocal[] = $pedido;
        }

        $_SESSION['productospedidos'] = $pedidosLocal;
    }

    // Acción: Borrar carrito completo
    if (isset($_REQUEST['borrar_carrito'])) {
        // Borrar todos los elementos del array
        unset($_SESSION['productospedidos']);
    }

//    var_dump($pedidosLocal);

    include('conexion.php');

    foreach ($pedidosLocal as $valor) {
        $sql = "SELECT * FROM productos WHERE id = $valor";
        $result = $conn->query($sql);

        echo "<table>";
        echo "<tr>";
        echo "<th>ID</th>";
        echo "<th>Nombre</th>";
        echo "<th>Precio</th>";
        echo "<th>Total</th>";
        echo "</tr>";

        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row['ID'] . "</td>";
            echo "<td>" . $row['Nombre'] . "</td>";
            echo "<td>" . $row['Precio'] . "</td>";
            //echo "<td>" /*Precio total*/"</td>";
            echo "</tr>";
        }

        echo "</table>";
    }

    $conn->close();

    // Enlace para borrar el carrito
    echo "<p><a href='carrito.php?borrar_carrito=1'>Borrar Carrito</a></p>";

    echo "<p><a href='index.php'>Tienda</a></p>";

    include('piepaginacarrito.php');
?>
