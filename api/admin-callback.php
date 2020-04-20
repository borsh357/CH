<?php
session_start();
if ($_SESSION['loggedin'] == 1) {
  require_once 'admin-header.php';
  require_once 'pdo.php';
} else {
  header('Location: admin.php');
}
?>

<section class="content">
  <div class="container">

    <?php
    $stmt = $pdo->prepare('SELECT * FROM `callback` ORDER BY id DESC');
    $stmt->execute();
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    foreach ($rows as $row => $value) {
    echo '
    <div class="admin-callback-item">
      <p>'.$value['name'].'</p>
      <p>'.$value['phone'].'</p>
      <p>'.date('d.m.yy',time($value['date'])).'</p>
      <p><a href="delete-callback.php?id='.$value['id'].'">Удалить</a></p>
    </div>
    <hr>
    ';
    }
    ?>

  </div>
</section>
</body>

</html>