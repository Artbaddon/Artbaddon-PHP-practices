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
    <title>Admin - Delipizza</title>
</head>

<body>

    <div class="main-container">
        <?php include "../components/admin-header.php"; ?>
        <section>
            <div class="form-container" id="admin_login">
                <form action="" method="post" enctype="multipart/form-data">
                    <h3>Registro de admin</h3>
                    <div class="input-field">
                        <label for="name">Nombre Completo <sup>*</sup></label>
                        <input type="text" name="name" maxlength="20" required placeholder="Ingrese nombre completo" oninput="this.value.replace(/\s/g,'')">
                    </div>
                    <div class="input-field">
                        <label for="email"> Email <sup>*</sup></label>
                        <input type="email" name="email" maxlength="25" required placeholder="Ingrese su email" oninput="this.value.replace(/\s/g,'')">
                    </div>
                    <div class="input-field">
                        <label for="password">Contraseña<sup>*</sup></label>
                        <input type="text" name="pass" maxlength="20" required placeholder="Ingrese su Contraseña" oninput="this.value.replace(/\s/g,'')">
                    </div>
                    <div class="input-field">
                        <label for="password">Confirme la Contraseña<sup>*</sup></label>
                        <input type="text" name="cpass" maxlength="20" required placeholder="Confirme su Contraseña" oninput="this.value.replace(/\s/g,'')">
                    </div>

                </form>
            </div>
        </section>
    </div>

</body>

</html>