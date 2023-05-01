<?php


$a = 100;

while ($a >= 0) {

    echo "$a <br>";
    $a = $a - 5;
}

$a = 99;
for ($i = 0; $i <= 100; $i = $i += 10) {
    echo $i . " <br>";
    if ($i == 90) {
        break;
    }
}
