<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio dados</title>
</head>
<body>
    <?php
        $puntos1 = 0;
        $puntos2 = 0;
        print '<h1>Jugador 1</h1>';  
        for ($i=0; $i < 5; $i++) { 
            $dado = rand(1,6);
            $puntos1 = $puntos1 + $dado;
            print "<img src='./img/$dado.jpg' width=100 height=100>\n";
        }
        print '<p>El jugador 1 ha obtenido ' . $puntos1 . ' puntos</p>';
        print '<h1>Jugador 2</h1>';
        for ($i=0; $i < 5; $i++) { 
            $dado = rand(1,6);
            $puntos2 = $puntos2 + $dado;
            print "<img src='./img/$dado.jpg' width=100 height=100>\n";
        }
        print '<p>El jugador 2 ha obtenido ' . $puntos2 . ' puntos</p>';
        print '<h2>Resultado:</h2>';
        if ($puntos1 > $puntos2) {
            print '<p>En conjunto, ha ganado el jugador 1</p>';
        }
        elseif ($puntos2 > $puntos1) {
            print '<p>En conjunto, ha ganado el jugador 2</p>';
        }
        else {
            print '<p>Ha habido un empate!</p>';
        }
    ?>
</body>
</html>