<?php
require_once 'pdo.php';
//upload file
if (!empty($_FILES['image']['name'])) {
  $dir = $_SERVER['DOCUMENT_ROOT'] . "/img/feedback";
  $img = array_diff(scandir($dir), array('..', '.', '.DS_Store'));
  $img = array_values($img);
  $filename = 'feedback' . strval(count($img) + 1) . '.' . pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);
  $uploadfile = $_SERVER['DOCUMENT_ROOT'] . "/img/feedback/" . $filename;
  move_uploaded_file($_FILES['image']['tmp_name'], $uploadfile);
} else {
  $filename = 'avatar.svg';
}

//write data in db
$name = $_POST['name'];
$content = $_POST['content'];
$date = date("d.m.y");

$stmt = $pdo->prepare('INSERT INTO `feedback`(`image`, `name`, `date`, `content`) VALUES (?,?,?,?)');
$stmt->execute([$filename,$name,$date,$content]);

echo 'Отзыв отправлен';
?>