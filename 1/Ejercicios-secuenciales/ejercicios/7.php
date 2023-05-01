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

        escribirT("Ejercicio 7");
        $a = rand(0, 100);
        $b = rand(0, 100);
        $c = $a + $b;
        texto("La suma de los numeros $a y $b es: $c ");





        ?>

    </div>
</body>

</html>