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

    <style>
    a {
      font-size: 0.8rem;
    }
    </style>

    <?php
    $stmt = $pdo->prepare('SELECT * FROM `feedback` ORDER BY id DESC');
    $stmt->execute();
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    foreach ($rows as $row => $value) {
      echo '
        <div class="feedback-item">
          <div class="feedback-item-avatar">
            <img src="../img/feedback/'.$value['image'].'" alt="avatar">
            <div class="feedback-item-sender-info">
                <div class="feedback-item-name">'.$value['name'].'</div>
                <div class="feedback-item-post-date">'.date("d.m.Y", strtotime($value['date'])).'</div>
              </div>
              <div style="margin-left: 10px">';

            if ($value['approved']) {
              echo '<small>Подтвержден</small>
                    <a href="feedback-unapprove.php?id='.$value['id'].'">Отменить</a>
              ';
            } else {
              echo '<small>Не подтвержден</small>
                    <a href="feedback-approve.php?id='.$value['id'].'">Подтвердить</a>
                    ';
            }

              echo '
              <a href="feedback-delete.php?id='.$value['id'].'">Удалить</a>
            </div>
            </div>
            <div class="feedback-item-text">
              '.$value['content'].'
            </div>
          </div>
            ';
    }
    ?>

  </div>
</section>
</body>

</html>