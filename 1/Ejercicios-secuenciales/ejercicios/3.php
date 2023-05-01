<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles-secuenciales.css">
    </style>
</head>

<body>
    <div class="ejercicios">
        <h2>Ejercicio 3</h2>
        <div class="form">
            <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
                <label for="name">
                    <h2>Digite su nombre</h2>
                </label>
                <input type="text" name="name" id="name">
                <input type="submit" value="submit" class="enviar">
            </form>
        </div>
        <?php

        include 'funciones.php';

        escribirT("Solucion:");
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            $nombre = $_REQUEST['name'];
            if (empty($nombre)) {
                texto("Por favor digite su nombre: ");
            } else {
                texto("Hola $nombre");
            }
        }




        ?>

    </div>
</body>

</html>