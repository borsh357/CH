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

    require_once 'pdo.php';
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $date = date("y.m.d");

    if (strlen($name) < 1 || strlen($name) > 50 || strlen($phone) < 1 || strlen($phone) > 15) {
      die('Data validation error.');
    }

    $stmt = $pdo->prepare('INSERT INTO `callback`(`name`, `phone`, `date`) VALUES (?,?,?)');
    $stmt->execute([$name, $phone, $date]);
    echo 'Заявка отправлена.';
  }
} else {
  die('Captcha error.');
}