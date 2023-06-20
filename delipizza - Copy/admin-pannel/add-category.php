<?php

include '../components/connect.php';
if(isset($_POST['publish'])){
    $success_msg[] = 'Categoria añadida';
    
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
        <section class="post-editor">

            <h1 class="heading">Añadir Categoria</h1>
            <div class="form-container">
                <form action="" method="post" enctype="multipart/form-data">
                    <div class="input-field">
                        <label for="title">Nombre categoria</label>
                        <input type="text" name="title" id="title" placeholder="Nombre categoria" maxlength="30" required>
                    </div>

                    <div class="input-field">
                        <label for="description">Descripción</label>
                        <textarea name="description" id="description" cols="30" rows="10" placeholder="Descripción" required></textarea>
                    </div>

                    <div class="input-field">
                        <label for="image">Imagen</label>
                        <input type="file" name="image" id="image" required>
                    </div>
                    <div class="input-field">
                        <input type="submit" name="publish" value="añadir categoria" class="btn">

                    </div>
                </form>
            </div>
        </section>
    </div>

    <?php include '../components/dark.php'; ?>
    <script src="script.js"></script>
    <!-- Sweet alert script -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <?php include '../components/alert.php'; ?>

</body>

</html>