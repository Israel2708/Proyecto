<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tienda de futbol</title>
</head>
<body>
    <h1>Productos de futbol</h1>
    <p>
        <?php
            session_start();
            //Compruebo si existe el mensaje (en la primera carga no va a existir)
            if (isset($_SESSION['mensaje'])) {
                echo $_SESSION['mensaje']; //Muestro el mensaje
                unset($_SESSION['mensaje']); // Lo borro para que no siga apareciendo
            }
        ?>
    </p>
    <?php
    // Muestro el contenido de la BBDD

        // Crear una conexión
        include('conexion.php');

        // Construimos la consulta
         $sql = "select * from productos";
        // Ejecutamos y recogemos el resultado
        $result = $conn->query($sql);

        // Repetimos por cada registro (linea por linea) encontrado en la BBDD
        echo "<table border='1'>";
        echo "<tr>";
            echo "<th>ID</td>"; 
            echo "<th>Nombre</td>"; 
            echo "<th>Descripcion</td>"; 
            echo "<th>Stock</td>"; 
            echo "<th>Imagen</td>";
            echo "<th>Precio</td>";
            echo "<th>Borrar</td>";
            echo "<th>Actualizar</td>";  
        echo "</tr>";

            while($row = $result->fetch_assoc()) {
                // El nombre a buscar el $row coincide con el nombre de las columnas
                if($row['estado'] ==1){
                    echo "<tr>";
                    echo "<td>".$row['ID']."</td>"; 
                    echo "<td>".$row['Nombre']."</td>"; 
                    echo "<td>".$row['Descripcion']."</td>"; 
                    echo "<td>".$row['Stock']."</td>"; 
                    //echo "<td>".$row['Imagen']."</td>";
                    echo "<td>".$row['Precio']."</td>"; 
                    echo "<td><a href='borrar.php?idborrar=".$row['id']."'>Borrar</a></td>"; 
                    echo "<td><a href='update.php?idmodificar=".$row['id']."'>Actualizar</a></td>"; 
                    echo "</tr>";
                }
            }
        echo "</table>";
    //Hemos terminado de mostrar todas las lineas y cierro la conexion
    $conn->close();
    ?>
</body>
</html>