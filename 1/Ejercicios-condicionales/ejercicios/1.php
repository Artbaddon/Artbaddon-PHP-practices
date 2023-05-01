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

        escribirT("Ejercicio 1");
        $a = rand(1, 100);
        $b = rand(1, 100);
        if ($a > $b) {
            texto("$a > $b");
        } elseif ($a < $b) {
            texto("$a < $b");
        } else {
            texto("los numeros son iguales");
        }


        ?>

    </div>
</body>

</html>