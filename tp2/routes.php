<?php

$app->router->define([
    '' => 'controllers/index.php',
    'tp2ej1'=>'controllers/tp2ej1/tp2ej1.php',
    'tp2ej2'=>'controllers/tp2ej2/tp2ej2.php',
    'tp2ej3'=>'controllers/tp2ej3/tp2ej3.php',
    'tp2ej3_results'=>'views/tp2ej3/tp2ej3_results.php',
    // descomentar
    'tp2ej4'=>'controllers/tp2ej4/tp2ej4.php',
    // 'save'=>'controllers/tp2ej4/save.php',

    'tp2ej6'=>'controllers/tp2ej6/tp2ej6.php',
    'tp2ej6/turnos' =>'controllers/tp2ej6/listado.php',
    'tp2ej6/turno' =>'controllers/tp2ej6/show.php',
]);
