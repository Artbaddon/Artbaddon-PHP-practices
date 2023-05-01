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
        function espacio($num)
        {

            for ($i = 0; $i < $num; $i++) {
                echo "<br>";
            }
        }

        function escribirT($texto)
        {
            echo "<h2>" . $texto . "</h2>";
        }

        function texto($texto)
        {
            echo $texto;

            espacio(2);
        }


        escribirT("Ejercicio 7");
        $a = rand(0, 10000);
        if ($a > 1000) {
            $b = $a * 0.20;
            $b = $a - $b;
            texto("Usted aplica a un descuento, su compra total es de: $a y $b con descuento del 20%");
        } else {
            texto("Usted no aplica a un descuento, su compra total es de: $a");
        }


        ?>

    </div>
</body>

</html>