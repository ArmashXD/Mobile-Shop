<?php
 session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-commerce</title>
    <!-- Bootstrap Cdn -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
    <!-- Owl Carousel -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">

    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css">

    <!-- Custom css file -->
    <link rel="stylesheet" href="css/style.css">
    <?php
      require('functions.php')
    ?>

</head>
<body>

<header id="header">
      <div class="strip d-flex justify-content-between px-4 py-0 bg-light fixed">
          <p class="font-lato font-size-12 text-black-50">Lorem ipsum dolor sit amet consect</p>
          <div class="font-lato font-size-14">
              <a href="user/login.php" class="px-3 border-right border-left text-dark"><?php isset($_SESSION['login']) ? print('Logged In') : print('Login')?></a>
              <a href="#" class="px-3 border-right border-left text-dark">Wishlist</a>
              <a href="user/logout.php" class="px-3 border-right border-left text-dark"><?php isset($_SESSION['login'])? print('Logout') : print('')?></a>

          </div>
      </div>

      <!-- Primary Navigation -->
      <nav class="navbar navbar-expand-lg navbar-dark color-second-bg">
          <a class="navbar-brand" href="index.php">E-Commerce</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
        
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto font-lato">
              <li class="nav-item active">
                <a class="nav-link" href="sale.php">On Sale</a>
              </li>
              <li class="nav-item">
                <a class="nav-link " href="products.php">Products <i class="fa fa-mobile"></i></a>
              </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-warning" type="submit"><i class="fa fa-search"></i></button>
            </form>
            <form class="font-size-14 font-lato">
                <a href="cart.php" class="py-2 rounded-pill color-primary-bg">
                  <span class="font-size-16 px-2 text-white">
                      <i class="fas fa-shopping-cart"></i>
                  </span>
                  <span class="px-3 py-2 text-white rounded-pill text-dark bg-light">
                     <?php echo count($product->getData('cart')) ?? 0?>
                  </span>
                </a>
            </form>
          </div>
        </nav>
  </header>
      <!-- start main -->
      <main id="main">