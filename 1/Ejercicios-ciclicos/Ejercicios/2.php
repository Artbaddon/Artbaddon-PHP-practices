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
        <h2>Ejercicio 2</h2>
        <div class="form">
            <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
                <label for="num1">
                    <h2>Ingrese el valor de su compra</h2>
                </label>
                <input type="text" name="num1" id="num1">
              
                <input type="submit" value="ENVIAR" class="enviar">
            </form>
        </div>
        <?php

        include 'funciones.php';



        escribirT("Solucion");
        if ($_SERVER['REQUEST_METHOD'] == "POST") {

            $a = rand(1, 100);
            $b = $_POST['num1'];




            if (empty($a)) {
                texto("Inserte valores correctos");
            } else {
                if ($a < 74) {
                    $c = $b * 0.15;
                    $b = $b - $c;
                    texto("El numero $a fue menor que 74 por lo tanto su total es de: $b");
                } elseif ($a >= 74) {
                    texto("El numero $a fue mayor o igual que 74 por lo tanto su total es de: $b");
                }
            }
        }


        $b = rand(1, 100000);




        ?>


    </div>
</body>

</html>