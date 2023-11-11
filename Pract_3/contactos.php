<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buscar Contactos</title>
</head>
<body>
    <?php
        $nombreBuscado = $_POST['nombre'];
        $archivo = 'contactos.txt';
        $openfile = fopen($archivo, 'r');
        $coincidencias = false;
        while (!feof($openfile)) {
            $linea = fgets($openfile);
            if (strpos($linea, "Contacto: $nombreBuscado") !==false) {
                echo "Contacto encontrado: $linea";
                $coincidencias = true;
            }
        }
        fclose($openfile);
        if (!$coincidencias) {
            echo "No se encontró ningún contacto para el nombre $nombreBuscado";
        }
    ?>
</body>
</html>