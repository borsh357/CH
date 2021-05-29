<?php
session_start();
if ($_SESSION['loggedin'] == 1) {
  require_once 'pdo.php';
} else {
  header('Location: admin.php');
}

if (isset($_POST['status'])) {
  $id = intval($_POST['id']);
  $status = intval($_POST['status']);

  var_dump($status);
  $stmt = $pdo->prepare('UPDATE `callback` SET `status` = ? WHERE `id` = ?');
  $stmt->execute([$status, $id]);
}

header('Location: admin-callback.php');