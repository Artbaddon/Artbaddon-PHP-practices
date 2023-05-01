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

        escribirT("Ejercicio 4");
        
        texto("Numeros ascendentes del 1 al 10:<br>");
        for ($i = 0; $i < 10; $i++) {

            texto("$i <br>");
        }
        texto("Numeros descendentes del 100 al 90:<br>");
        for ($i = 100; $i >= 90; $i--) {

            texto("$i <br>");
        }


        ?>


    </div>
</body>

</html>