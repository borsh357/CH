<?php
session_start();
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == 1) {
  require_once 'admin-header.php';
  require_once 'pdo.php';

  $have_new_calls = getSingleValue($pdo, 'SELECT count(*) from `callback` WHERE `status` = 0');
  $have_new_feedback = getSingleValue($pdo, 'SELECT count(*) from `feedback` WHERE `approved` = 0');
  $callback_warning_str = '';
  $feedback_warning_str = '';

  if ($have_new_calls > 0) {
    $callback_warning_str = '<h3 style="color:red">У Вас есть новые заявки на звонок от клиентов!</h3>';
  }

  if ($have_new_feedback > 0) {
    $feedback_warning_str = '<h3 style="color:red">У Вас есть неподтвержденные отзывы клиентов!</h3>';
  }


  echo '<section class="content">
            <div class="container">
              <h2>Вы вошли как администратор.</h2>
              ' . $callback_warning_str . $feedback_warning_str . '
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