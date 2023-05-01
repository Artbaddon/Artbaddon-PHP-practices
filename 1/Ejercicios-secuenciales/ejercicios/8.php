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

        <h2>Ejercicio 8</h2>
        <div class="form">
            <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
                <label for="num1">
                    <h2>Cuantos miles de pesos desea cambiar?</h2>
                </label>
                <input type="text" name="pesos" id="pesos">
                <input type="submit" value="ENVIAR" class="enviar">

            </form>
        </div>
        <?php

        include 'funciones.php';

        escribirT("Solucion:");


        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            $a = $_REQUEST['pesos'];
            $d = $a / 2000;
            $e = $a / 3000;
            if (empty($a)) {
                texto("Por favor ingrese un valor");
            } else {
                texto("$a pesos colombianos equivalen a: $d usd y $e eur ");
            }
        }




        ?>

    </div>
</body>

</html>