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
 <p>Escriu: <input type="num" name="num1" /></p>
 <p>Escriu: <input type="num" name="num2" /></p>
 <p><input type="submit" name= "submit"/></p>
</form>


<?php 
if(isset($_POST['submit'])){
  $num1= $_POST['num1'];
  $num2= $_POST['num2'];
}
?>
<?php 
if($num1 < $num2){
    echo  $num2;
    echo '<br>'; 
    echo  $num1;
}

else{
    echo  $num1;
    echo '<br>'; 
    echo  $num2; 

}
 





?>

 



  </body>
</html>

