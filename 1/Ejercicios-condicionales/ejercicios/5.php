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
        <h2>Ejercicio 5</h2>
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

                <input type="submit" value="ENVIAR" class="enviar">
            </form>
        </div>

        <?php

        include 'funciones.php';

        escribirT("Solucion");

        if ($_SERVER['REQUEST_METHOD'] == "POST") {

            $a = $_POST['select'];


            if (empty($a)) {
                texto("Inserte valores correctos");
            }
            if ($a == 'pera') {
                $b = $_POST['num1'];
                $c = $b * 1500;
                texto("Usted ha comprado $b kilos de pera<br> para un total de = $c$ <br>GRACIAS POR SU COMPRA!");
            } elseif ($a == 'manzana') {
                $b = $_POST['num1'];
                $c = $b * 2500;
                texto("Usted ha comprado $b kilos de manzana<br> para un total de = $c$<br> GRACIAS POR SU COMPRA!");
            }
        }




        ?>

    </div>
</body>

</html>