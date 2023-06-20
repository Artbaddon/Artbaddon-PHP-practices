<?php
include '../components/connect.php';

if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $nombre = $_POST['name'];
    $password = $_POST['old_pass'];

    if ($email == 'ejemplo@gmail.com' or $nombre == 'Admin' and $password == 'admin') {
        $warning_msg[] = "Valores repetidos";
    }else{
        $success_msg[] = "Datos actualizados correctamente";

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
                        <img src="../uploaded-img/Zombatar_1.jpg" alt="" class="logo-img">
                    </div>
                    <h3>Actualizar Datos</h3>
                    <input type="hidden" name="old_img" value="">
                    <div class="input-field">
                        <label for="name">Nombre Completo <sup>*</sup></label>
                        <input type="text" name="name" maxlength="30" placeholder="Ingrese nombre completo" oninput="this.value.replace(/\s/g,'')" value="Admin" pattern="^[a-zA-Z]+$">
                    </div>
                    <div class="input-field">
                        <label for="email"> Email <sup>*</sup></label>
                        <input type="email" name="email" maxlength="25" placeholder="Ingrese su email" oninput="this.value.replace(/\s/g,'')" value="ejemplo@gmail.com">
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