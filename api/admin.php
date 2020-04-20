<section class="content">
  <div class="container">
    <?php
      session_start();
      if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == 1) {
        echo '<h2>Вы вошли как администратор.</h2>';
        require_once 'admin-header.php';
      } else {
        echo '<form id="login-form" action="login.php" method="post">
          <input type="text" name="username" placeholder="Login" minlength="4" maxlength="15">
          <input type="password" name="password" minlength="4" maxlength="15">
          <input type="submit" value="Log in">
        </form>';
      }
      ?>
  </div>
</section>
</body>

</html>