<?php



//Create COnstants to Sotre Non repeating Values

define('LOCALHOST', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'shoe-order');


$conn = mysqli_connect(LOCALHOST, DB_USERNAME, DB_PASSWORD) or die(mysqli_connect_error()); //Database Conection
$db_select = mysqli_select_db($conn, 'DB_NAME') or die(mysqli_connect_error()); //Selecting Database

