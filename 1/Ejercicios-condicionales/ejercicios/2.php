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

        escribirT("Ejercicio 2");
        $a = rand(1, 100);
        $b = rand(1, 100);
        $c = rand(1, 100);
        texto("Dado los numeros: $a, $b, $c:");
        if ($a > $b and $a > $c) {
            texto("El numero $a es el mayor");
        } elseif ($b > $a and $b > $c) {
            texto("El numero $b es el mayor");
        } elseif ($c > $a and $c > $b) {
            texto("El numero $c es el mayor");
        } else {
            texto("Los numeros son iguales");
        }


        ?>

    </div>
</body>

</html>