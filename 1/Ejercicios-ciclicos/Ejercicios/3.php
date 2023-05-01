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

        texto("Numeros descendentes del 10 al 1:<br>");
        for ($i = 10; $i > 0; $i--) {

            texto("$i <br>");
        }


        ?>


    </div>
</body>

</html>