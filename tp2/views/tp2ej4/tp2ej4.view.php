<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="<?= statics('main.css') ?>" rel="stylesheet" type="text/css">
    <title>Formulario</title>
</head>
<body>

    <?php require 'views/header.view.php' ?>
    <h1>Formulario para Solicitud de Turno</h1>
    <form action="save" method="POST" enctype="multipart/form-data">
        <?php require 'views/forms/form-attachment.html' ?>
        <input type="reset" value="Limpiar">
        <input type="submit" name="submit" id="submit" value="Enviar">
    </form>


</body>

</html>
