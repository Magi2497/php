
<!DOCTYPE html>
<html>
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />

    <!-- Bootstrap CSS -->
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
      integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh"
      crossorigin="anonymous"
    />
    <!-- El teu css -->
    <style></style>
    <!-- fi -->
    <title>Llistat de marquest</title>
  </head>
<body>
<?php
/* Activamos los flags para que nos muestre los errores.
Este código no debería ir en producción */
ini_set('display_errors', 1);
error_reporting(E_ALL);
ini_set("display_errors", 1);
?>

<?php
include "include/db.php";
?>
 <div class="container">
      <div class="row">
        <div class="col">
<h2>Llistat de marques</h2>
<h3><a href="index.php">NOVA</a></h3>
<table>
<tr>
<th>Nom</th>
</tr>
<?php
/* Recuperam els registres */
$res = $db->query('SELECT * FROM marca');
while ($row = $res->fetchArray()) {
    echo "<tr><td>{$row['nom']}</td>";
    echo "<td><a href='edit.php?id={$row['uuid']}'>Editar</a></td>";
    echo "<td><a href='delete.php?id={$row['uuid']}'>Borrar</a></td>";
    echo " </tr>";
}
?>
</table>
<div><a href="edit.php"><span id="btn">Nou</span></a></div>
</div>
</div>
</div>
</body>
</html>
