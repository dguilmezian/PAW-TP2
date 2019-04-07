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
  <?php require 'views/header.view.php' ?>
  <main>
    <?php require 'index.content.view.php' ?>
    <?php require 'index.summary.view.php' ?>
  </main>

</body>
</html>
