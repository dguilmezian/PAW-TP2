<?php
$main_title = "TP2 Ejercicio 1 y 2";

    $name = $email = $phone = $age = $shoeSize = $heigh = $birthDate = $hair = $dateDay = $hour = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
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
$main_title="TP 2 - EJ 1 y 2";
require 'views/tp2ej1/tp2ej1.view.php';
