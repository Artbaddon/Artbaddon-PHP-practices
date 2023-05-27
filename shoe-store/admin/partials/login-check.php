<?php
// Authorization -acces control
// Check whether the user is logged in or not
if(!isset($_SESSION['user'])){  //If user session is not set
    // User is not logged in
    // Redirect to login page with message
    $_SESSION['no-login-msg'] ="<div class='fail text-center'>Please login to acces admin Panel.</div>";
    header('location:'.SITEURL.'admin/login.php');

    
}

?>