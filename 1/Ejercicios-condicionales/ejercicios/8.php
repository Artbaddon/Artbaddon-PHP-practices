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
        <h2>Ejercicio 8</h2>
        <div class="form">
            <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
                <label for="num1">
                    <h2>Ingrese las horas trabajadas</h2>
                </label>
                <input type="text" name="num1" id="num1">
                <input type="submit" value="ENVIAR" class="enviar">
            </form>
        </div>
        <?php

        include 'funciones.php';


        escribirT("Solucion: ");

        if ($_SERVER['REQUEST_METHOD'] == "POST") {

            $a = $_POST['num1'];

            $b = $a % 2;


            if (empty($a)) {
                texto("Inserte valores correctos");
            } else {
                if ($a > 40) {
                    $hE = $a - 40;
                    $hET = $hE * 20;
                    $hT = 40 * 16;
                    $totalH = $hET + $hT;
                    texto("Usted ha trabajado $a horas y $hE de ellas son extras por lo tanto su pago es de: $totalH");
                } else {
                    $hT = $a * 16;
                    texto("Usted ha trabajado $a horas por lo tanto su tarifa es de: $hT");
                }
            }
        }


        ?>

    </div>
</body>

</html>