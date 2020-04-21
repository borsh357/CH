<?php
require_once 'pdo.php';
$filename = $_GET['filename'];

$stmt = $pdo->prepare('DELETE FROM `gallery` WHERE `url` = ?');
$stmt->execute([$filename]);

$dir = $_SERVER['DOCUMENT_ROOT'] . "/img/gallery/";
unlink($dir . $filename);

header('Location: admin-gallery.php');