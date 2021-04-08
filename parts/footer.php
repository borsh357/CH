<div class="callback-block-bg">
  <div class="callback-block-bg-mask">
    <div class="container">
      <div id="callback-block" class="callback-block">
        <div class="callback-block-phone">
          <p>Звоните прямо сейчас</p>
          <a href="tel:+7(937)-939-50-70">+7(937)-939-50-70</a>
        </div>
        <div class="callback-block-or">или</div>
        <div class="callback-block-modal-block">
          <script src="https://www.google.com/recaptcha/api.js" async defer></script>
          <div class="callback-modal-body">
            <form id="callback-form" action="#">
              <input name="name" type="text" placeholder="Ваше имя" required minlength=2 maxlength=20>
              <input name="phone" type="text" placeholder="Телефон" required minlength=6 maxlength=18>
              <div class="g-recaptcha" data-sitekey="6LekfaEaAAAAAPhnx_L9dgE_DgfLNeR7JZw1Yu_6"></div>
              <input type="submit" value="Отправить">
            </form>
            <small>Оставьте заявку и мы Вам перезвоним</small>

            <script>
            $('#callback-form').submit(function(e) {
              e.preventDefault();
              var data = $('#callback-form').serialize();
              data += '&ajax=true';
              $.post("api/send-callback.php", data)
                .done(function(data) {
                  alert(data);
                  $('#callback-form').find("input[type=text]").val("");
                  grecaptcha.reset();
                });
            });
            </script>
          </div>
        </div>
      </div>
    </div>

    <section class="footer">
      <div class="container footer-content">
        <ul class="footer-menu">
          <?php require './parts/nav-links.php' ?>
        </ul>

        <div class="text-center bc-logo-link">
          <a href="https://www.balkonservis12.com/" target="_blank">
            <img src="img/balconservicelogo.svg" alt="balconservice">
          </a>
          <p>©2020 ИП Чернигин Е.А.</p>
        </div>
      </div>
    </section>

  </div>
</div>
<script src="../js/main.js"></script>
</body>

</html>