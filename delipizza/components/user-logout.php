<?php
session_start();
session_destroy();
header("Location:../index/user-login.php");
exit;
?>