<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles-ciclicos.css">
</head>

<body>
    <div class="ejercicios">
        <h2>Ejercicio 5</h2>
        <div class="form">
            <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
                <label for="num1">
                    <h2>Ingrese el numero hasta el cual quiera la sumatoria</h2>
                </label>
                <input type="text" name="num1" id="num1">

                <input type="submit" value="ENVIAR" class="enviar">
            </form>
        </div>
        <?php

        include 'funciones.php';

        escribirT("Solucion");

        if ($_SERVER['REQUEST_METHOD'] == "POST") {

            $a = $_POST['num1'];



            texto("Sumatoria numeros hasta: $a");

            if (empty($a)) {
                texto("Inserte valores correctos");
            } else {
                $i = 0;
                $sum = 0;
                while ($i <= $a) {

                    $sum = $sum + $i;
                    $i++;
                    texto("$sum");
                }
            }
        }
        ?>


    </div>
</body>

</html>