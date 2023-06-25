<header class="navbar">
    <div class="container">
        <div class="logo">
            <a href="index.php">
                <img src="../image/Delipizza-logo-final.jpg" alt="" class="img-responsive" />
            </a>
        </div>
        <nav class="menu text-left">

            <ul>
                <li>
                    <a href="index.php">Inicio</a>
                </li>
                <li>
                    <a href="menu.php">Menu</a>
                </li>
                <li>
                    <a href="profile.php">Perfil</a>
                </li>
                <li>
                    <div class="bx bxs-user" id="user-btn"></div>
                </li>
                <li>
                    <div class="cart-btn bx bxs-cart"></div>
                </li>
            </ul>
        </nav>
        <div class="profile-detail">
            <?php
            $select_profile = $conn->prepare("SELECT * FROM usuario WHERE ID_Usuario = ?");
            $select_profile->execute([$user_id]);
            if ($select_profile->rowCount() > 0) {
                $fetch_profile = $select_profile->fetch(PDO::FETCH_ASSOC);

            ?>
                <div class="profile">
                    <img src="../uploaded-img/clientes/<?= $fetch_profile['foto']; ?>" alt="" class="logo-img" width="100">
                    <p><?= $fetch_profile['nombre_Usuario'];   ?></p>
                </div>
                <div class="flex-btn">
                    <a href="update-profile.php" class="btn-profile">Actualizar Datos</a>
                    <a href="../components/user-logout.php" class="btn-profile" onclick="return confirm('Logout from the website' )">Logout</a>
                </div>
            <?php } ?>
        </div>

        <div class="clearfix"></div>

    </div>

</header>