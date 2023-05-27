<?php include('../config/constants.php') ?>

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
                <br><br>

                <!-- Login Form Starts Here -->
                <form action="" method="POST" class="text-center">

                    <input type="text" name="username" placeholder="Enter Username"><br /><br />

                    <input type="password" name="password" placeholder="Enter Password"><br /><br />

                    <input type="submit" name="submit" value="login" class="btn-primary login-btn">
                </form>
             
            </div>
            <?php
                if (isset($_SESSION['login'])) {
                    echo $_SESSION['login'];
                    unset($_SESSION['login']);
                }
                ?>
        </div>
     


    </div>
    


</body>

</html>
<?php
// Checked whether the submit button is clicked or not

if (isset($_POST['submit'])) {

    // 1. Get the Data from login form]

    $username = $_POST['username'];
    $password = md5($_POST['password']);

    // 2. SQL to check whether the user with username and password exist or not

    $sql = "SELECT * FROM tbl_admin WHERE username='$username' AND password='$password'";

    // 3. Execute the query
    $res = mysqli_query($conn, $sql);
    // Count rows to check whether the user exists or nor
    $count = mysqli_num_rows($res);

    if ($count == 1) {
        // User available and Login Succes
        $_SESSION['login'] = "<div class='succes'>Login Succesful</div>";
        $_SESSION['user']=$username;
        header('location: ' . SITEURL . 'admin/');
    } else {
        // User not Avialable and login fail
        $_SESSION['login'] = "<div class='fail text-center'>Login Failed Username or Password did not match</div>";
        header('location: ' . SITEURL . 'admin/login.php');
    }
}
?>