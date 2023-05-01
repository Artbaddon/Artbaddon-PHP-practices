<?php


$hora = date("H");

if ($hora < 12) {

    echo 'buenos dias<br><br>';
} else if ($hora <= 18) {
    echo 'buenas tardes <br><br>';
} else {
    echo 'buenas noches<br><br>';
}

$favcol = "black";

switch ($favcol) {
    case "red";
        echo "su color favorito es rojo";
        break;
    case "blue";
        echo "su color favorito es azul";
        break;
    case "green";
        echo "su color favorito es verde";
        break;
    case "black";
        echo "su color favorito es negro";
        break;
    default:
        echo "Su color favorito no es rojo, azul, verde,black";
};


