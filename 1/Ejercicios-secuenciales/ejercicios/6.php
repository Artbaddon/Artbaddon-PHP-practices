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
        <h2>Ejercicio 6</h2>
        <div class="form">

            <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
                <label for="num1">
                    <h2>Digite dos numeros cualquiera</h2>
                </label>
                <input style="width:50px;" type="text" name="num1" id="num1">
                <input style="width:50px;" type="text" name="num2" id="num2">
                <input type="submit" value="ENVIAR" class="enviar">

            </form>
        </div>
        <?php

        include 'funciones.php';

        escribirT("Solucion:");
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            $a = $_REQUEST['num1'];
            $b = $_REQUEST['num2'];
            if (empty($a) or empty($b)) {
                texto("Por favor ingrese dos numeros: ");
            } else {
                texto("Los numeros son: $a y $b");
            }
        }





        ?>

    </div>
</body>

</html>