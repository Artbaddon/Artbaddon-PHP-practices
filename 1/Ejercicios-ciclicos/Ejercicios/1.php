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
        <h2>Ejercicio 1</h2>
        <div class="form">
            <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
                <label for="select">
                    <h2>Que desea comprar?</h2>
                </label>
                <select name="select" id="select">
                    <option value="pera">Pera</option>
                    <option value="manzana">Manzana</option>
                </select>
                <label for="num1">
                    <h2>¿Cuantos kilos desea comprar?</h2>
                </label>
                <input type="text" name="num1" id="num1">
                <label for="num2">
                    <h2>¿Cuanto vale cada kilo ?</h2>
                </label>
                <input type="text" name="num2" id="num2">

                <input type="submit" value="ENVIAR" class="enviar">
            </form>
        </div>

        <?php

        include 'funciones.php';


        escribirT("Solucion");

        if ($_SERVER['REQUEST_METHOD'] == "POST") {

            $a = $_POST['select'];
            $b = $_POST['num1'];
            $p = $_POST['num2'];



            if (empty($a)) {
                texto("Inserte valores correctos");
            }
            if ($a == 'pera') {
                $c = $b * $p;
                texto("Usted ha comprado $b kilos de pera<br> para un total de = $c$ <br>GRACIAS POR SU COMPRA");
            } elseif ($a == 'manzana') {
                $c = $b * $p;
                texto("Usted ha comprado $b kilos de manzana<br> para un total de = $c$<br> GRACIAS POR SU COMPRA");
            }
        }


        ?>


    </div>
</body>

</html>