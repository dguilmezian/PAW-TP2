<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta charset="utf-8" />
  <link href="<?= statics('main.css') ?>" rel="stylesheet" type="text/css">
  <title><?= $page_title ?></title>
</head>

<body>
  <?php require 'views/tp2ej6/header.view.php' ?>
  <main>
    <h1><?= $main_title ?></h1>
    <?php
      require 'turno.summary.view.php';
    ?>
  </main>

  <?php require 'views/footer.view.php' ?>

</body>

</html>
