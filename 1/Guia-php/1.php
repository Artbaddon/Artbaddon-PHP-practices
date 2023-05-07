<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style-guia-php.css">
</head>

<body>
    <div class="ejercicios">
        <h2>Ejercicio 1</h2>
        <div class="form">
            <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
                <h2>Ingrese Las tres notas</h2>
                <label for="num1">
                    <h2> Ingrese la nota del primer parcial:</h2>

                </label>
                <input type="number" name="num1" id="num1" step="0.1" min="0" max="5" required> 

                <label for="num2">
                    <h2> Ingrese la nota del segundo parcial:</h2>

                </label>
                <input type="number" name="num2" id="num2" step="0.1" min="0" max="5" required>

                <label for="num3">
                    <h2> Ingrese la nota del tercer parcial:</h2>

                </label>
                <input type="number" name="num3" id="num3" step="0.1" min="0" max="5" required>

                <label for="num4">
                    <h2> Ingrese la nota del examen final:</h2>
                </label>
                <input type="number" name="num4" id="num4" step="0.1" min="0" max="5" required>

                <label for="num5">
                    <h2> Ingrese la nota del trabajo final:</h2>
                </label>
                <input type="number" name="num5" id="num5" step="0.1" min="0" max="5" required>

                <input type="submit" value="ENVIAR" class="enviar">
            </form>
        </div>
        <?php

        include 'funciones.php';

        escribirT("Solucion");
        if ($_SERVER['REQUEST_METHOD'] == "POST") {

            $a = $_POST['num1'];
            $b = $_POST['num2'];
            $c = $_POST['num3'];
            $d = $_POST['num4'] * 0.2;
            $e = $_POST['num5'] * 0.6;
            $p = (($a + $b + $c) / 3) * 0.2;
            $p = $p + $d + $e;
            if ($p > 3) {
                texto("Usted ha pasado, su promedio fue de: $p");
            } else {
                texto("Usted ha perdido, su promedio fue de: $p");
            }
        }
        ?>

    </div>
</body>

</html>