<html>
  <head>
    <title>Lista de la compra</title>
  </head>
  <body>
<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>

<form action="index.php" method="post">
 <p>Escriu el teu nom: <input type="text" name="nom" /></p>
 <p>Escriu el teu cognom: <input type="text" name="cognom" /></p>
 <p><input type="submit" name= "submit"/></p>
</form>
<?php
if(isset($_POST['submit'])){
  $nom= $_POST['nom'];
  $cognom= $_POST['cognom'];
  $str= $nom." ".$cognom; 
  $str=  strtoupper($str);
  echo $str;
}
?>


  </body>
</html>

