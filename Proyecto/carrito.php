    <?php
    // Creamos una conexion para la cabecera
    include('cabeceracarrito.php');
    ?>
    <?php 
      //Compruebo que me llegan los datos
      if(isset($_REQUEST['idañadir'])){
        $pedido = $_REQUEST['idañadir'];

      session_start();

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
    ?>
    <?php
    // Creamos una conexion para la cabecera
    include('piepaginacarrito.php');
    ?>    
