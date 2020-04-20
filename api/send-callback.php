<?php
require_once 'pdo.php';
$name = $_POST['name'];
$phone = $_POST['phone'];
$date = date("d.m.y");

$stmt = $pdo->prepare('INSERT INTO `callback`(`name`, `phone`, `date`) VALUES (?,?,?)');
$stmt->execute([$name,$phone,$date]);
?>