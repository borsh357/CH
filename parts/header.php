<!DOCTYPE html>
<html lang="en">

<head>
  <?php require_once './globals.php' ?>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="<?php echo $GLOBALS['description'] ?>">
  <meta name="keywords" content="<?php echo $GLOBALS['keywords'] ?>">
  <title><?php echo $GLOBALS['title'] ?></title>
  <link href="https://fonts.googleapis.com/css?family=Ubuntu&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/hamburger.css">
  <link rel="stylesheet" href="css/screens.css">
  <script src="js/jquery.min.js"></script>
</head>

<body>
  <?php require_once './parts/side-menu.php' ?>

  <section class="header">
    <div class="header-bg">
      <div class="container">
        <div class="header-top-line">
          <div class="flex-row site-branding">
            <a href="index"><img src="img/logo.svg" alt="logo"></a>
            <div class="flex-col header-contact">
              <span><?php echo $GLOBALS['phoneNum'] ?></span>
              <a class="callback-link" href="#callback-block">Оставить заявку</a>
            </div>
          </div>
        </div>

        <div class="header-menu-line">
          <div class="header_menu">
            <ul>
              <?php require './parts/nav-links.php' ?>
            </ul>
          </div>
        </div>
        <h1 class="text-center">Ремонт, отделка квартир в Йошкар-Оле быстро и качественно!</h1>
      </div> <!--  end of header container -->
    </div> <!--  end of header-bg -->
  </section>
  <!-- end of header section -->