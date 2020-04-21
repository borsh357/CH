<?php
require_once 'pdo.php';
$stmt = $pdo->prepare('SELECT * FROM `gallery`');
$stmt->execute();
$filescount = $stmt->fetchAll(PDO::FETCH_ASSOC);

//upload file
  $filename = 'gallery' . strval(count($filescount) + 1) . '.' . pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);
  $uploadfile = $_SERVER['DOCUMENT_ROOT'] . "/img/gallery/" . $filename;
  move_uploaded_file($_FILES['image']['tmp_name'], $uploadfile);

//write data in db
$title = $_POST['title'];
$stmt = $pdo->prepare('INSERT INTO `gallery`(`url`, `title`) VALUES (?,?)');
$stmt->execute([$filename,$title]);

header('Location: admin-gallery.php');
?>