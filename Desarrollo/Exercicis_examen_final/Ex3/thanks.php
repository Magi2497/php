<!DOCTYPE html>
<!--
  Aquest codi té un error de seguretat
  això no s'ha de fer així, ja que pot comprometre
  la seguretat de l'aplicació.
  Es posa per mostrar db, parametres i redirect
  -->
<html>
<head>
<title>Redirect Form To a Particular Page On Submit - Demo Preview</title>
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
<div class="main">
<div class="first">
<h2>Gràcies</h2>
<?php
include "include/db.php";
?>

<?php
if(isset($_GET['id'])){
  $id = $_GET['id'];
  $stm = $db->prepare("SELECT * FROM llista where uuid=?");
  $stm->bindParam(1, $id);
  $res = $stm->execute();

  while ($row = $res->fetchArray()) {
      echo "<p> {$row['nom']}</p>";
      echo "<p><a href='index.php?id=".$row['uuid']."'>Editar</a></p>";
  }
}
?>
<div><a href="index.php">Anar al Llistat</a></div>
</div>

</div>Nou
</body>
</html>
