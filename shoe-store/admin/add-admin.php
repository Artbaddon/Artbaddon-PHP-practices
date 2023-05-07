<?php include('partials/menu.php'); ?>

<!-- Main Section Starts -->
<main class="main-content">
    <div class="wrapper">
        <h1>Add Admin</h1>
        <br />
        <form action="" method="POST">

            <table class="table-30">
                <tr>
                    <td>Full Name:</td>
                    <td>
                        <input type="text" name="full_name" placeholder="Enter the Name">
                    </td>
                </tr>
                <tr>
                    <td>Username: </td>
                    <td>
                        <input type="text" name="username" placeholder="Enter the username">
                    </td>
                </tr>
                <tr>
                    <td>Password:</td>
                    <td>
                        <input type="password" name="password" placeholder="Enter the password">
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <input type="submit" value="Add admin" name="submit" class="btn-secondary">
                    </td>
                </tr>
            </table>



        </form>


    </div>
</main>
<!-- Main Section Ends -->


<?php include('partials/footer.php'); ?>

<?php
//Procces the value from Form and Save it in Database

//Check if the submit button is clicked or not

if (isset($_POST['submit'])) {
    //Button Clicked
    //1. Get the Data from form

    $full_name = $_POST['full_name'];
    $username = $_POST['username'];
    $password = md5($_POST['password']); //Password Encryption with MD5

    //2. SQL query to Save the data into database

    $sql = "INSERT INTO tbl_admin SET
        full_name='$full_name',
        username='$username',
        password='$password'
   ";

}
?>