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


        escribirT("Ejercicio 11");
        $a = rand(1, 100);
        $b = rand(1, 100);
        $c = rand(1, 100);
        if ($a < $b and $a < $c) {
            texto("el numero $a es el menor");
        } elseif ($b < $a and $b < $c) {
            texto("el numero $b es el menor");
        } elseif ($c < $a and $c < $b) {
            texto("el numero $c es el menor");
        } else {
            texto("los numeros son iguales");
        }
        ?>

    </div>
</body>

</html>