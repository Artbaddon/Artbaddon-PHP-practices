<?php include('partials/menu.php') ?>

<div class="main-content">
    <div class="wrapper">
        <h1>Update Admin</h1>
        <br /> <br />
        <?php
        //1. Get ID of Selected Admin
        $id = $_GET['id'];
        //2. Create Sql Query to get the detailes
        $sql = "SELECT * FROM tbl_admin WHERE id=$id";
        // Execute the Query
        $res = mysqli_query($conn, $sql);
        // Check if the query is executed or not
        if ($res == true) {
            // Check if the data is available or not
            $count = mysqli_num_rows($res);
            // Check if we have admin data or not

            if ($count == 1) {
                //Get the details
                $row = mysqli_fetch_assoc($res);
                $full_name = $row['full_name'];
                $username = $row['username'];
            } else {
                // Redirect to manage admin page
                header('location: ' . SITEURL . 'admin/manage-admin.php');
            }
        }
        ?>
        <form action="" method="post">
            <table class="tbl-30">
                <tr>
                    <td>Full Name: </td>
                    <td>
                        <input type="text" name="full_name" value="<?php echo $full_name; ?>">
                    </td>
                </tr>
                <tr>
                    <td>Username: </td>
                    <td>
                        <input type="text" name="username" value="<?php echo $username; ?>">
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <input type="hidden" name="id" value="<?php echo $id ?>">
                        <input type="submit" name="submit" value="Update Admin" class="btn-secondary">
                    </td>
                </tr>

            </table>

        </form>
    </div>
</div>
<?php
if (isset($_POST['submit'])) {
    // Get all the values form form to update
    $id = $_POST['id'];
    $full_name = $_POST['full_name'];
    $username = $_POST['username'];

    // Create a SQL Query to Update Admin
    $sql = "UPDATE tbl_admin SET full_name = '$full_name', username='$username' WHERE id='$id' ";
    // Execute the query
    $res= mysqli_query($conn,$sql);

    // Check if the query is on or not
    if ($res == true){
        // Query Executed and Admin data update
        $_SESSION['update']="<div class'succes'>Admin Updated Succesfulyly </div>";
        header('location:'.SITEURL.'admin/manage-admin.php');
    }else{
        // Failed to update Admin
        $_SESSION['update']="<div class'fail'>Failed to Update data</div>";
        header('location:'.SITEURL.'admin/manage-admin.php');
    }
}
?>


<?php include('partials/footer.php') ?>