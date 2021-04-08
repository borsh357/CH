<?php require_once './parts/header.php' ?>
<section class="content">
  <div class="container">
    <h1 class="text-center">Отзывы о нашей работе</h1>
    <p>На этой странице Вы можете почитать отзывы наших клиентов о проделанной работе. Если Вы уже стали нашим клиентом
      и Вам есть чем поделиться, то Вы можете <a href="#send-feedback-form">оставить свой отзыв</a>.</p>

    <div class="front-page-last-feedback">
      <?php require_once './api/get-feedback-all.php' ?>
    </div>

    <div class="leave-feedback-block">
      <script src="https://www.google.com/recaptcha/api.js" async defer />
      <form id="send-feedback-form" action="#" method="Post" enctype='multipart/form-data'>
        <input name="name" type="text" placeholder="Имя" required>
        <textarea name="content" cols="30" rows="10" placeholder="Отзыв" required></textarea>
        <label>
          Аватар:
          <input id="user-image" name="image" type="file">
        </label>
        <div class="g-recaptcha" data-sitekey="6LekfaEaAAAAAPhnx_L9dgE_DgfLNeR7JZw1Yu_6" />
        <input type="submit">
      </form>
    </div>
</section>
<?php require_once './parts/footer.php' ?>