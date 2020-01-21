<!DOCTYPE html>
<?php error_reporting(E_ALL);?>
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
    <style>
      .container {
        margin-top: 20px;
      }
      .card {
        margin-bottom:10px;
      }
      .jumbotron {
        margin-bottom: 1rem;
      }

      #topmenu {
        margin-bottom: 1rem;
      }

    </style>
    <!-- fi -->
    <title>Llista de preus</title>
  </head>

  <body>
  <?php include 'includes/data.php';?>
    <div class="container">
      <?php include 'includes/jumbotron.php'?>
      <?php include 'includes/menu.php';?>

      <div class="row">
      <table class="table">
      <thead>
        <tr>
          <th scope="col">Codi</th>
          <th scope="col">Preu</th>
          <th scope="col">Entrada</th>
          <th scope="col">Fitxa</th>
        </tr>
      </thead>
      <tbody>
        <?php

foreach ($preus as $cotxe) {
    echo '<td>', $cotxe->name, '</td>';
    echo '<td>', number_format(intval($cotxe->precio), 2, ',', '.'), '€ </td>';
    echo '<td>', $cotxe->entrada, '</td>';
    echo '<td><a href="ficha.php?code=', $cotxe['code'], '">Veure fitxa</a></td>';
}
?>
      </tbody>
      </table>
      </div>
      <?php include "includes/footer.php"?>
</div>
<?php include "media/base_js.php"?>
</body>
</html>
