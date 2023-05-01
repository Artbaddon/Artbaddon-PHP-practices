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
        <?php

        include 'funciones.php';
        
        escribirT("Ejercicio 5");
        $a = rand(0, 1);
        if ($a == 1) {
            $b = rand(1, 10);
            $c = $b * 1500;
            texto("Usted ha comprado $b kilos de pera<br> para un total de = $c$ <br>GRACIAS POR SU COMPRA");
        } elseif ($a == 0) {
            $b = rand(1, 10);
            $c = $b * 2500;
            texto("Usted ha comprado $b kilos de manzana<br> para un total de = $c$<br> GRACIAS POR SU COMPRA");
        }


        ?>

    </div>
</body>

</html>