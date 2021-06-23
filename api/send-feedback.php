<?php
//deny direct access
if (!isset($_POST['ajax']) || !$_POST['ajax']) {
  die('<h1>You are not allowed to access this page</h1>');
}

//check google reCaptcha
if (isset($_POST['g-recaptcha-response']) && $_POST['g-recaptcha-response']) {
  $secret = '6LekfaEaAAAAABl-oCsfzOGR8r9tmOSDwbSaKQUn';
  $ip = $_SERVER['REMOTE_ADDR'];
  $response = $_POST['g-recaptcha-response'];
  $rsp = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$secret&response=$response&remoteip=$ip");
  $arr = json_decode($rsp, TRUE);
  if ($arr['success']) {

    if (!boolval(preg_match('/[а-яА-Я]/', $_POST['name']))) {
      die('VALIDATION_ERROR');
    }

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
    $date = date("y.m.d");

    $stmt = $pdo->prepare('INSERT INTO `feedback`(`image`, `name`, `date`, `content`) VALUES (?,?,?,?)');
    $stmt->execute([$filename, $name, $date, $content]);

    echo 'OK';
  }
} else {
  die('CAPTCHA_ERROR');
}