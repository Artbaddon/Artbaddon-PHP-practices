<?php

include '../components/connect.php';
session_start();

$admin_id = $_SESSION['admin_id'];
if (!isset($admin_id)) {
    header('location:admin-login.php');
}

?>



<style>
    <?php include 'admin-style.css'; ?>
</style>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Box Icon CDN list  -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Admin - Dashboard - Delipizza</title>
</head>

<body>
    <div class="main-container">
        <?php include '../components/admin-header.php'; ?>
        <section class="dashboard">
            <h1 class="heading">Dashboard</h1>
            <div class="box-container">
                <div class="box">
                    <h3>¡ Bienvenido !</h3>
                    <p><?= $fetch_profile['nombre_Admin']; ?></p>


                    <a href="update-profile.php" class="btn">Actualizar Perfil</a>
                </div>
                <div class="box">
                    <?php
                    $select_post = $conn->prepare("SELECT * FROM producto");
                    $select_post->execute();
                    $total_post = $select_post->rowCount();
                    ?>

                    <h3><?= $total_post; ?></h3>
                    <p>productos añadidos</p>
                    <a href="add-products.php" class="btn">Añadir nuevos productos</a>


                </div>
                <div class="box">
                    <?php
                    $select_active_post = $conn->prepare("SELECT * FROM producto WHERE estado = ?");
                    $select_active_post->execute(['activo']);
                    $total_active_post = $select_post->rowCount();
                    ?>

                    <h3><?= $total_post; ?></h3>
                    <p>Total productos activos</p>
                    <a href="add-products.php" class="btn">Ver productos</a>


                </div>
                <div class="box">
                    <?php
                    $select_deactive_post = $conn->prepare("SELECT * FROM producto WHERE estado = ?");
                    $select_deactive_post->execute(['inactivo']);
                    $total_deactive_post = $select_deactive_post->rowCount();
                    ?>
                    <h3><?=$total_deactive_post?></h3>
                    <p>Post Inactivos</p>
                    <a href="add-products.php" class="btn">Ver productos</a>
                </div>
                <div class="box">
                    <?php
                    $select_users = $conn->prepare("SELECT * FROM usuario");
                    $select_users->execute();
                    $total_users = $select_users->rowCount();

                    ?>
                    <h3><?= $total_users ?></h3>
                    <p>Cuentas de Usuario</p>
                    <a href="user-accounts.php" class="btn">Ver usuarios</a>

                </div>
                <div class="box">
                    <?php
                    $select_admin = $conn->prepare("SELECT * FROM administrador");
                    $select_admin->execute();
                    $total_admin = $select_admin->rowCount();

                    ?>
                    <h3><?= $total_admin; ?></h3>
                    <p>Numero de administradores</p>
                    <a href="user-accounts.php" class="btn">Ver admins</a>
                </div>
                <div class="box">
                    <?php
                    $select_canceled_order = $conn->prepare("SELECT * FROM orden WHERE estado = ?");
                    $select_canceled_order->execute(['cancelado']);
                    $total_canceled_order = $select_canceled_order->rowCount();
                    ?>
                    <h3><?= $total_canceled_order; ?></h3>
                    <p>Ordenes canceladas</p>
                    <a href="admin-order.php" class="btn">Ver ordenes</a>    
                </div>
                <div class="box">
                    <?php
                    $select_confirm_order = $conn->prepare("SELECT * FROM orden WHERE estado = ?");
                    $select_confirm_order->execute(['En proceso']);
                    $total_confirm_order = $select_confirm_order->rowCount();

                  ?>
                    <h3><?= $total_confirm_order; ?></h3>
                    <p>Ordenes confirmadas</p>
                    <a href="admin-order.php" class="btn">Ver ordenes</a>
                </div>
                <div class="box">
                    <?php
                    $select_total_order = $conn->prepare("SELECT * FROM orden");
                    $select_total_order->execute();
                    $total_order = $select_total_order->rowCount();
                    ?>
                    <h3><?= $total_order; ?></h3>
                    <p>Total ordenes</p>
                    <a href="admin-order.php" class="btn">Ver ordenes</a>
                </div>
            </div>

        </section>
    </div>

    <?php include '../components/dark.php'; ?>
    <script src="script.js"></script>

</body>

</html>