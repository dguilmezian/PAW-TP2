<?php
$page_title = 'TP N°2 - Ejercicio 6 y 7';
$main_title =  "<h1>Ejercicio 6</h1>
<h2><u>Listado de Turnos</u></h2>";

require 'models/Appointment.php';

$appointment = new Appointment();
$dates = $appointment->get();
$mapData = array(
  'Fecha del turno'  => 'dateDay',
  'Hora del turno'  => 'hour',
  'Paciente'  => 'name',
  'Telefono'  => 'phone',
  'Email'  => 'email',
);

require 'views/tp2ej6/dates/list.view.php';
