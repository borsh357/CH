<?php
session_start();
if ($_SESSION['loggedin'] == 1) {
  require_once 'admin-header.php';
  require_once 'pdo.php';
} else {
  header('Location: admin.php');
}
require_once $_SERVER['DOCUMENT_ROOT'] . '/globals.php'
?>

<section class="content">
  <div class="container">
    <div class="admin-siteparams">

      <div class="admin-siteparams-param">
        <form method="POST" action="siteparams-update.php">
          <p>
            <span>Заголовок сайта</span>
            <small>Отображается на вкладке браузера и в качестве названия сайта в поисковике</small>
          </p>
          <textarea name="siteparams-title"><?php echo $GLOBALS['title'] ?></textarea>
          <button type="submit">Сохранить</button>
        </form>
      </div>

      <div class="admin-siteparams-param">
        <form method="POST" action="siteparams-update.php">
          <p>
            <span>Описание сайта</span>
            <small>Отображается в качестве описания сайта в поисковике</small>
          </p>
          <textarea name="siteparams-description"><?php echo $GLOBALS['description'] ?></textarea>
          <button type="submit">Сохранить</button>
        </form>
      </div>

      <div class="admin-siteparams-param">
        <form method="POST" action="siteparams-update.php">
          <p>
            <span>Ключевые слова</span>
            <small>Используются для нахождения сайта при поиске в поисковике</small>
          </p>
          <textarea name="siteparams-keywords"><?php echo $GLOBALS['keywords'] ?></textarea>
          <button type="submit">Сохранить</button>
        </form>
      </div>

      <div class="admin-siteparams-param">
        <form method="POST" action="siteparams-update.php">
          <p>
            <span>Телефон для связи</span>
            <small>Отображается на страницах сайта для клиентов</small>
          </p>
          <textarea name="siteparams-phoneNum"><?php echo $GLOBALS['phoneNum'] ?></textarea>
          <button type="submit">Сохранить</button>
        </form>
      </div>

      <div class="admin-siteparams-param">
        <form method="POST" action="siteparams-update.php">
          <p>
            <span>Адрес организации</span>
            <small>Отображается на страницах сайта для клиентов</small>
          </p>
          <textarea name="siteparams-address"><?php echo $GLOBALS['address'] ?></textarea>
          <button type="submit">Сохранить</button>
        </form>
      </div>

    </div>
  </div>
</section>
</body>

</html>