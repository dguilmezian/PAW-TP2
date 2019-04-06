<?php
$main_title="TP 2 - EJ 4";
require 'views/header.view.php';
define ('SITE_ROOT', realpath(dirname(__FILE__)));
$targetDir = "/uploads/";
$targetFile = $targetDir . basename($_FILES["personalImage"]["name"]);
echo SITE_ROOT.$targetFile;
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($targetFile,PATHINFO_EXTENSION));

// algun error
if($_FILES['personalImage']['error'] > 0){
    echo '<br>Hubo algún error en la carga';
    $uploadOk = 0;
}else{
    echo '<br>No hay errores de carga';
}

// tamaño permitido
if($_FILES['personalImage']['size'] > 500000){
    echo '<br>El tamaño de la imagen excede el máximo permitdo';
    $uploadOk = 0;
}else{
    echo '<br>Tamaño correcto';
}

// que no exista
if(file_exists(SITE_ROOT.$targetFile)){
    echo '<br>Ya existe una imagen con ese nombre';
    $uploadOk = 0;
}else{
    echo '<br>No existe una imagen con ese nombre';
}

// formatos
if($imageFileType != "jpg" && $imageFileType != "png"  ) {
    echo "<br>Solo las extensiones .jpg y .png son aceptadas!";
    $uploadOk = 0;
}

if ($uploadOk == 0) {
    echo "<br>La imagen no fue cargada.";
// si todo ok se intenta cargar la imagen
} else {
    if (move_uploaded_file($_FILES["personalImage"]["tmp_name"],  SITE_ROOT.$targetFile)) {
        echo "<br> La imagen ". basename( $_FILES["personalImage"]["name"]). " fue guardada.";
    } else {
        echo "<br> Hubo un error al cargar la imagen";
    }
}
?>