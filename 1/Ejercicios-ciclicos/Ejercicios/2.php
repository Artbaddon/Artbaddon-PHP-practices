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
        $b = rand(1, 100000);

        if ($a < 74) {
            $c = $b * 0.15;
            $b = $b - $c;
            texto("El numero $a fue menor que 74 por lo tanto su total es de: $b");
        } elseif ($a >= 74) {
            texto("El numero $a fue mayor o igual que 74 por lo tanto su total es de: $b");
        }


        ?>


    </div>
</body>

</html>