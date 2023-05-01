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

        escribirT("Ejercicio 6");
        $a = rand(1, 5) * 0.35;
        $b = rand(1, 5) * 0.35;
        $c = rand(1, 5) * 0.30;
        
        $p = $a + $b + $c;
        if ($p >= 3.5) {
            texto("El estudiante a pasado con un promedio de $p");
        } else {
            texto("El estudiante ha perdido con un promedio de $p");
        }


        ?>

    </div>
</body>

</html>