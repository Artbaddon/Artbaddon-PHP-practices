<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles-secuenciales.css">
</head>

<body>
    <div class="ejercicios">
        <?php

        include 'funciones.php';

        escribirT("Ejercicio 8");
        $a = rand(1000, 1000000);
        $d = $a / 2000;
        $e = $a / 3000;
        texto("$a pesos colombianos equivalen a: $d usd y $e eur ");


        ?>

    </div>
</body>

</html>