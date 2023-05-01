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
        <h2>Ejercicio 10</h2>
        <div class="form">
            <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
                <label for="grados">
                    <h2>Cuantso grados celsius desea cambiar?</h2>
                </label>
                <input type="text" name="grados" id="grados">
                <input type="submit" value="ENVIAR" class="enviar">

            </form>
        </div>

        <div class="ejercicios">
            <?php

            include 'funciones.php';

            escribirT("Solucion:");

            if ($_SERVER['REQUEST_METHOD'] == "POST") {

                $a = $_POST['grados'];
                $b = ($a * 9) / 5 + 32;

                if (empty($a)) {
                    texto("Ingrese los grados celsius porfavor");
                } else {
                    texto("$a gados centigrados a farenheit = $b");
                }
            }




            ?>

        </div>
    </div>
</body>

</html>