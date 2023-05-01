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
        <h2>Ejercicio 13</h2>
        <?php

        include 'funciones.php';

        escribirT("Solucion: ");
        $n = 5;

        for ($i = 0; $i < 10; $i++) {

            texto("$n * $i = " . $n * $i);
        }



        ?>

    </div>
</body>

</html>