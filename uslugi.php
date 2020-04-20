<?php require_once './parts/header.php' ?>
<section class="content">
  <div class="container">
    <h1 class="text-center">Услуги компании CherniginHouse</h1>
    <p>Наши мастера выполняют десятки видов различных услуг по отделке, монтажу, демонтажу, строительству, ремонту и
      плановому обслуживанию. Для нас практически нет невыполнимых задач. На этой странице Вы можете ознакомиться с
      подробным прайс-листом предоставляемых услуг. Если Вы не нашли интересующую Вас услугу в прайс-листе, Вы можете
      обсудить это с нашим менеджером.</p>
    <div class="pricelist">
      <?php require './api/get-pricelist.php' ?>
    </div>
  </div>
  </div>
</section>
<?php require_once './parts/footer.php' ?>