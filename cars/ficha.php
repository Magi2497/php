<!DOCTYPE html>
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
      .row {
        padding-top: 2em;
      }
      h2 {
        font-size: medium;
        font-family: 'sans-serif';
      }
      .blue {
        font-weight: 700;
        color: #0089cd;
        font-family: 'sans-serif';
      }
      .header {
        color: #10314c;

        text-transform: uppercase;
        font-size: small;
      }
      .btn {
        border-radius: 100px;
        background-color: #0089cd;
        color: aliceblue;
        white-space: nowrap;
        font-weight: 700;
        text-align: center;
      }
      img {
        width: 300px;
      }
      .texto {
        margin-left: 20px;
      }
    </style>
    <!-- fi -->
    <title>Descubre el Duster</title>
  </head>
  <body>
    <?php include 'includes/data.php';?>
    <div class="container">
      <?php include 'includes/jumbotron.php'?>
      <?php include 'includes/menu.php';?>

      <section class="row">
        <div class="col-3 lateral">
          <p>
            <img src="<?php echo $car['url'] ?>" alt="dacia" />
          </p>
        </div>
        <div class="texto col-6">
          <p class="header"><?php echo $car['header'] ?></p>
          <h2><?php echo $car['purpose'] ?></h2>
          <p class="small">
            <?php echo $car['description'] ?>
          </p>
          <p>
            <button class="btn">Ver la galería</button>
          </p>
        </div>
      </section>
      <?php include "includes/footer.php"?>
    </div>
    <?php include "media/base_js.php"?>
  </body>
</html>
