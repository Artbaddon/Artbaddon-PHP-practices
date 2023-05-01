<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            background: url(wallpaperflare.com_wallpaper.jpg);
            background-size: cover;
            
        }

        .aaa {
            color: white;
            line-height: 50px;
            text-align: center;
        }
    </style>
    <link rel="stylesheet" href="styleLogin.css">
</head>

<body>
    <div class="all">
        <div class="body">

            <div class="aaa">
                <?php

                $salarioM = $_POST["salarioM"];
                $diasT = $_POST["diasT"];
                $total = $salarioM / $diasT;
                echo "<h2>Hola: <br>" . $name = $_POST["nombre"] . "</h2>";
                echo "<h2>Direccion: <br>" . $direccion = $_POST["direccion"] . "</h2>";
                echo "<h2>Telefono: <br>" . $telefono = $_POST["telefono"] . "</h2>";
                echo "<h2>Email: <br>" . $email = $_POST["email"] . "</h2>";
                echo "<h2>Usted ganó:<br> " . $salarioM = $_POST["salarioM"] . " de sueldo</h2>";

                echo "<h2>Usted ha trabajado $diasT dias por lo tanto cada dia vale:<br> $total monedas</h2>";

                ?>
            </div>



        </div>


</body>

</html>