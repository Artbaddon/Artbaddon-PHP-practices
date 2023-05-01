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
        <h2>Ejercicio 11</h2>
        <div class="form">
            <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
                <label for="year">
                    <h2>¿En que año nacio?</h2>
                </label>
                <input type="text" name="year" id="year">
                <input type="submit" value="ENVIAR" class="enviar">

            </form>
        </div>
        <?php

        include 'funciones.php';

        escribirT("Solucion: ");


        if ($_SERVER['REQUEST_METHOD'] == "POST") {

            $a = $_POST['year'];
            $b = 2023 - $a;

            if (empty($a)) {
                texto("Ingrese el año de su nacimiento por favor");
            } else {
                texto("Usted nacio en $a por lo tanto tiene: aprox $b años");
            }
        }

        ?>

    </div>
</body>

</html>