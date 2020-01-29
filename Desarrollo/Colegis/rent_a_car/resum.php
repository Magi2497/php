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
    <title>Rent A Car</title>
  </head>


  <?php
function pr($data)
/* Esta función nos permite visualizar fácilmente el contenido de una
imprimiéndola en pantalla
 */
{
    echo "<pre>";
    var_dump($data); // or var_dump($data);
    echo "</pre>";
}

if (!$xml = file_get_contents("http://catalegdades.caib.cat/api/views/pd6s-hqjf/rows.xml?accessType=DOWNLOAD.")) {
    echo "No se ha podido cargar el archivo";
} else {
    /*
    Carregam l'arxiu, el parsejam i cream un nou arrai indexat amb els noms
    de cada localitat. Fem servir el valor per guardar el nombre de vegades
    que apareix cada municipi.

    Fixau-uvos en com comprovam si ja s'ha assignat l'element a l'array.
     */
    $xml = new SimpleXMLElement($xml);
    $root = $xml->row;
    $funcio = array();
    /* pr($root); */
    foreach ($root->row as $item) {
        $key = (String) $item->funcio;
        if (array_key_exists($key, $funcio)) {
            $funcio[$key] += 1;
        } else {
            $funcio[$key] = 1;
        }

    }
    /* ordenam l'array */
    ksort($funcio);
}
?>
  <body>
    <div class="container">
      <div class="row">
      <div class="col">
        <h2><?php echo "Centre sanitari"; ?></h2>
       
      </div>
     <table class="table">
     <thead>
       <tr>
         <th scope="col">Municipi</th>
         <th scope="col">Num</th>
       </tr>
     </thead>
     <tbody>
       <?php
foreach ($funcio as $funcio => $num) {
    echo '<tr>';
    echo '<td>', $funcio, '</td>';
    echo '<td>', $num, '</td>';
    echo '</tr>';
}
?> 
<a href="index.php">Centres</a>
     </tbody>
     </table>
     
      </div>
</div>
</body>
</html>
