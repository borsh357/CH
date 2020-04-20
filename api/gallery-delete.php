<?php
require_once 'pdo.php';
$photo_id = $_GET['id'];

$stmt = $pdo->prepare('DELETE FROM `gallery` WHERE id = ?');
$stmt->execute([$photo_id]);

header('Location: admin-gallery.php');