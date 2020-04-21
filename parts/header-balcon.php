<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description"
    content="ИП Чернигин Е.А. предоставляет услуги по ремонту и отделке квартир, ремонту санузлов, балконов и лоджий в Йошкар-Оле">
  <meta name="keywords"
    content="ремонт, отделка, ремонт квартир, отделка кварир, ремонт лофт, отделка лофт, ремонт Йошкар-Ола, отделка квартир в Йошкар-Оле, балкон Йошкар-Ола">
  <title>Ремонт, отделка квартир в Йошкар-Оле</title>
  <link href="https://fonts.googleapis.com/css?family=Ubuntu&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/hamburger.css">
  <link rel="stylesheet" href="css/screens.css">
  <script src="js/jquery.min.js"></script>
</head>

<body>
  <?php require_once './parts/side-menu.php' ?>

  <section class="header-balcon">
    <div class="header-bg">
      <div class="container">
        <div class="header-top-line">
          <div class="flex-row site-branding">
            <a href="index"><img src="img/logo.svg" alt="logo"></a>
            <div class="flex-col header-contact">
              <span>+7(937)-939-50-70</span>
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
        <h1 class="text-center">Остекление балконов в Йошкар-Оле</h1>
        <p class="text-center">Остекление и отделка балконов и лоджий по доступной цене!</p>
        <div class="balcon-buttons-row">
          <a href="#callback-block"><button class="balcon-btn-call">Оставить заявку</button></a>
          <a href="#about-balcon-numbers"><button class="balcon-btn-show-more">Узнать подробнее</button></a>
        </div>
      </div> <!--  end of header container -->
    </div> <!--  end of header-bg -->
  </section>
  <!-- end of header section -->