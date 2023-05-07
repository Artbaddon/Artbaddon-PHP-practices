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
        <h2>Ejercicio 3</h2>
        <div class="form">
            <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">

                <label for="codigo">
                    <h2> Ingrese el codigo del producto</h2>

                </label>
                <input type="number" name="codigo" id="codigo" required>

                <label for="nombre">
                    <h2> Ingrese el nombre del producto</h2>

                </label>
                <input type="text" name="nombre" id="nombre" required>

                <label for="totalE">
                    <h2> Ingrese el total de existencias</h2>

                </label>
                <input type="number" name="totalE" id="totalE" min="0" required>

                <label for="precio">
                    <h2> Ingrese el precio</h2>
                </label>
                <input type="text" name="precio" id="precio" min="0" required>

                <label for="cat">
                    <h2> Ingrese la categoria</h2>
                </label>
                <select name="cat" id="cat">
                    <option value="num1">1</option>
                    <option value="num2">2</option>
                </select>
                <input type="submit" value="ENVIAR" class="enviar">
            </form>
        </div>
        <?php

        include 'funciones.php';

        escribirT("Solucion: ");
        if ($_SERVER['REQUEST_METHOD'] == "POST") {

            $codigo = $_POST['codigo'];
            $nombre = $_POST['nombre'];
            $totalE = $_POST['totalE'];
            $precio = $_POST['precio'];
            $cat = $_POST['cat'];


            if ($cat == "num1") {
                $descuentoT = $precio * 0.05;
                $precio2 = $precio - $descuentoT;
                texto("Codigo producto: $codigo <br>");
                texto("Nombre producto: $nombre <br>");
                texto("Existencias totales: $totalE <br>");
                texto("Categoria: $cat <br>");
                texto("Precio: $precio <br>");
                texto("Descuento: $descuentoT <br>");
                texto("Precio final con descuento: $precio2 <br>");
            } elseif ($cat == "num2") {
                $descuentoT = $precio * 0.10;
                $precio2 = $precio - $descuentoT;
                texto("Codigo producto: $codigo <br>");
                texto("Nombre producto: $nombre <br>");
                texto("Existencias totales: $totalE <br>");
                texto("Categoria: $cat <br>");
                texto("Precio: $precio <br>");
                texto("Descuento: $descuentoT <br>");
                texto("Precio final con descuento: $precio2 <br>");
            }
        }



        ?>

    </div>
</body>

</html>