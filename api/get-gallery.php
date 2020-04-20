<?php
require_once 'pdo.php';

$stmt = $pdo->prepare('SELECT * FROM `gallery` ORDER BY id DESC');
$stmt->execute();
$rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

foreach ($rows as $row => $value) {
  echo '
      <div class="gallery-item">
      <a href="./img/gallery/'.$value['url'].'" class="lightzoom">
        <img src="./img/gallery/'.$value['url'].'" title="'.$value['title'].'" alt="'.$value['title'].'"" />
      </a>
      </div>
  ';
}
?>