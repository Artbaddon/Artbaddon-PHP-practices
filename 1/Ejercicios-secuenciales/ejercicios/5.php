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
        <h2>Ejercicio 5</h2>
        <div class="form">

            <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
                <label for="num">
                    <h2>Digite un numero cualquiera para mostrarle su multiplicacion por 10</h2>
                </label>
                <input type="text" name="num" id="num">
                <input type="submit" value="ENVIAR" class="enviar">

            </form>
        </div>
        <?php

        include 'funciones.php';

        escribirT("Solucion:");
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            $a = $_REQUEST['num'];

            if (empty($a)) {
                texto("Por favor ingrese un numero: ");
            } else {
                texto("El numero es: " . $a * 10);
            }
        }



        ?>

    </div>
</body>

</html>