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
        <h2>Ejercicio 9</h2>
        <div class="form">
            <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
                <label for="num1">
                    <h2>Ingrese un numero para saber si es multiplo de 3,2 o ambos</h2>
                </label>
                <input type="text" name="num1" id="num1">

                <input type="submit" value="ENVIAR" class="enviar">
            </form>
            <?php

            include 'funciones.php';

            if ($_SERVER['REQUEST_METHOD'] == "POST") {

                $a = $_POST['num1'];

                $b = $a % 2;
                $c = $a % 3;

                if (empty($a)) {
                    texto("Inserte valores correctos");
                } else {
                    if ($b == 0 && $c == 0) {
                        texto("El numero es multiplo de 2 y 3");
                    } elseif ($b == 0) {
                        texto("el numero es multiplo de 2 pero no de 3");
                    } elseif ($c == 0) {
                        texto("el numero es multiplo de 3 pero no de 2");
                    } else {
                        texto("EL numero no es multiplo  de 2 ni 3");
                    }
                }
            }



            ?>

        </div>
</body>

</html>