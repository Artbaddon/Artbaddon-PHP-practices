<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicios Secuenciales</title>
    <style>
        body {
            background-image: url(img/wano-wallpaper-i-edited-v0-gaqss5hgbny81.png);

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
            margin-top: 150px;
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
        echo "<h1>Ejercicios secuenciales</h1>";
        ?>

        <ul class="lista1">
            <li><a href="ejercicios/1.php" target="a">1</a></li>
            <li><a href="ejercicios/2.php" target="a">2</a></li>
            <li><a href="ejercicios/3.php" target="a">3</a></li>
            <li><a href="ejercicios/4.php" target="a">4</a></li>
            <li><a href="ejercicios/5.php" target="a">5</a></li>
            <li><a href="ejercicios/6.php" target="a">6</a></li>
            <li><a href="ejercicios/7.php" target="a">7</a></li>
            <li><a href="ejercicios/8.php" target="a">8</a></li>
            <li><a href="ejercicios/9.php" target="a">9</a></li>
            <li><a href="ejercicios/10.php" target="a">10</a></li>
            <li><a href="ejercicios/11.php" target="a">11</a></li>
            <li><a href="ejercicios/12.php" target="a">12</a></li>
            <li><a href="ejercicios/13.php" target="a">13</a></li>
            <li><a href="ejercicios/14.php" target="a">14</a></li>

        </ul>
        <iframe src="" width="60%" height="500px" class="iframe1" name="a"></iframe>

    </div>
</body>

</html>