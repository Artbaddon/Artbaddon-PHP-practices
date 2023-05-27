<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Shoe Order System -</title>
    <link rel="stylesheet" href="../css/admin.css">
</head>

<body class="body-login">
    <div class="login-container">
        <div class="wrapper-login">
            <h1 class="text-center">Admin Login</h1>
            <div class="login">


                <!-- Login Form Starts Here -->
                <form action="" method="POST" class="text-center">

                    <input type="text" name="username" placeholder="Enter Username"><br /><br />

                    <input type="password" name="password" placeholder="Enter Password"><br /><br />

                    <input type="submit" value="login" class="btn-primary login-btn">
                </form>
            </div>
        </div>


    </div>


</body>

</html>
<?php
// Checked whether the submit button is clicked or not

if (isset($_POST['submit'])) {

    // 1. Get the Data from login form]
    echo "aaaa";
    $username = $_POST['username'];
    $password = $_POST['password'];

    // 2. SQL to check whether the user with username and password exist or not

    $sql="SELECT * FROM tlb_admin WHERE username='$username' AND password='password'";

    // 4. Execute the query
}
?>