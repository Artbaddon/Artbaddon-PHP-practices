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
