<?php
// Include constants to the php mysql connect
include "../config/constants.php";
//1. Get the iD of admin to be deleted;

$id = $_GET['id'];

//2. Create sql query to Delte Admin;
$sql = "DELETE FROM tbl_admin WHERE id=$id";

// Execute query
$res = mysqli_query($conn, $sql);
// Check wether the query executed succesfully or not
if ($res == true) {

    // Query escecuted succesfully an admin deleted
    // echo "Admin Deleted";
    // Crate session variable to display message
    $_SESSION['delete'] = "<div class='succes'>Admin Deleted Succesfully</div>";
    header('location:' . SITEURL . 'admin/manage-admin.php');
} else {
    //Failed to delete admin
    // echo "Failed To Delete Admin";
    $_SESSION['delete'] = "<div class='fail'>Failed to delete admin try again</div>";
    header('location:' . SITEURL . 'admin/manage-admin.php');
}
        //3. Redirect to Manage Admin Page with message(succes/error)
