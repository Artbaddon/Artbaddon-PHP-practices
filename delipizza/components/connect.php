<?php

$db_name = 'mysql:host=localhost;dbname=delipizza';
$user_name = 'root';
$password = '';
$conn = new PDO($db_name, $user_name, $password);


function unique_id()
{
    $chars = "0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz";
    $charlen = strlen($chars);
    $randomString  = "";
    for ($i = 0; $i < 20; $i++) {
        $randomString .= $chars[rand(0, $charlen - 1)];
    }
    return $randomString;
}
