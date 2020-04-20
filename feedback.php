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
      <form id="send-feedback-form" action="api/send-feedback.php" method="Post" enctype='multipart/form-data'>
        <input name="name" type="text" placeholder="Имя" required>
        <textarea name="content" cols="30" rows="10" placeholder="Отзыв" required></textarea>
        <label>
          Аватар:
          <input name="image" type="file">
        </label>
        <input type="submit">
      </form>
    </div>

</section>

<script>
$(function() {
  $('#send-feedback-form').find("input[type=text], input[type=file], textarea").val("");
})
</script>
<?php require_once './parts/footer.php' ?>