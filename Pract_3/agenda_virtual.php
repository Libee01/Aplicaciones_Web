<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agenda Virtual</title>
</head>
<body>
    <?php
        $nombre = trim(strip_tags($_POST['nombre']));
        $trabajo = trim(strip_tags($_POST['trabajo']));
        $telefono = trim(strip_tags($_POST['telefono']));
        $direccion = trim(strip_tags($_POST['direccion']));
        $otras = trim(strip_tags($_POST['otras']));
        $archivo = 'contactos.txt';
        
        if (!file_exists($archivo)) {
            fopen($archivo, 'w');
        }
        
        $openfile = fopen($archivo, 'a');
        fwrite($openfile, "Contacto: $nombre $trabajo $telefono $direccion $otras" . PHP_EOL);
        fclose($openfile);
        $fd = fopen($archivo, 'r');
        $contenido = file_get_contents($archivo);
        echo "<pre>" . $contenido . "</pre>";
    ?>
</body>
</html>