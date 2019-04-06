<?php
$page_title = 'TP N°2 - Ejercicio 1';
$main_title = "Formulario para Solicitud de Turno";

if ($app->request->method == "POST") {

  $name = $email = $phone = $age = $shoeSize = $heigh = $birthDate = $hair = $dateDay = $hour = "";
  $errors = array();

  $input = $app->request->data;

  $name = checkData($input["name"]);
  //Valido si el nombre contiene solo letras
  if (!preg_match("/^[A-Za-z\\- \']+$/",$name)) {
    $errors['nameErr'] = "Solo letras está permitido en el campo nombre";
  }
  //Valido si es un mail valido con la funcion de PHP
  $email = checkData($input["email"]);
  if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors['emailErr'] = "Formato invalido para un email";
  }

  $phone = checkData($input["phone"]);
  $age = checkData($input["age"]);
  if (!(is_numeric($age))) {
    $errors['ageErr'] = 'Formato inválido para el campo Edad.';
  }
  $shoeSize = checkData($input["shoeSize"]);
  //Valido si el numero de calzado esta entre el rango dado (20 - 45)
  if ((!(20 <= $shoeSize && $shoeSize <= 45)) && (!(is_numeric($shoeSize))))  {
    $errors['shoesError'] = "Número de calzado inválido";
  }

  $heigh = checkData($input["heigh"]);
  $birthDate = checkData($input["birthDate"]);
  $hair = checkData($input["hair"]);

  $dateDay = checkData($input["dateDay"]);
  //Valido si saco turno para luego de la fecha de hoy
  $dateExploded = explode("-", $dateDay);
  $day = $dateExploded[2];
  $month = $dateExploded[1];
  $year = $dateExploded[0];
  if(!checkdate($month, $day, $year)){
      $errors['dateError'] = 'Fecha de turno inválida';
  } else {
    $currentDateTime = strtotime(date('d-m-Y'));
    $dateDay = strtotime($dateDay);
    if ($currentDateTime < $dateDay) {
      $errors['dateError'] = 'La fecha del turno que está pidiendo ya pasó. Por favor pida otra fecha.';
    }

  }

  $hour = checkData($input["hour"]);

}

  function checkData($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);

    return $data;
   }
require 'views/tp2ej1/index.view.php';
