<!DOCTYPE html>
<!--
Este ejecicio muestra cómo podemos obtener un xmls simple de una web,
parsearlo como xml y utilizarlo en nuestra aplicación.

En el ejercicio nos conectamos con el servicio de dades obertes de les
illes balears para obtener los concesionarios de Alquiler de Cochbes.
-->

<?php
/* Activamos los flags para que nos muestre los errores.
Este código no debería ir en producción */
ini_set('display_errors', 1);
error_reporting(E_ALL);
ini_set("display_errors", 1);
?>

<html lang="es">
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
    <title>Col·legis professionals</title>
  </head>


  <?php
function pr($data)

{
    echo "<pre>";
    var_dump($data); 
    echo "</pre>";
}

if (!$xml = file_get_contents("http://api.geoiplookup.net/?query=")) {
    echo "No se ha podido cargar el archivo";
} else {
    $xml = new SimpleXMLElement($xml);
    $root = $xml->row;
    /* pr($root); */
}
?>
<body>
    <div class="container">
      <div class="row">
      <div class="col">
        <h2><?php echo "Cercador ip"; ?></h2>
     
      
<form action="ip.php" method="get">
    <p> ip: <input type="text" name="ip" /></p>
    <p><input type="submit" /></p>
</form>
     </div>
  
     <div>
     
     </div>
      </div>
</div>

</body>
</html>
