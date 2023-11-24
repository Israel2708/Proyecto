<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Añadir Producto</title>
</head>
<body>
    <?php 
    session_start(); // Iniciar la sesión al principio del archivo

    // Verificar si el usuario está autenticado como administrador
    if (isset($_SESSION['Nombre']) && $_SESSION['Nombre'] == 'admin') {
        // Incluir el archivo de conexión a la base de datos
        include('conexion.php');

        // Verificar si se ha enviado el formulario de añadir
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Recoger los datos del formulario
            $nombre = $_POST['nombre'];
            $descripcion = $_POST['descripcion'];
            $stock = $_POST['stock'];
            $precio = $_POST['precio'];

            // Insertar el nuevo producto en la base de datos
            $sql = "INSERT INTO productos (Nombre, Descripcion, Stock, Precio) VALUES ('$nombre', '$descripcion', $stock, $precio)";
            
            if ($conn->query($sql) === TRUE) {
                echo "Producto añadido correctamente.";
            } else {
                echo "Error al añadir el producto: " . $conn->error;
            }
        }
        ?>

        <h2>Añadir Producto</h2>
        <form action="" method="post">
            <label for="nombre">Nombre:</label>
            <input type="text" name="nombre" required><br>

            <label for="descripcion">Descripción:</label>
            <textarea name="descripcion" required></textarea><br>

            <label for="stock">Stock:</label>
            <input type="number" name="stock" required><br>

            <label for="precio">Precio:</label>
            <input type="number" name="precio" required><br>

            <input type="submit" value="Añadir Producto">
        </form>

        <?php
        // Cerrar la conexión a la base de datos
        $conn->close();
    } else {
        // Si el usuario no es administrador, mostrar un mensaje de error
        echo "Acceso no autorizado. Por favor, inicia sesión como administrador.";
    }
    ?>
</body>
</html>
