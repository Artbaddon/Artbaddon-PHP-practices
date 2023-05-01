<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            background-image: url(img/aaaaaa.jpg);
            background-size: cover;
            font-family: 'Courier New', Courier, monospace;
            color: white;
        }

        .lista1 {
            display: inline-block;
            vertical-align: top;
            text-decoration: none;
            list-style: none;
            text-align: center;
            width: 20%;
            line-height: 30px;
        }

        .lista1 a {
            color: white;
            text-decoration: none;
            font-size: 20px;

        }

        .lista1 a:hover {
            color: black;


        }

        .ejercicios {

            backdrop-filter: blur(100px);
            width: 70%;
            margin: 0 auto;
            margin-top: 200px;
            text-align: center;
            text-shadow: 2px 2px black;

        }

        .ejercicios h1 {
            color: white;
            font-size: 4vh;

        }

        .ejercicios h2 {
            color: white;

        }
    </style>
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
        echo "<h1>Ejercicios condicionales</h1>";

        ?>
        <ul class="lista1">
            <li><a href="ejercicios/1.php" target="a">1</a></li>
            <li><a href="ejercicios/2.php" target="a">2</a></li>
            <li><a href="ejercicios/3.php" target="a">3</a></li>
            <li><a href="ejercicios/4.php" target="a">4</a></li>
            <li><a href="ejercicios/5.php" target="a">5</a></li>
            <li><a href="ejercicios/6.php" target="a">6</a></li>
        </ul>
        <iframe src="" width="60%" height="500px" class="iframe1" name="a"></iframe>

    </div>
</body>

</html>