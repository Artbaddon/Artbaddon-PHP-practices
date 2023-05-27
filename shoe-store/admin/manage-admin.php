<?php include('partials/menu.php'); ?>


<!-- Main Section Starts -->
<main class="main-content">
    <div class="wrapper">
        <h1>Manage Admin</h1>
        <br /> <br />

        <?php
        if (isset($_SESSION['add'])) {
            echo $_SESSION['add']; //Displaying Session msg
        }
        unset($_SESSION['add']); //Removing Session msg

        if (isset($_SESSION['delete'])){
            echo $_SESSION['delete'];
            unset($_SESSION['delete']);
        }

        if (isset($_SESSION['update']))
        {
            echo $_SESSION['update'];
            unset($_SESSION['update']);
        }
           
        
        ?>
        <br /><br />

        <!--Button TO add Admin  -->
        <a href="add-admin.php" class="btn-primary ">Add admin</a>
        <br /><br />
        <table class="tbl-full">
            <tr>
                <th>S.N</th>
                <th>Full Name</th>
                <th>Username</th>
                <th>Action</th>
            </tr>


            <?php
            // Query to get All admin
            $sql = "SELECT * FROM tbl_admin";
            // Execute the query
            $res = mysqli_query($conn, $sql);
            // Check whether the query is on or not
            if ($res == TRUE) {
                // Count ROws to check if we have data in our db or not
                $count = mysqli_num_rows($res);

                if ($count > 0) {

                    while ($rows = mysqli_fetch_assoc($res)) {
                        // Using While loop to get the data from DB
                        // And while loop will run as long as we have data un our db
                        // Get individual data
                        $id = $rows['id'];
                        $full_name = $rows['full_name'];
                        $username = $rows['username'];
                        // Display the values
            ?>
                        <tr>
                            <td><?php echo $id ?> </td>
                            <td><?php echo $full_name ?> </td>
                            <td><?php echo $username ?></td>
                            <td> <a href="<?php echo SITEURL; ?>admin/update-password.php?id=<?php echo $id; ?>" class="btn-primary">Change Password</a>
                                <a href="<?php echo SITEURL; ?>admin/update-admin.php?id=<?php echo $id; ?>" class="btn-secondary">Update Admin</a>
                                <a href="<?php echo SITEURL; ?>admin/delete-admin.php?id=<?php echo $id; ?>" class="btn-danger">Delete Admin</a>
                            </td>
                        </tr>

            <?php
                    }
                }
            }
            ?>
        </table>

    </div>
</main>
<!-- Main Section Ends -->

<?php include('partials/footer.php'); ?>