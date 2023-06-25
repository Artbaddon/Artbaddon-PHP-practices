<?php
include '../components/connect.php';
session_start();

$user_id = $_SESSION['user_id'];
if (!isset($user_id)) {
  $warning_msg[] = 'Inicie sesion para continuar';
  header('location:user-login.php');
}

?>


<style>
  <?php include '../css/style.css'; ?>
</style>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />


  <title>foods store</title>
</head>

<body>
  <!-- Nav section stars here -->
  <?php
  include '../components/general-header.php';
  ?>
  <!-- Nav section ends here -->

  <!-- Search section stars here -->
  <?php
  include '../components/search.php';
  ?>
  <!-- Search section ends here -->


  <!-- Menu section stars here -->

  <section class="categories">

    <div class="container-menu">

      <form action="" method="post" class="float-container">
        <?php
        $select_category = $conn->prepare("SELECT * FROM categoria WHERE ID_Categoria != 1");
        $select_category->execute();
        $categories = $select_category->fetchAll(PDO::FETCH_ASSOC);
        foreach ($categories as $category) {
        ?>
          <h2><?= $category['nombre_Categoria'] ?></h2>


          <?php
          $select_product = $conn->prepare("SELECT * FROM producto  WHERE CategoriaID =? ");
          $select_product->execute([$category['ID_Categoria']]);
          $fetch_product = $select_product->fetchAll(PDO::FETCH_ASSOC);
          foreach ($fetch_product as $product) {
          ?>
            <div class="box-menu">
              <input type="hidden" name="product_id" value="<?= $product['ID_producto']; ?>">
              <input type="hidden" name="product_name" value="<?= $product['nombre_Producto']; ?>">
              <input type="hidden" name="product_price" value="<?= $product['precio_Producto']; ?>">

              <img src="../uploaded-img/productos/<?= $product['img_Producto']; ?>" alt="" class="img-product img-curve">
              <div class="title-container">
                <h4 class="title-product"><?= $product['nombre_Producto'] ?></h4>
              </div>
              <div class="cart-container">

                <input type="submit" name="add_to_cart" value="Agregar al carrito" class="add-cart">
              </div>

              <input type="number" name="quantity" id="quantity" value="1" min="1" max="10" class="quantity">
              <p class="food-price-menu">$<?= $product['precio_Producto'] ?></p>

            </div>
        <?php

          }
        }
        ?>
      </form>
    </div>
  </section>

  <!-- Menu section ends here -->

  <!-- Social section stars here -->

  <!-- Footer section stars here -->
  <section class="footer">
    <div class="container text-center">
      <p>All rights reserved. Designed By <a href="#">Artbaddon</a></p>
    </div>
  </section>
  <!-- Footer section stars here -->
</body>

</html>

<script src="../js/script1.js">


</script>
<!-- Sweet alert script -->
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<?php include '../components/alert.php'; ?>