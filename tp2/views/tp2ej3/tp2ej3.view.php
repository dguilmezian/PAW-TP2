<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="<?= statics('main.css') ?>" rel="stylesheet" type="text/css">
    <title><?= $main_title ?></title>
</head>

<body>
    <h1><?= $main_title ?></h1>
    <h2><?= $subtitle ?></h2>
    <section id="shift-form">
      <form action="tp2ej3_results" method="GET">
          <?php require 'views/forms/form.html' ?>
          <input type="reset" value="Limpiar">
          <input type="submit" value="Enviar">
      </form>
    </section>
    <?php require 'views/footer.view.php' ?>

</body>

</html>
