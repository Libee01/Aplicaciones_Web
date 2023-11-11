<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1</title>
</head>
<body>
    <?php
        $alto = trim(strip_tags($_REQUEST['alto']));
        $ancho = trim(strip_tags($_REQUEST['ancho']));
        print "Alto: $alto <br>";
        print "Ancho: $ancho <br><br>";
        for ($i=0; $i < $alto; $i++) {
            for ($j=0; $j < $ancho; $j++) {
                print "* ";
            }
            print "<br>";
        }
    ?>
</body>
</html>