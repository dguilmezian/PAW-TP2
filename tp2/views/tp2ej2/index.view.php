<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta charset="utf-8" />
  <link href="<?= statics('main.css') ?>" rel="stylesheet" type="text/css">
  <title><?= $main_title ?></title>
</head>
<body>
  <main>
    <h1><?= $main_title ?></h1>
    <h2><?= $subtitle ?></h2>
    <?php
    if (isset($_POST["name"])) {
      require 'index.summary.view.php';
    } else {
      require 'index.content.view.php';
    }
    ?>
  </main>
  <?php require 'views/footer.view.php' ?>

</body>
</html>
