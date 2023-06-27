<?php
include '../components/connect.php';


session_start();
$user_id = $_SESSION['user_id'];
if (!isset($user_id)) {
    header('location:user-login.php');
}

if (isset($_POST['submit'])) {
    //Actualizar nombre
    $name = $_POST['name'];
    $name = htmlspecialchars($name);
    if (!empty($name)) {
        $select_name = $conn->prepare("SELECT * FROM usuario WHERE email_Usuario = ?");
        $select_name->execute([$name]);

        if ($select_name->rowCount() > 0) {
            $warning_msg[] = 'El email de usuario ya existe';
        } else {
            $update_admin = $conn->prepare("UPDATE usuario SET nombre_Usuario = ? WHERE ID_Usuario = ?");
            $update_admin->execute([$name, $user_id]);
            $success_msg[] = 'Nombre de usuario actualizado';
        }
    }
    //Actualizar email
    $email = $_POST['email'];
    $name = htmlspecialchars($email);
    if (!empty($email)) {
        $select_name = $conn->prepare("SELECT * FROM usuario WHERE email_Usuario = ?");
        $select_name->execute([$email]);

        if ($select_name->rowCount() > 0) {
            $warning_msg[] = 'El email ya existe';
        } else {
            $update_user = $conn->prepare("UPDATE usuario SET email_Usuario = ? WHERE ID_Usuario = ?");
            $update_user->execute([$email, $user_id]);
            $success_msg[] = 'Email actualizado';
        }
    }
    //Actualizar foto
    $old_image = $_POST['old_img'];
    $image = $_FILES['profile-p']['name'];
    $image = htmlspecialchars($image);
    $image_tmp_name = $_FILES['profile-p']['tmp_name'];
    $image_folder = '../uploaded-img/clientes/' . $image;

    $update_image = $conn->prepare("UPDATE usuario SET foto = ? WHERE ID_Usuario = ?");
    $update_image->execute([$image, $user_id]);
    move_uploaded_file($image_tmp_name, $image_folder);
    if ($old_image != $image && $old_image != '') {
        unlink('../uploaded-img/clientes/' . $old_image);
    }
    //Actualizar contraseña
    $empty_password = 'da39a3ee5e6b4b0d3255bfef95601890afd80709';
    $select_old_pass = $conn->prepare("SELECT contraseña_Usuario FROM usuario WHERE ID_Usuario = ?");
    $select_old_pass->execute([$user_id]);

    $fetch_prev_pass = $select_old_pass->fetch(PDO::FETCH_ASSOC);
    $prev_pass = $fetch_prev_pass['contraseña_Usuario'];

    $old_pass = sha1($_POST['old_pass']);
    $old_pass = htmlspecialchars($old_pass);

    $new_pass = sha1($_POST['new_pass']);
    $new_pass = htmlspecialchars($new_pass);

    $cpass = sha1($_POST['cpass']);
    $cpass = htmlspecialchars($cpass);

    if ($prev_pass != $empty_password) {

        if ($old_pass != $prev_pass) {
            $warning_msg[] = 'Contraseña anterior incorrecta';
            echo 'contraseña anterior incorrecta';
        } elseif ($new_pass != $cpass) {
            $warning_msg[] = 'Las contraseñas no coinciden';
            echo 'las contraseñas no coinciden';
        } else {
            if ($new_pass != $empty_password) {
                $update_pass = $conn->prepare("UPDATE usuario SET contraseña_Usuario = ? WHERE ID_Usuario = ?");
                $update_pass->execute([$new_pass, $user_id]);
                $success_msg[] = 'Contraseña actualizada correctamente';
            } else {
                $warning_msg[] = 'Por favor ingrese una nueva contraseña';
            }
        }
    }
}


?>

<style>
    <?php include '../css/style.css'; ?>
</style>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Box Icon CDN list  -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <title>Actualizar Datos - Usuario</title>
</head>

<body>

    <div class="main-container">
        <?php
        include '../components/general-header.php';
        ?>
        <aside class="aside-bar">
            <div class="side-container">
                <div class="sidebar">
                    <?php

                    $select_profile = $conn->prepare("SELECT * FROM usuario WHERE ID_Usuario = ?");
                    $select_profile->execute([$user_id]);

                    if ($select_profile->rowCount() > 0) {
                        $fetch_profile = $select_profile->fetch(PDO::FETCH_ASSOC);

                    ?>
                        <div class="profile">
                            <img src="../uploaded-img/Clientes/<?= $fetch_profile['foto'] ?>" alt="" class="logo-img" width="100">
                            <p><?= $fetch_profile['nombre_Usuario'];   ?></p>
                        </div>
                    <?php } ?>
                    <h5>Menu</h5>
                    <div class="navbar">
                        <ul>
                            <li><a href="profile.php"><i class="bx bxs-home-smile"></i>Editar Datos perfil</a></li>
                            <li><a href="orders.php"><i class="bx bxs-home-smile"></i>Historial Pedidos</a></li>

                            <li><a href="../components/admin-logout.php" onclick="return confirm('¿Salir del sitio?')"><i class="bx bx-log-out"></i> Salir</a></li>
                        </ul>
                    </div>

                </div>
        </aside>

        <section id="historial-pedidos">
            <div class="table-container">
                <h3>Historial de Pedidos</h3>


                <table class="table">
                    <thead>
                        <tr>
                            <th>ID ORDEN</th>
                            <th>Fecha</th>
                            <th>Estado</th>
                            <th>Producto</th>
                            <th>Cantidad</th>
                            <th>Precio</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $select_orders = $conn->prepare("SELECT * FROM pedido WHERE ID_Usuario_pedido  = ? ");
                        $select_orders->execute([$user_id]);


                        if ($select_orders->rowCount() > 0) {
                            while ($fetch_orders = $select_orders->fetch(PDO::FETCH_ASSOC)) {
                                $select_product = $conn->prepare("SELECT * FROM producto WHERE ID_Producto = ?");
                                $select_product->execute([$fetch_orders['ProductoID']]);
                                $fetch_product = $select_product->fetch(PDO::FETCH_ASSOC);

                                $select_order_detail = $conn->prepare("SELECT * FROM detalles_orden WHERE ID_Orden=?");
                                $select_order_detail->execute([$fetch_orders['ID_Pedido']]);
                                $fetch_order_detail = $select_order_detail->fetch(PDO::FETCH_ASSOC);
                        ?>

                                <tr>
                                    <td><?= $fetch_order_detail['ID_Orden']; ?></td>

                                    <td><?= $fetch_order_detail['fecha_Orden']; ?></td>
                                    <td><?= $fetch_order_detail['estado']; ?></td>
                                    <td><?= $fetch_product['nombre_Producto']; ?></td>
                                    <td><?= $fetch_orders['cantidad']; ?></td>
                                    <td>$<?= $fetch_orders['precio']; ?></td>


                                </tr>
                            <?php }
                        } else { ?>
                            <tr>
                                <td colspan="3">No hay pedidos</td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>

        </section>
    </div>
    <?php include '../components/dark.php'; ?>
    <!-- Sweet alert script -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <!-- Custom JS -->
    <script src="../js/script1.js"></script>
    <?php include '../components/alert.php'; ?>

</body>

</html>