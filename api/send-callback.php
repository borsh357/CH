<?php
require_once 'pdo.php';
$name = $_POST['name'];
$phone = $_POST['phone'];
$date = date("d.m.y");

if (strlen($name) < 1 || strlen($name) > 50 || strlen($phone) < 1 || strlen($phone) > 15 ) {
  return;
}

$stmt = $pdo->prepare('INSERT INTO `callback`(`name`, `phone`, `date`) VALUES (?,?,?)');
$stmt->execute([$name,$phone,$date]);
?>