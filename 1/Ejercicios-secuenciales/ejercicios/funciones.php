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
    echo "<p> $texto</p>";

    espacio(2);
}
