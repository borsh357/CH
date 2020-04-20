<?php
$username = $_POST['username'];
$password = $_POST['password'];

require_once 'pdo.php';

$stmt = $pdo->prepare('SELECT * FROM `user` WHERE `username` = ?');
$stmt->execute([$username]);
$row = $stmt->fetch(PDO::FETCH_ASSOC);

if (md5($password) === $row['password']) {
  session_start();
  $_SESSION['loggedin'] = 1;
  session_commit();
}
header('Location: admin.php');