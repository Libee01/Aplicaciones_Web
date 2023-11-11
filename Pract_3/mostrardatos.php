<?php
    $nombreArchivo = "datos.txt";
    $archivo = fopen($nombreArchivo, "r");
    while(!feof($archivo)) {
        $lectura = fgets($archivo);
        echo $lectura . "<br>";
    }
    fclose($archivo);
?>