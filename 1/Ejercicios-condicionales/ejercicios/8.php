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

        escribirT("Ejercicio 8");
        $a = rand(1, 60);
        if ($a > 40) {
            $hE = $a - 40;
            $hET = $hE * 20;
            $hT = 40 * 16;
            $totalH = $hET + $hT;
            texto("Usted ha trabajado $a horas y $hE extras por lo tanto su pago es de: $totalH");
        } else {
            $hT = $a * 16;
            texto("Usted ha trabajado $a horas por lo tanto su tarifa es de: $hT");
        }


        ?>

    </div>
</body>

</html>