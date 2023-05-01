<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style-condicionales.css">
</head>

<body>
    <div class="ejercicios">
        <?php

        include 'funciones.php';

        escribirT("Ejercicio 3");
        $a = rand(-100, 100);
        $b = $a % 2;
        if ($b == 0) {
            texto("El numero $a es par");
        } else {
            texto("El numero $a es impar");
        }

        ?>

    </div>
</body>

</html>