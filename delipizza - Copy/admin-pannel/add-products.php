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
    <title>Admin - Dashboard - Delipizza</title>
</head>

<body>
    <div class="main-container">
        <?php include '../components/admin-header.php'; ?>
        <section class="post-editor">

            <h1 class="heading">Añadir Producto</h1>
            <div class="form-container">
                <form action="" method="post" enctype="multipart/form-data">
                    <div class="input-field">
                        <label for="title">Nombre producto</label>
                        <input type="text" name="title" id="title" placeholder="Nombre producto" maxlength="30" required>
                    </div>


                    <div class="input-field">
                        <label for="price">Precio</label>
                        <input type="number" name="price" id="price" placeholder="Precio" required>
                    </div>
                    <div class="input-field">
                        <label for="description">Descripción</label>
                        <textarea name="description" id="description" cols="30" rows="10" placeholder="Descripción" required></textarea>
                    </div>
                    <div class="input-field">
                        <label for="category">Categoría</label>
                        <select name="category" id="category" required>
                            <option value="" selected disabled>Seleccione una categoría</option>
                            <option value="1">Destacados</option>
                            <option value="2">Pizzas</option>
                            <option value="3">Hamburguesas</option>
                            <option value="4">Salchipapas</option>
                            <option value="5">Acompañamientos</option>
                            <option value="6">Perros Calientes</option>
                            <option value="7">Panzerottis</option>
                            <option value="8">Lasañas</option>
                            <option value="9" s>Mazorcadas</option>
                        </select>

                    </div>
                    <div class="input-field">
                        <label for="state">Estado</label>
                        <select name="state" id="state" required>
                            <option value="" selected disabled>Seleccione un estado</option>
                            <option value="activo">Activo</option>
                            <option value="inactivo">Inactivo</option>
                        </select>
                    </div>
                    <div class="input-field">
                        <label for="image">Imagen</label>
                        <input type="file" name="image" id="image" required>
                    </div>
                    <div class="input-field">
                        <input type="submit" name="publish" value="Publicar Producto" class="btn">
                        <input type="submit" name="draft" value="Guardar borrador" class="btn">
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