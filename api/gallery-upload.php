<?php
require_once 'pdo.php';
//upload file
$dir = $_SERVER['DOCUMENT_ROOT'] . "/img/gallery";
  $img = array_diff(scandir($dir), array('..', '.', '.DS_Store'));
  $img = array_values($img);
  $filename = 'gallery' . strval(count($img) + 1) . '.' . pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);
  $uploadfile = $_SERVER['DOCUMENT_ROOT'] . "/img/gallery/" . $filename;
  move_uploaded_file($_FILES['image']['tmp_name'], $uploadfile);


//write data in db
$title = $_POST['title'];

$stmt = $pdo->prepare('INSERT INTO `gallery`(`url`, `title`) VALUES (?,?)');
$stmt->execute([$filename,$title]);

header('Location: admin-gallery.php');
?>