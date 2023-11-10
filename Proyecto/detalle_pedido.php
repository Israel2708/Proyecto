<?php
//Recojo en una variable el array de ID guarddo en session
$detalle_pedido = $_SESSION['productospedidos'];
//Bucle de ese array
foreach ($detalle_pedido as $posicion=>$valor) {


//Por cada ID contruyo un select where id=idproducto
$sql= "select * from productos where id = $valor";


}
//Recojo la informacion
$result = $conn->query($sql);

//La muestro en una linea
echo $row['ID'];
?>
