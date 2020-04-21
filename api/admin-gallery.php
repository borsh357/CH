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
    <div class="text-center">

      <h2>Добавить фото</h2>
      <form action="gallery-upload.php" method="Post" enctype='multipart/form-data'>
        <input name="image" type="file" required>
        <input name="title" type="text" required placeholder="title">
        <input type="submit">
      </form>
    </div>

    <h1 class="text-center">Загруженные фото</h1>
    <div class="gallery">
      <?php
    $stmt = $pdo->prepare('SELECT * FROM `gallery` ORDER BY id DESC');
    $stmt->execute();
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    foreach ($rows as $row => $value) {
      echo '
      <div class="text-center">
      <div class="gallery-item">
      <img src="../img/gallery/'.$value['url'].'" title="'.$value['title'].'" alt="'.$value['title'].'"" />
      
      </div>
      <a href="gallery-delete.php?filename='.$value['url'].'">Удалить</a>
      </div>
      ';
    }
    ?>
    </div>
  </div>
</section>
</body>

</html>