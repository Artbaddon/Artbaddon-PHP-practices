<?php
include '../components/connect.php';


session_start();
$admin_id = $_SESSION['admin_id'];
if (!isset($admin_id)) {
    header('location:admin-login.php');
}

if (isset($_POST['submit'])) {
    //Actualizar nombre
    $name = $_POST['name'];
    $name = htmlspecialchars($name);
    if (!empty($name)) {
        $select_name = $conn->prepare("SELECT * FROM administrador WHERE nombre_Admin = ?");
        $select_name->execute([$name]);

        if ($select_name->rowCount() > 0) {
            $warning_msg[] = 'El nombre de usuario ya existe';
        } else {
            $update_admin = $conn->prepare("UPDATE administrador SET nombre_Admin = ? WHERE ID_Administrador = ?");
            $update_admin->execute([$name, $admin_id]);
            $success_msg[] = 'Nombre de usuario actualizado';
        }
    }
    //Actualizar email
    $email = $_POST['email'];
    $name = htmlspecialchars($email);
    if (!empty($email)) {
        $select_name = $conn->prepare("SELECT * FROM administrador WHERE email_Admin = ?");
        $select_name->execute([$email]);

        if ($select_name->rowCount() > 0) {
            $warning_msg[] = 'El email ya existe';
        } else {
            $update_admin = $conn->prepare("UPDATE administrador SET email_Admin = ? WHERE ID_Administrador = ?");
            $update_admin->execute([$email, $admin_id]);
            $success_msg[] = 'Email actualizado';
        }
    }
    //Actualizar foto
    $old_image = $_POST['old_img'];
    $image = $_FILES['profile-p']['name'];
    $image = htmlspecialchars($image);
    $image_tmp_name = $_FILES['profile-p']['tmp_name'];
    $image_folder = '../uploaded-img/' . $image;

    $update_image = $conn->prepare("UPDATE administrador SET foto = ? WHERE ID_Administrador = ?");
    $update_image->execute([$image, $admin_id]);
    move_uploaded_file($image_tmp_name, $image_folder);
    if ($old_image != $image && $old_image != '') {
        unlink('../uploaded-img/' . $old_image);
    }
    //Actualizar contraseña
    $empty_password = 'da39a3ee5e6b4b0d3255bfef95601890afd80709';
    $select_old_pass = $conn->prepare("SELECT contraseña_Admin FROM administrador WHERE ID_Administrador = ?");
    $select_old_pass->execute([$admin_id]);

    $fetch_prev_pass = $select_old_pass->fetch(PDO::FETCH_ASSOC);
    $prev_pass = $fetch_prev_pass['contraseña_Admin'];

    $old_pass = sha1($_POST['old_pass']);
    $old_pass = htmlspecialchars($old_pass);

    $new_pass = sha1($_POST['new_pass']);
    $new_pass = htmlspecialchars($new_pass);

    $cpass = sha1($_POST['cpass']);
    $cpass = htmlspecialchars($cpass);

    if ($prev_pass != $empty_password) {
        if ($old_pass != $prev_pass) {
            $warning_msg[] = 'Contraseña anterior incorrecta';
        } elseif ($new_pass != $cpass) {
            $warning_msg[] = 'Las contraseñas no coinciden';
        } else {
            if ($new_pass != $empty_password) {
                $update_pass = $conn->prepare("UPDATE administrador SET contraseña_Admin = ? WHERE ID_Administrador = ?");
                $update_pass->execute([$new_pass, $admin_id]);
                $success_msg[] = 'Contraseña actualizada correctamente';
            }else{
                $warning_msg[] = 'Por favor ingrese una nueva contraseña';
            }
        }
    }
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
    <title>Admin - Actualizar Datos</title>
</head>

<body>

    <div class="main-container">
        <?php include '../components/admin-header.php'; ?>
        <section>
            <div class="form-container" id="admin_login">
                <form action="" method="post" enctype="multipart/form-data">
                    <div class="profile">
                        <img src="../uploaded-img/<?= $fetch_profile['foto']; ?>" alt="" class="logo-img">
                    </div>
                    <h3>Actualizar Datos</h3>
                    <input type="hidden" name="old_img" value="<?= $fetch_profile['foto']; ?>">
                    <div class="input-field">
                        <label for="name">Nombre Completo <sup>*</sup></label>
                        <input type="text" name="name" maxlength="30" placeholder="Ingrese nombre completo" oninput="this.value.replace(/\s/g,'')" value="<?= $fetch_profile['nombre_Admin']; ?>">
                    </div>
                    <div class="input-field">
                        <label for="email"> Email <sup>*</sup></label>
                        <input type="email" name="email" maxlength="25" placeholder="Ingrese su email" oninput="this.value.replace(/\s/g,'')" value="<?= $fetch_profile['email_Admin']; ?>">
                    </div>

                    <div class="input-field">
                        <label for="password">Contraseña Antigua<sup>*</sup></label>
                        <input type="password" name="old_pass" maxlength="20" placeholder="Ingrese Su Antigua Contraseña" oninput="this.value.replace(/\s/g,'')">
                    </div>
                    <div class="input-field">
                        <label for="password">Nueva Contraseña<sup>*</sup></label>
                        <input type="password" name="new_pass" maxlength="20" placeholder="Ingrese su Nueva Contraseña" oninput="this.value.replace(/\s/g,'')">
                    </div>
                    <div class="input-field">
                        <label for="password">Confirme la Contraseña<sup>*</sup></label>
                        <input type="password" name="cpass" maxlength="20" placeholder="Confirme su Contraseña" oninput="this.value.replace(/\s/g,'')">
                    </div>
                    <div class="input-field">
                        <label for="profile-p">Imagen De Perfil</label>
                        <input type="file" name="profile-p" accept="image/*">

                    </div>
                    <input type="submit" name="submit" value="Actualizar Datos" class="btn">
                    <p>¿ya tiene cuenta? logueese <a href="admin-login.php">aqui</a>
                    </p>

                </form>
            </div>
        </section>
    </div>
    <?php include '../components/dark.php'; ?>
    <!-- Sweet alert script -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <!-- Custom JS -->
    <script src="script.js"></script>
    <?php include '../components/alert.php'; ?>

</body>

</html>