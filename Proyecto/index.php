<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/jpg" href="CSS/favicon.png"/>
    <link rel="stylesheet" type="text/css" href="CSS/estilos.css">
    <title>Tienda de futbol</title>
</head>
<body>
    
</body>
</html>
<?php
// Creamos una conexion para la cabecera
include('cabecera.php');
?>
    
        <?php
            session_start();
            //Compruebo si existe el mensaje (en la primera carga no va a existir)
            if (isset($_SESSION['mensaje'])) {
                echo $_SESSION['mensaje']; //Muestro el mensaje
                unset($_SESSION['mensaje']); // Lo borro para que no siga apareciendo
            }
        ?>
    
    <?php
    // Muestro el contenido de la BBDD

        // Crear una conexión
        include('conexion.php');        
         // Construimos la consulta
         $sql = "select * from productos";
        // Ejecutamos y recogemos el resultado
        $result = $conn->query($sql);
        //Introducimos el enlace para que los usuarios inicien sesion 
        echo "<p><a href='usuarios.php'>Iniciar Sesion 📋</a></p>";
        //Introducimos el enlace para acceder al carrito de la compra
        echo "<p><a href='carrito.php'>Carrito🛒</a></p>";
        // Repetimos por cada registro (linea por linea) encontrado en la BBDD
        echo "<table>";
        echo "<tr>";
            echo "<th>ID</td>"; 
            echo "<th>Nombre</td>"; 
            echo "<th>Descripcion</td>"; 
            echo "<th>Stock</td>"; 
            echo "<th>Imagen</td>";
            echo "<th>Precio</td>";
            echo "<th>Comprar</td>";
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
                  echo "<td><img src='".$imagen."' alt='Imagen de producto'></td>";
                    echo "<td>".$row['Precio']."</td>"; 
                    echo "<td><a href='carrito.php?idañadir=";
                    echo $row['ID'];
                    echo "'>Añadir</a></td>";
                  //echo "<td><a href='borrar.php?idborrar=".$row['ID']."'>Borrar</a></td>"; 
                  //echo "<td><a href='update.php?idmodificar=".$row['ID']."'>Actualizar</a></td>"; 
                    echo "</tr>";
                
            }
        echo "</table>";
    //Hemos terminado de mostrar todas las lineas y cierro la conexion
    $conn->close();
    ?>
    <?php
    // Creamos una conexion para el pie de pagina
    include('piepagina.php');
    ?>
