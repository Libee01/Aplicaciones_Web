<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 3</title>
</head>
<body>
    <?php
        $nombre = trim(strip_tags($_REQUEST['nombre']));
        $telefono = trim(strip_tags($_REQUEST['telefono']));
        $enseñanza = trim(strip_tags($_REQUEST['enseñanza']));
        $datos = $_REQUEST['datos'];
        if ($datos == "pantalla") {
            echo "El alumno " . $nombre . ", con teléfono " . $telefono . " está matriculado en " . $enseñanza;
        }
        elseif ($datos == "fichero") {
            $nombreArchivo = "datos.txt";
            $openfile = fopen($nombreArchivo, "w");
            fwrite($openfile, "El alumno " . $nombre . ", con teléfono " . $telefono . " está matriculado en " . $enseñanza);
            fclose($openfile);
            echo '<a href="mostrardatos.php">Mostrar archivo</a>';
        }
    ?>
</body>
</html>
