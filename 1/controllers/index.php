<?php
  $page_title = 'TP N°2 - Ejercicio 1';
  $main_title = "Formulario para Solicitud de Turno";

  if ($app->request->method == "POST") {

    $name = $email = $phone = $age = $shoeSize = $heigh = $birthDate = $hair = $dateDay = $hour = "";

    //TODO: Validar inputs

    $name = checkData($_POST["name"]);
    $email = checkData($_POST["email"]);
    $phone = checkData($_POST["phone"]);
    $age = checkData($_POST["age"]);
    $shoeSize = checkData($_POST["shoeSize"]);
    $heigh = checkData($_POST["heigh"]);
    $birthDate = checkData($_POST["birthDate"]);
    $hair = checkData($_POST["hair"]);
    $dateDay = checkData($_POST["dateDay"]);
    $hour = checkData($_POST["hour"]);

  }

    function checkData($data) {

        $data = trim($data);

        $data = stripslashes($data);

        $data = htmlspecialchars($data);
        return $data;
     }


require 'views/index.view.php';
