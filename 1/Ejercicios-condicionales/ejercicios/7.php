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
        <h2>Ejercicio 7</h2>
        <div class="form">
            <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
                <label for="totalC">
                    <h2>Ingrese el total de su compra</h2>
                </label>
                <input type="text" name="totalC" id="totalC">
                <input type="submit" value="ENVIAR" class="enviar">
            </form>
        </div>
        <?php

        include 'funciones.php';
        escribirT("Solucion: ");
        if ($_SERVER['REQUEST_METHOD'] == "POST") {

            $a = $_POST['totalC'];


            if (empty($a)) {
                texto("Inserte valores correctos");
            } else {
                if ($a > 1000) {
                    $b = $a * 0.20;
                    $b = $a - $b;
                    texto("Usted aplica a un descuento, su compra total es de: $a y $b con descuento del 20%");
                } else {
                    texto("Usted no aplica a un descuento, su compra total es de: $a");
                }
            }
        }


        $a = rand(0, 10000);



        ?>

    </div>
</body>

</html>