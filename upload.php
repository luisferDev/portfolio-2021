<?php
require_once 'upload_library.php'; 

$mensaje = "";

foreach ($_FILES as $f) {

    // recupera la info del fichero
    $nombre = $f['name']; // nombre del fichero
    $extension = pathinfo($f['name'], PATHINFO_EXTENSION);

    // calcula la ruta y nombre del fichero
    $ruta = 'images/' . nombreUnico($extension, 'foto_');

    // --------------------------
    // INTENTA ABRIR
    // --------------------------
    try {
        // sube el fichero
        uploadFile($f, $ruta, 2000000, 'image/*');
        // muestra el mensaje de confirmación
        $mensaje .= "<p>Fichero <b>$nombre</b> subido correctamente en <b>$ruta</b></p>";
        // --------------------------
        // error
        // --------------------------
    } catch (Exception $e) {

        $mensaje .= "<p>ERROR en <b>$nombre</b>: " . $e->getMessage() . "</p>"; // error

        // creo fichero en carpeta | append
        $fichero = fopen('logs/errors.log', 'a');

        // mensaje del error detallando la foto
        $texto = "Error en $nombre:" . $e->getMessage();

        // fecha actual en hora PM
        $timing = date("d/m/Y h:i:s A");

        // detallo error con la fecha en PM y espacio
        fwrite($fichero, $texto . '' . $timing . "\n");

        // cierro el fichero
        fclose($fichero);
    }
}

$_ENV['mensaje'] = $mensaje;

           