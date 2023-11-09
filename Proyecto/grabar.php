<?php


    // Crear una conexión
    $conn = new mysqli("localhost", "root", "", "proyectophp"); // (IP servidor BBDD, usuario, password, nombre base de datos)

    // Construyo la consulta
   $sql = "insert into tareas (ID,Nombre,Descripcion,Stock,Precio) 
   values ('$nombre', '$descripcion', '$stock',$precio)";

    // ejecuto la consulta
    $conn->query($sql);

    // Cierro la conexión
    $conn->close();
    
    // Redirigir al formulario y un mensaje para el usuario
    session_start();
    //$_SESSION['mensaje'] = 'Producto añadido correctamente';
    header('Location: index.php');
?>