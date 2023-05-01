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
        <h2>Ejercicio 1</h2>
        <div class="form">
            <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
                <label for="num1">
                    <h2>Ingrese dos numeros</h2>
                </label>
                <input type="text" name="num1" id="num1">
                <input type="text" name="num2" id="num2">
                <input type="submit" value="ENVIAR" class="enviar">
            </form>
        </div>
        <?php

        include 'funciones.php';

        escribirT("Solucion 1");
        if ($_SERVER['REQUEST_METHOD'] == "POST") {

            $a = $_POST['num1'];
            $b = $_POST['num2'];

            if (empty($a)) {
                texto("Inserte valores correctos");
            } else {
                if ($a > $b) {
                    texto("$a > $b");
                } elseif ($a < $b) {
                    texto("$a < $b");
                } else {
                    texto("los numeros son iguales");
                }
            }
        }




        ?>

    </div>
</body>

</html>