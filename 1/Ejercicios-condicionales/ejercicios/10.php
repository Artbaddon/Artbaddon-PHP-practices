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

        escribirT("Ejercicio 10");
        $a = rand(-100, 2000);
        $b = $a % 2;
        $c = $a % 3;
        texto($a);
        if ($b == 0 && $c == 0) {
            texto("El numero esmultiplo de 2 y 3");
        } elseif ($b == 0) {
            texto("el numero es multiplo de 2 pero no de 3");
        } elseif ($c == 0) {
            texto("el numero es multiplo de 3 pero no de 2");
        } else {
            texto("EL numero no es multiplo  de 2 ni 3");
        }


        ?>

    </div>
</body>

</html>