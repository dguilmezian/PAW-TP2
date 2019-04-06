<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulario</title>
</head>

<body>
    <h1>Formulario para Solicitud de Turno</h1>
    <form oninput="result.value=parseInt(heigh.value)" method="POST">
        <?php require 'views/forms/form.html' ?>
        <input type="reset" value="Limpiar">
        <input type="submit" value="Enviar">
    </form>

    <?php
    echo "<h2>Sus datos ingresados para el Turno :</h2>";
    echo $name;
    echo "<br>";

    echo $email;
    echo "<br>";

    echo $phone;
    echo "<br>";

    echo $age;
    echo "<br>";

    echo $shoeSize;
    echo "<br>";

    echo $heigh;
    echo "<br>";

    echo $birthDate;
    echo "<br>";

    echo $hair;
    echo "<br>";

    echo $dateDay;
    echo "<br>";

    echo $hour;
    echo "<br>";

    ?>
</body>

</html>