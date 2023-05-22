<?php include('partials/menu.php'); ?>

<!-- Main Section Starts -->
<main class="main-content">
    <div class="wrapper">
        <h1>Add Admin</h1>
        <br /><br />

        <?php 
        if(isset($_SESSION['add'])){
            echo $_SESSION['add'];
            unset($_SESSION['add']);
        }
        ?>
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
    //3. executing query and savind data in database
    $res = mysqli_query($conn, $sql);
    if ($res == TRUE) {
        //data iserted
        // echo "data inserted";
        // create a session variable to display msg
        $_SESSION['add'] = "<div class='succes'>Admin Added Succesfully</div>";
        // Redirect page
        header("location:".SITEURL.'admin/manage-admin.php');
    } else {
        // echo " failed to insert";
         //Failed to insert data       
        // create a session variable to display msg
        $_SESSION['add'] = "<div class='fail'>Failed to add Admin</div>";
        // Redirect page
        header("location:".SITEURL.'admin/manage-admin.php');
    }
}
?>