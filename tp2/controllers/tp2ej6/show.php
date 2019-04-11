<?php
$page_title = 'TP N°2 - Ejercicio 6 y 7';

require 'models/Appointment.php';

$appointment = new Appointment();

$id = $app->request->data['id'];
$dates = $appointment->get($id);
$main_title = "Turno ID: " . $id;
$mapData = array(
  'Nombre'              => 'name',
  'Email'               => 'email',
  'Telefono'            => 'phone',
  'Edad'                => 'age',
  'Talle de calzado'    => 'shoeSize',
  'Altura'              => 'heigh',
  'Fecha de Nacimiento' => 'birthDate',
  'Color de pelo'       => 'hair',
  'Fecha del turno'     => 'dateDay',
  'Hora del Turno'      => 'hour'
);

$img = array(
  'Diagnóstico' => 'pathImg'
);

require 'views/tp2ej6/dates/turno.view.php';
