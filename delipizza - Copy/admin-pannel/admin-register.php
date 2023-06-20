<?php
include '../components/connect.php';


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
    <title>Registro - Admin - Delipizza</title>
</head>

<body>

    <div class="main-container">

        <section>
            <div class="form-container" id="admin_login">
                <form action="" method="post" enctype="multipart/form-data">
                    <h3>Registro de admin</h3>
                    <div class="input-field">
                        <label for="name">Nombre Completo <sup>*</sup></label>
                        <input type="text" name="name" maxlength="30" required placeholder="Ingrese nombre completo" oninput="this.value.replace(/\s/g,'')" pattern="^[a-zA-Z]+$">
                    </div>
                    <div class="input-field">
                        <label for="email"> Email <sup>*</sup></label>
                        <input type="email" name="email" maxlength="25" required placeholder="Ingrese su email" oninput="this.value.replace(/\s/g,'')">
                    </div>
                    <div class="input-field">
                        <label for="password">Contraseña<sup>*</sup></label>
                        <input type="password" name="pass" maxlength="20" required placeholder="Ingrese su Contraseña" oninput="this.value.replace(/\s/g,'')">
                    </div>
                    <div class="input-field">
                        <label for="password">Confirme la Contraseña<sup>*</sup></label>
                        <input type="password" name="cpass" maxlength="20" required placeholder="Confirme su Contraseña" oninput="this.value.replace(/\s/g,'')">
                    </div>
                    <div class="input-field">
                        <label for="profile-p">Imagen De Perfil</label>
                        <input type="file" name="profile-p" accept="image/*">

                    </div>
                    <input type="submit" name="submit" value="Registrarse Ahora" class="btn">
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