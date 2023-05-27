<?php include('partials/menu.php') ?>

<div class="main-content">
    <div class="wrapper">
        <h1>Change Password</h1>
        <br /> <br />
        <?php
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
        }
        ?>

        <form action="" method="post">
            <table class="tbl-30">
                <tr>
                    <td>Current Password: </td>
                    <td>
                        <input type="password" name="current_password" placeholder="Current Password">
                    </td>

                </tr>
                <tr>
                    <td>New Password: </td>
                    <td>
                        <input type="password" name="new_password" placeholder="New Password">
                    </td>
                </tr>
                <tr>
                    <td>Confirm Password: </td>
                    <td>
                        <input type="password" name="confirm_password" placeholder="Confirm Password">
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <input type="hidden" name="id" value="<?php echo $id ?>">
                        <input type="submit" name="submit" value="Change Password" class="btn-secondary">

                    </td>
                    <td>

                    </td>
                </tr>
            </table>
        </form>
    </div>
</div>
<?php
// Check whether the submit button is clicked or not

if (isset($_POST['submit'])) {
    // echo "clicked";
    // 1. Get data from Form
    $id = $_POST['id'];
    $current_password = md5($_POST['current_password']);
    $new_password = md5($_POST['new_password']);
    $confirm_password = md5($_POST['confirm_password']);


    //2. Check whether the user with curret ID and Current Password exist or not
    $sql = "SELECT * FROM tbl_admin WHERE id=$id AND password='$current_password'";
    // Execute the query
    $res = mysqli_query($conn, $sql);

    if ($res == true) {
        // Check whether data is available or not
        $count = mysqli_num_rows($res);

        if ($count == 1) {
            // User Exists and Password Can be Changed
            // echo "User Found";
            // Check whether the new password and confirm password match or not
            if ($new_password == $confirm_password) {
              
                // Update The Password
                $sql2 ="UPDATE tbl_admin SET password='$new_password' WHERE id=$id";

                // Execute the Query
                $res2 =mysqli_query($conn,$sql2);
                // Check whether the query executed or not
                if($res2==true){
                    // Display Error Message

                    $_SESSION['change-pwd'] = "<div class='succes'>Password Changed Succesfully </div>";
                    // Redirect the user
                    header('location:'.SITEURL.'admin/manage-admin.php');
                }
                else{
                    // Display Error Message
                    
                    $_SESSION['change-pwd'] = "<div class='fail'>Failed to change the password  </div>";
                    // Redirect the user
                    header('location:'.SITEURL.'admin/manage-admin.php');
                    
                }
            } else {
                // echo"Password does not match";
                // Redirect to Manage admin page with error message
                $_SESSION['pwd-not-match'] = "<div class='fail'>Password Did not match. </div>";
                // Redirect the user
                header('location:'.SITEURL.'admin/manage-admin.php');
            }
        } else {
            // User Does not exist set message and redirect
            $_SESSION['user-not-found'] = "<div class='fail'>User Not Found </div>";
            // Redirect the User 
            header('location:' . SITEURL . 'admin/manage-admin.php');
        }
    }
    // 3. Check Whether the new password and cofirm password or not
    // 4. Change password if all above is true
}
?>

<?php include('partials/footer.php') ?>