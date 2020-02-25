<html>
  <head>
    <title>ex4</title>
  </head>
  <body>
<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>

<form action="index.php" method="post">
 <p>Escriu: <input type="text" name="nom" /></p>
 <p><input type="submit" name= "submit"/></p>
</form>


<?php 
if(isset($_POST['submit'])){
  $nom= $_POST['nom'];

  



}
?>

<?php 
$c = (5/9*($_POST['nom'])-32);
?>




<?php echo ($c);  ?><br>


  </body>
</html>

