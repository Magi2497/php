<html>
  <head>
    <title>Lista de la compra</title>
  </head>
  <body>
    <h1> Lista de la compra</h1>
    <?php
// Cream la bd i les taules
$db = new Sqlite3('llista.db');
$db->exec("CREATE TABLE IF NOT EXISTS llista(nombre  TEXT not null , unidad  TEXT not null, cantidad VARCHAR )");
?>

<div class="first">

<?php if(isset($_POST['submit'])){
  
  $nombre = $_POST['nombre'];
  $cantidad = $_POST['cantidad'];
  $unidad = $_POST['unidad'];
  $stm = $db->prepare("INSERT INTO llista(nombre, cantidad, unidad) VALUES (?, ?, ?)");
  $stm->bindParam(1, $nombre);
  $stm->bindParam(2, $cantidad);
  $stm->bindParam(1, $unidad);
  $stm->execute();
  header("Location: index.php");
  }
else {
  $stm = $db->prepare("SELECT * FROM llista");
  $res = $stm-> execute ();

  echo '<br>';
    while ($row = $res->fetchArray()) {
      echo $row['nombre'];
      echo ' ';
      echo $row['unidad'];
      echo ' ';
      echo $row['cantidad'];
      echo ' ';
      echo '<br>';
    }

}
  ?>
<form action="index.php" method="post">
Producto: <input type="text" name="nombre"><br>
Unidad: <input type="text" name="unidad"><br>
cantidad: <input type="num" name="cantidad"><br>
<input id='btn' name="submit" type='submit' value='Guardar'>
</form>




  </body>
</html>