<?php
// Start Session
session_start();



//Create COnstants to Sotre Non repeating Values
define('SITEURL','http://localhost/Artbaddon-PHP-practices/shoe-store/');
define('LOCALHOST', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'shoe-order');


$conn = mysqli_connect(LOCALHOST, DB_USERNAME,DB_PASSWORD ); //Database Conection
$db_select = mysqli_select_db($conn, DB_NAME); //Selecting Database


if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    exit();
}
