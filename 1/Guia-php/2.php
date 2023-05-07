<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style-guia-php.css">
</head>

<body>
    <div class="ejercicios">
        <h2>Ejercicio 2</h2>
        <div class="form">
            <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">

                <label for="nombre">
                    <h2> Nombre del vendedor: </h2>

                </label>

                <input type="text" name="nombre" id="nombre">
                <label for="num1">
                    <h2> Cantidad Automoviles Vendidos: </h2>

                </label>
                <input type="number" name="num1" id="num1" min="0">

                <label for="precio">
                    <h2>Precio Total Automoviles Vendidos</h2>

                </label>
                <input type="text" name="precio" id="precio">

                <input type="submit" value="ENVIAR" class="enviar">
            </form>
        </div>
        <?php

        include 'funciones.php';

        escribirT("Solucion: ");
        if ($_SERVER['REQUEST_METHOD'] == "POST") {

            $nombre = $_POST['nombre'];
            $cantidad = $_POST['num1'];
            $precio = $_POST['precio'];
            $salario = 800000;
            $comision = $cantidad * 500000;
            $comision2 = $comision * 0.02;
            $salarioT = $comision2 + $comision + $salario;

            if ($cantidad >= 1) {

                texto("Hola $nombre usted vendió $cantidad autos por lo tanto su sueldo mas comision es de : $salarioT $" );
            } else {

                texto(" Hola $nombre usted no vendio ningun auto por lo tanto su salario es de: $salario");
            }
        }



        ?>

    </div>
</body>

</html>