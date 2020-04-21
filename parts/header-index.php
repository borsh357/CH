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

  <section class="header">
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
        <h1 class="text-center">Ремонт, отделка квартир в Йошкар-Оле быстро и качественно!</h1>
      </div>

      <div class="header-bottom-line">


        <div class="mask">
          <div class="container">
            <p>Выполним любые выди работ! Отделка, перепланировка, утепление, шумоизоляция, замена полов, наливной пол,
              теплый пол, сантехнические работы, натяжные потолки, выравнивание стен, возведение перегородок, установка
              пластиковых окон, установка межкомнатных и входных дверей, ремонт кухни, монтаж водопровода, отопления,
              электрики. Нам по силам любые работы! Вы можете заказать ремонт отдельной комнаты или всей квартиры "под
              ключ", или конкретно интересующую вас услугу. Подробнее по телефону <a
                href="tel:+7(937)-939-50-70">+7(937)-939-50-70</a>.</p>
          </div>
        </div>
        <?php require_once './parts/cards.php' ?>
      </div> <!--  end of header-bg -->
  </section>
  <!-- end of header section -->