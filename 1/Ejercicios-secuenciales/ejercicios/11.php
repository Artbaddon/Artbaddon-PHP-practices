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
        <?php

        include 'funciones.php';

        escribirT("Ejercicio 11");
        $a = rand(1912, 2023);
        $b = 2023 - $a;
        texto("Usted nacio en $a por lo tanto tiene: $b years");
        
        ?>

    </div>
</body>

</html>