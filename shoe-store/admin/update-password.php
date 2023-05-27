<?php include('partials/menu.php') ?>

<div class="main-content">
    <div class="wrapper">
        <h1>Change Password</h1>
        <br /> <br />

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
              
            </table>
        </form>
    </div>
</div>

<?php include('partials/footer.php') ?>