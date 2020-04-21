<?php
  session_start();
  if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == 1) {
    require_once 'admin-header.php';
    echo '<section class="content">
            <div class="container">
              <h2>Вы вошли как администратор.</h2>
            </div>
          </section>
          </body>  
          </html>';
  } else {
    echo '<form id="login-form" action="login.php" method="post">
      <input type="text" name="username" placeholder="Login" minlength="4" maxlength="15">
      <input type="password" name="password" minlength="4" maxlength="15">
      <input type="submit" value="Log in">
    </form>';
  }
?>