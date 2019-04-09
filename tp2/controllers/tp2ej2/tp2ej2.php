<?php
$page_title = 'TP N°2 - Ejercicio 2';
$main_title = "Formulario para Solicitud de Turno";

if ($app->request->method == "POST") {

  $name = $email = $phone = $age = $shoeSize = $heigh = $birthDate = $hair = $dateDay = $hour = "";
  $errors = $info = array();

  $input = $app->request->data;

  $info['Nombre'] = checkData($input["name"]);
  //Valido si el nombre contiene solo letras
  if (!preg_match("/^[A-Za-z\\- \']+$/",$info['Nombre'])) {
    $errors['nameErr'] = "Solo letras está permitido en el campo nombre";
  }
  //Valido si es un mail valido con la funcion de PHP
  $info['Email'] = checkData($input["email"]);
  if (!filter_var($info['Email'], FILTER_VALIDATE_EMAIL)) {
    $errors['emailErr'] = "Formato invalido para un email";
  }

  $info['Telefono'] = checkData($input["phone"]);
  $info['Edad'] = checkData($input["age"]);
  if (!(is_numeric($info['Edad']))) {
    $errors['ageErr'] = 'Formato inválido para el campo Edad.';
  }
  $info['Numero de calzado'] = checkData($input["shoeSize"]);
  //Valido si el numero de calzado esta entre el rango dado (20 - 45)
  if ((!(20 <= $info['Numero de calzado'] && $info['Numero de calzado'] <= 45)) && (!(is_numeric($info['Numero de calzado']))))  {
    $errors['shoesError'] = "Número de calzado inválido";
  }

  $info['Altura'] = checkData($input["heigh"]);
  $info['Fecha de nacimiento'] = checkData($input["birthDate"]);
  $info['Color de pelo'] = checkData($input["hair"]);

  $dateDay = checkData($input["dateDay"]);
  //Valido si saco turno para luego de la fecha de hoy
  $dateExploded = explode("-", $dateDay);
  $day = $dateExploded[2];
  $month = $dateExploded[1];
  $year = $dateExploded[0];
  if(!checkdate($month, $day, $year)){
      $errors['dateError'] = 'Fecha de turno inválida';
  } else {
    $currentDateTime = strtotime("now");
    $dateDayTime = strtotime($dateDay);

    if ($currentDateTime > $dateDayTime) {
      $errors['dateError'] = 'La fecha del turno que está pidiendo ya pasó. Por favor pida otra fecha.';
    } else {
      $info['Fecha del turno'] = $dateDay;
    }
  }

  $info['Hora del turno'] = checkData($input["hour"]);

}

//Lamo a la vista
require 'views/tp2ej2/index.view.php';
