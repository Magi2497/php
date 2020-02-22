<html>
  <head>
    <title>ex15</title>
  </head>
  <body>
<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>

<form action="index.php" method="post">
 <p>Escriu una frase: <input type="text" name="nom" /></p>
 <p><input type="submit" name= "submit"/></p>
</form>
<?php
if(isset($_POST['submit'])){
  $nom= $_POST['nom']; 

  echo strrev($nom);
}
?>


  </body>
</html>