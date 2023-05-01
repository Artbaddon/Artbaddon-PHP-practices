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

        <h2>Ejercicio 6</h2>
        <div class="form">
            <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
                <label for="num1">
                    <h2>Ingrese las tres notas</h2>
                </label>
                <input type="text" name="num1" id="num1">
                <input type="text" name="num2" id="num2">
                <input type="text" name="num3" id="num3">
                <input type="submit" value="ENVIAR" class="enviar">
            </form>
        </div>
        <?php

        include 'funciones.php';

        escribirT("Solucion ");
        if ($_SERVER['REQUEST_METHOD'] == "POST") {

            $a = $_POST['num1'] * 0.35;
            $b = $_POST['num2'] * 0.35;
            $c = $_POST['num3'] * 0.30;

            if (empty($a)) {
                texto("Inserte valores correctos");
            } else {
                $p = $a + $b + $c;
                if ($p >= 3.5) {
                    texto("El estudiante ha pasado con un promedio de $p");
                } else {
                    texto("El estudiante ha perdido con un promedio de $p");
                }
            }
        }




        ?>

    </div>
</body>

</html>