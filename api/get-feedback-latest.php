<?php
require_once 'pdo.php';

$stmt = $pdo->prepare('SELECT * FROM `feedback` WHERE `approved` = 1 ORDER BY id DESC LIMIT 3');
$stmt->execute();
$rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
foreach ($rows as $row => $value) {
  echo '
    <div class="feedback-item">
      <div class="feedback-item-avatar">
        <img src="img/feedback/'.$value['image'].'" alt="avatar">
        <div class="feedback-item-sender-info">
            <div class="feedback-item-name">'.$value['name'].'</div>
            <div class="feedback-item-post-date">'.date("d.m.Y", strtotime($value['date'])).'</div>
          </div>
        </div>
        <div class="feedback-item-text">
          '.$value['content'].'
        </div>
      </div>
        ';
}

?>