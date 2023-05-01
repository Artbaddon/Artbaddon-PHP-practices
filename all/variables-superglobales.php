<!DOCTYPE html>

<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>


    <?php
    /*
Varibales gloables de php - Superglobales
Variables globales e PHP - Superglobales
Algunas variables predefinidas en PHp son "Superglobales", lo que significa que siempre estan accesibles. independienemtente del alcance, y puede acceder a ellas desde cualquier funcion. clase o archivo sin tener que hacer nada especial.

Las variables uperglobales de pHP son:

$GLOBALS
$_SERVER
$_REQUEST
$_POST
$_GET
$_FILES
$_ENV
$_COOKIE
$_SESSION

*/

    $x = 10;
    $y = 20;
    function suma()
    {
        $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
    }


    suma();
    echo $z;
    ?>

    <h1>PHP $_SERVER</h1>
    <p>PHP $_SERVER es una varibale super global de php que contiene infromacion sobre encabezados, rutas y ubicaciones de secuencias de comandos.</p>
    <?php
    // echo $_SERVER['PHP_SELF'] . "<br>";
    // echo $_SERVER['SERVER_NAME'] . "<br>";
    // echo $_SERVER['HTTP_HOST'] . "<br>";
    // echo $_SERVER['HTTP_REFERER'] . "<br>";
    // echo $_SERVER['HTTP_USER_AGENT'] . "<br> <br>";



    ?>

    <form method="POST" action="<?php $_SERVER['PHP_SELF']; ?>">
        User: <input type="text" name="fname" required>
        password:<input type="password" name="password" required>
        <input type="submit">
    </form>
    <?php

    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        $name = $_REQUEST['fname'];
        $password = $_REQUEST['password'];
        if ($name == "admin" and $password == "123") {
            echo "bienvenido " . $name;
        } else {
            echo "user or password incorrect";
        }
    }

    /*
    PHP $_POST es una varibale super global de php que se utiliza para recopilar datos de fromulario despues de enviar un formulario HTMl con method="post". $_POST tambíen también ese usa ampliamente para pasar varibales
    */
    ?>
</body>



</html>