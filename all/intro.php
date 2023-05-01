<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .perro {
            text-align: center;
            color: white;
            font-size: 60px;
            font-family: impact;
        }

        .php {
            background-color: black;
            width: 100%;
            margin: 0 auto;
            height: fit-content;
            position: fixed;
            padding: 0;
            box-sizing: border-box;
            top: 0;

        }
    </style>
</head>

<body>
    <header>
        <div div class="php">
            <?php
            function espacio()
            {
                echo "<br>";
            }

            //VARIABLES ARE DEFINED WIT $  
            $hola = 1;
            $b = 2;
            //Constant are define with define all in caps and can be used in control structures
            define('STATUS_PAID', 'paid');
            echo defined('STATUS_PAID');
            //Constant can also being defined with const cant be defined in control structures

            const STATUS_PAPA = 'paid';

            echo "<p class='perro'>HOLA</p>";
            echo "<p class='perro'>HOLA</p>";

            $paid = 'PAID';

            define('STATUS_' . $paid, 4);
            echo STATUS_PAID;

            echo PHP_VERSION;

            // Variable Variables

            $aaa = 'bar';
            $$aaa = 'baz';
            echo $aaa . $$aaa;
            ?>
        </div>

    </header>



    

</body>

</html>