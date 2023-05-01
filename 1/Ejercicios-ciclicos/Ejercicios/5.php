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
        <?php

        include 'funciones.php';

        $a = rand(1, 100);
        $i = 0;
        $sum = 0;
        texto("Sumatoria numeros hasta: $a");
        while ($i <= $a) {
            $sum = $sum + $i;
            $i++;
            texto("$sum");
        }
        ?>


    </div>
</body>

</html>