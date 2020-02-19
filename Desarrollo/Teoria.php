<?php
/*

Això és un comentari llarg
i pot tenir més d'una línea.

*/

// Això és un comentari d'una sola línea.
# --------------------------------------

echo "<h1>Podem mostrar HTML fent un echo</h1>";



$nom = "Axixò és una variable";
$num = 29.1;

/* les variables són sensibles a majúscules i minúscules. No es permeten
espais per anomenar variables */

# Variables predefinides més comuns
# ---------------------------------
/*

$_GET : conté les dades que venen com a paràmetres de la url o a un form enviat per GET
$_POST : conté les dades enviades per un form per POST

*/
?>

/* -------------------------------------------------
      FUNCIONS AMB VARIABLES
----------------------------------------------------*/

Moltes vegades ens instaressa saber si una variable té valor o si està definida.

* <?php empty($variable) ?> tornarà vertader si la variable està definida però
  no té cap valor, per exemple la cadena buida o una matriu sense elements.

* <?php is_null($variable) ?> tornarà vertader si el contingut de la variable és
  el valor null.

* <?php is_null($variable) ?> tornarà vertader si la variable ha estat definida.

Per depurar hi ha dues funcions que ens permeten obtenir informaició sobre una
variable:

* <?php print_r($variable); ?>
* <?php var_dump($variable); ?>

/* -------------------------------------------------
      ARRAYS EN PHP
----------------------------------------------------*/

Els arrays es declaren amb la paraula clau array i poden ser posicionals o
associatius.

Posicionals:

<?php
$seven = 7;
$arrayname = array( "this is an element", 5, $seven );

echo $arrayname[0];   //prints: this is an element
echo $arrayname[1];   //prints: 5
echo $arrayname[2];   //prints: 7
?>

Associatius:

<?php
$first_array = array("key1" => "the first element", "key2" => "the second element");

$second_array = array(
    "key3" => "this is the first element of the second array",
    "key4" => "this is the second element of the second array",
);
echo $first_array['key1'];    //prints "the first element."
echo $second_array['key3'];   //prints "the first element of the second array"
echo $first_array['key2'];    //prints "the second element"
echo $second_array['key4'];   //prints "this is the second element of the second array"


in_array ( mixed $needle , array $haystack  ) //torna vertader si $needle està a
  // l' array $haystack

?>

<?php
  $a=array("Volvo"=>"XC90","BMW"=>"X5","Toyota"=>"Highlander");
  $keys = array_keys($a);
  if (in_array('Volvo', $keys)) {
    echo "tenc un volvo";
  }
?>

* -------------------------------------------------
      BUCLES
----------------------------------------------------*/

For Loop
--------

<?php
for (initialization; condition; increment)
{
   code to be executed;
}
?>

<?php
for ($i=0; $i <= 10; $i++)
{
   echo "The number is ".$i."<br />";
}
?>

Do While Loop
--------------

<?php
do
{
   code to be exected;
}
while (condition);
?>

Exemple:

<?php
$i = 0;
do {
   echo "The number is ".$i."<br/>";
   $i++;
}
while ($i <= 10);
?>

Foreach Loop
-------------

<?php
foreach (array as value)
{
   code to be executed;
}

foreach (array as key => value)
{
   code to be executed;
}

?>


<?php
$email = array('john.smith@example.com', 'alex@example.com');
foreach ($email as $value) {
   echo "Processing ".$value."<br />";
}
?>

<?php
$person = array('name' => 'Andrew', 'age' => 21, 'address' => '77, Lincoln st.');
foreach ($person as $key => $value) {
   echo $key." is ".$value."<br />";
}
?>

* -------------------------------------------------
      CONDICIONALS
----------------------------------------------------*/

<?php

if (condition) {
    // code to execute if condition is met
}


if (condition) {
    // code to execute if condition is met
} else {
    // code to execute if condition is not met
}


if (condition) {
    // code to execute if condition is met
} elseif (condition) {
    // code to execute if this condition is met
} else {
    // code to execute if none of the conditions are met
}

?>

/* --------------------------------------------
OPERACIONS AMB BASE DE DADES
*/

1. Cream la base de dades. Per exemple, test.db

<?php
$db = new SQLite3('test.db');

// Cream una taula (si no existeix)

$db->exec("CREATE TABLE IF NOT EXISTS cars(id INTEGER PRIMARY KEY, name TEXT, price INT)");


// Consultam els elements d'una taula

$res = $db->query('SELECT * FROM cars');

while ($row = $res->fetchArray()) {
    echo "{$row['id']} {$row['name']} {$row['price']} \n";
}

// Si fem servir paràmetres convé fer un preparae i bind.
// Suposem que hem obtingut els valors de $firstName i $lastName d'un POST


$db->exec("CREATE TABLE IF NOT EXISTS friends(id INTEGER PRIMARY KEY, firstname TEXT, lastname TEXT)");

$stm = $db->prepare("INSERT INTO friends(firstname, lastname) VALUES (?, ?)");
$stm->bindParam(1, $firstName);
$stm->bindParam(2, $lastName);
$stm->execute();

// Si hem de seleccionar amb paràmetres

$stm = $db->prepare("SELECT * FROM cars where nom=?");
$stm->bindParam(1, $nom);
$res = $stm->execute();

while ($row = $res->fetchArray()) {
    echo "{$row['id']} {$row['name']} {$row['price']} \n";
}

// Esborra tot el contingut d'una taula

$db->exec('DELETE FROM friends');

// pensau a posar sempre un WHERE, si va per paràmetres utilitzau el bindParam
// es pot fer exec o

?>
/* ------------------------------------------------------------
    EXEMPLE DE FORMULARI AMB DB i LLISTAT

* ------------------------------------------------------------/

<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8">
</head>
<body>
<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
ini_set("display_errors", 1);
?>
<h1>Lista de la compra</h1>
<?php
//Cream la db i les taules
$db = new Sqlite3('Compres.db');
$db->exec("CREATE TABLE IF NOT EXISTS Compres(id INTEGER PRIMARY KEY, productos TEXT not null, cantidad VARCHAR not null, unidad TEXT not null)");
?>
<?php
if(isset($_POST['submit'])){
  echo "<h1>POST</h1>";
// Fetching variables of the form which travels in URL
  $productos = $_POST['prod'];
  $cantidad = $_POST['cant'];
  $unidad = $_POST['und'];
  $stm = $db->prepare("INSERT INTO Compres(productos, cantidad, unidad) VALUES (?, ?, ?)");
  $stm->bindParam(1, $productos);
  $stm->bindParam(2, $cantidad);
  $stm->bindParam(3, $unidad);
  $stm->execute();
  header('Location: form.php');
}
else  {
    $stm = $db->prepare("SELECT * FROM Compres");
    $res = $stm->execute();

  echo '<br>';
    while ($row = $res->fetchArray()) {
     echo $row['cantidad'];
     echo '   ';
     echo $row['unidad'];
     echo '   ';
     echo $row['productos'];
     echo '   ';
     echo '<br>';
  }
}

?>
<hr>
<form action="form.php" method="post">
  Producto: <input type="num" name="prod"><br>
  Cantidad: <input type="num" name="cant"><br>
  unidad: <input type="num" name="und"><br>
  <input type="submit" name="submit">
</form>

</body>
</html>