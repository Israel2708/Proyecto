    <?php
    // Creamos una conexion para la cabecera
    include('cabeceracarrito.php');
    ?>
    <?php 
      //Iniciamos la sesion
      session_start();
      //Compruebo que me llegan los datos
      if(isset($_REQUEST['idañadir'])){
        $pedido = $_REQUEST['idañadir'];

      // Declaramos un nuevo array vacio
       $pedidosLocal = array();

      // Si ya existe el array con numero en sesion lo recupero
      // para no sobreescribirlo
      if(isset( $_SESSION['productospedidos'])){
        $pedidosLocal = $_SESSION['productospedidos'];
      }

      // Añado el nuevo numero al final de la lista
      $pedidosLocal[] = $pedido;

      $_SESSION['productospedidos'] = $pedidosLocal;

    };
    var_dump($pedidosLocal);
    //Volvemos a la tienda
    echo "<p><a href='index.php'>Tienda</a></p>";
    //Conexion
    include('conexion.php');  
    //Bucle de ese array
    foreach ($pedidosLocal as $posicion=>$valor) {

    //Por cada ID contruyo un select where id=idproducto
    $sql= "select * from productos where id = $valor";

    //Recojo la informacion
    $result = $conn->query($sql);

    //La muestro en una linea
      echo "<table>";
          echo "<tr>";
            echo "<th>ID</td>"; 
            echo "<th>Nombre</td>"; 
            echo "<th>Precio</td>";
            echo "</tr>";
      while($row = $result->fetch_assoc()) {
          echo "<tr>";
            echo "<td>".$row['ID']."</td>";
            echo "<td>".$row['Nombre']."</td>";
            echo "<td>".$row['Precio']."</td>";
          echo "</tr>";
  
  }

}
    // Cerramos la tabla
        echo "</table>";
?>
   <?php
    // Creamos una conexion para la cabecera
    include('piepaginacarrito.php');
    ?>    
