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
        
        escribirT("Ejercicio 5");
        $a = rand(0, 10) * 10;
        texto("El numero es $a");


        ?>

    </div>
</body>

</html>