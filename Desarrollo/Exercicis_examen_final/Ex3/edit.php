
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
}
?>
<div class="main">
<div>
  <p><a href="index.php">Llista dels alumnes</a></p>
</div>
<div class="first">
<h2> Alumnes </h2>
<form action="edit.php" id="#form" method="post" name="#form">
<label>Nom del alumnes :</label>
<input id="name" name="nom" placeholder='Nom de la Marca'
type='text' value="<?php echo $nom ?> ">
<input type="hidden" id="uuidId" name="uuid" value="<?php echo $uuid ?>">
<input id='btn' name="submit" type='submit' value='Guardar'>
<!---- Including PHP File Here ---->
<?php
include "include/redirect.php";
?>
</form>
</div>
</div>
</body>
</html>
