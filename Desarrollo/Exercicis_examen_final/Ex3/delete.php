
<!DOCTYPE html>
<html>
<head>
<title>Mantenimient de marques</title>
<meta content="noindex, nofollow" name="robots">
<link href='css/redirect_form.css' rel='stylesheet' type='text/css'> <!--== Include CSS File Here ==-->
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

<h2>Segur que vols borrar</h2>
<?php
 $nom="";
 $uuid="";
 if (isset($_GET['id'])){
  $id = $_GET['id'];
  $stm = $db->prepare("SELECT * FROM llista where uuid=?");
  $stm->bindParam(1, $id);
  $res = $stm->execute();

  while ($row = $res->fetchArray()) {
     $nom = $row['nom'];
     $uuid = $row['uuid'];
  }
  echo "<p>{$nom}</p>";
  echo '<form action="delete.php" method="POST" >';
  echo "<input type='hidden' id='uuidId' name='uuid' value='{$uuid}'>";
  echo "<input id='btn' name='submit' type='submit' value='Borrar'>";
  echo "<H1><a href='index.php'>NO</a></H1>";
  echo "</form>";
}
if(isset($_POST['submit'])){
  $stm = $db->prepare("DELETE FROM llista where  uuid=?");
  $uuid=$_POST['uuid'];
  $stm->bindParam(1, $uuid);
  $stm->execute();
  header("Location: index.php");
}
?>

</body>
</html>
