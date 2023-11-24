<?php
// Iniciar sesión al principio del archivo
session_start();

// Incluir el archivo de cabecera
include('cabeceraadmin.php');

// Verificar si el usuario está autenticado
if (isset($_SESSION['Nombre'])) {
    $admin = $_SESSION['Nombre'];

    // Validar si el usuario es administrador
    if ($admin == 'admin') {
        // Incluir el archivo de conexión a la base de datos
        include('conexion.php');

        // Construimos la consulta
        $sql = "SELECT * FROM productos";
        // Ejecutamos y recogemos el resultado
        $result = $conn->query($sql);
        // Repetimos por cada registro (línea por línea) encontrado en la BBDD
        echo "<table>";
        echo "<tr>";
        echo "<th>ID</th>"; 
        echo "<th>Nombre</th>"; 
        echo "<th>Descripcion</th>"; 
        echo "<th>Stock</th>"; 
        echo "<th>Precio</th>";
        echo "<th>Borrar</th>";
        echo "</tr>";

        while($row = $result->fetch_assoc()) {
            // El nombre a buscar el $row coincide con el nombre de las columnas
            $ID = $row['ID'];
            $imagen = "productos/${ID}.jpg" ;
            echo "<tr>";
            echo "<td>".$row['ID']."</td>"; 
            echo "<td>".$row['Nombre']."</td>"; 
            echo "<td>".$row['Descripcion']."</td>"; 
            echo "<td>".$row['Stock']."</td>"; 
            echo "<td>".$row['Precio']."</td>"; 
            echo "<td><a href='borrar.php?idborrar=".$row['ID']."'>Borrar</a></td>"; 
            echo "</tr>";
        }

        echo "</table>";

        // Enlace o botón para dirigir a la página de añadir productos
        echo "<p><a href='anadir.php'>Añadir Producto</a></p>";
        echo "<p><a href='index.php'>Vuelta a la tienda</a></p>";
        $conn->close();
    } else {
        // Si el usuario no es administrador, puedes redirigirlo o mostrar un mensaje de error
        echo "Acceso no autorizado. Por favor, inicia sesión como administrador.";
    }
} else {
    // Si no se proporciona el parámetro 'Nombre', puedes redirigir o mostrar un mensaje de error

    // Otra opción: Redirigir a la página de inicio de sesión
    // header("Location: usuarios.php");
    // exit();

    echo "Nombre de usuario no proporcionado.";
}

// Incluir el archivo del pie de página
include('piepaginaadministrador.php');
?>
