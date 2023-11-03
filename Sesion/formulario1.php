<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario 1</title>
</head>
<body>
    <h1>Adivina el nº aleatorio entre 1 y 100</h1>
    <p>¿Podras adivinar el numero?</p>
    <form  action="Ejercicio1.php" method="get">
        <label for="persona">Tu intento:</label>
        <input type="text" name="numero">
        <br>
        <br>
        Marca si quierse partida nueva
        <input type="checkbox" name="nueva"><br/>
        <br>
        <input type="submit">       
    </form>
    <?php 
  // Siempre inicio session antes de usarla
  session_start();
  // Compruebo que hay un mensaje antes de mostrarlo, y evito errores
  if(isset($_SESSION['mensaje'])){
      echo "<p>".$_SESSION['mensaje']."</p>";
      echo "<ul>";
      for($i=0; $i<count($_SESSION['numerosProbados']); $i++){
          echo "<li>".$_SESSION['numerosProbados'][$i]."</li>";
      }
      echo "</ul>";
  }
?>
</body>
</html>
