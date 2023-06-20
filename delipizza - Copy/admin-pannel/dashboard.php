
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
                    <p>Nombre Admin</p>


                    <a href="update-profile.php" class="btn">Actualizar Perfil</a>
                </div>
                <div class="box">
                    

                    <h3>0</h3>
                    <p>productos añadidos</p>
                    <a href="add-products.php" class="btn">Añadir nuevos productos</a>


                </div>
                <div class="box">
                 
                    <h3>0</h3>
                    <p>Total productos activos</p>
                    <a href="view-products.php" class="btn">Ver productos</a>


                </div>
                <div class="box">
                   
                    <h3>0</h3>
                    <p>Post Inactivos</p>
                    <a href="add-products.php" class="btn">Ver productos</a>
                </div>
                <div class="box">
                    
                    <h3>0</h3>
                    <p>Categorias</p>
                    <a href="add-category.php" class="btn">Añadir categorias</a>
                </div>
                <div class="box">
                   
                    <h3>0</h3>
                    <p>Cuentas de Usuario</p>
                    <a href="user-accounts.php" class="btn">Ver usuarios</a>

                </div>
                <div class="box">
                 
                    <h3>0</h3>
                    <p>Numero de administradores</p>
                    <a href="user-accounts.php" class="btn">Ver admins</a>
                </div>
                <div class="box">
                  
                    <h3>0</h3>
                    <p>Ordenes canceladas</p>
                    <a href="admin-order.php" class="btn">Ver ordenes</a>
                </div>
                <div class="box">
            
                    <h3>0</h3>
                    <p>Ordenes confirmadas</p>
                    <a href="admin-order.php" class="btn">Ver ordenes</a>
                </div>
                <div class="box">
                  
                    <h3>0</h3>
                    <p>Total ordenes</p>
                    <a href="admin-order.php" class="btn">Ver ordenes</a>
                </div>
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