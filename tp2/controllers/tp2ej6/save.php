<?php
$targetDir = "/controllers/tp2ej6/uploads/";
$targetFile = $targetDir . basename($_FILES["personalImage"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

// algun error
if ($_FILES['personalImage']['error'] > 0) {
    $errors['loadErr'] = "Hubo algún error en la carga";
    $uploadOk = 0;
}

// tamaño permitido
if ($_FILES['personalImage']['size'] > 500000) {
    $errors['sizeErr'] = "El tamaño de la imagen excede el máximo permitdo";
    $uploadOk = 0;
}

// formatos
if ($imageFileType != "jpg" && $imageFileType != "png") {
    $errors['extensionErr'] = "Solo las extensiones .jpg y .png son aceptadas!";
    $uploadOk = 0;
}

//si llega a existir, renombrar el archivo (agregamos un numero, habria que modificar para conectarlo con el turno)
$actualName = pathinfo($targetFile, PATHINFO_FILENAME);
$originalName = $actualName;
$i = 1;
while (file_exists(SITE_ROOT . $targetFile)) {
    $targetFile = $targetDir . $actualName . $i . "." . $imageFileType;
    $i++;
}

if ($uploadOk == 0) {
    $errors['imageErr'] = "La imagen no fue cargada";
    // si todo ok se intenta cargar la imagen
} else {
    if (!(move_uploaded_file($_FILES["personalImage"]["tmp_name"],  SITE_ROOT . $targetFile))) {
        echo "<br> Hubo un error al cargar la imagen";
    } else {
      $input['pathImg'] = $targetFile;
    }
}
