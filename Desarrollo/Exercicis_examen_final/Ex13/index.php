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
 <p><input type="submit" name= "submit"/></p>
</form>

<?php  

$dado1= rand(1 , 6); 
$dado2= rand(1 , 6); 

echo $dado1, $dado2 ;
echo '<br>'
if($dado1==$dado2){


echo ("igual");

}

?>


  </body>
</html>