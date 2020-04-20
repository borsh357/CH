<?php
require_once './api/pdo.php';

echo '<h2 class="pricelist-category">Демонтажные работы:</h2>';
$stmt = $pdo->prepare('SELECT * FROM `pricelist` WHERE `cat` = 0');
$stmt->execute();
$rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
foreach ($rows as $row => $value) {
  echo '<div class="pricelist-item"><span>'.$value['descr'].'</span><span>'.$value['price'].'</span><span>'.$value['ed'].'</span></div>';
}

echo '<h2 id="montajnie-raboti" class="pricelist-category">Монтажные  работы. Стены:</h2>';
$stmt = $pdo->prepare('SELECT * FROM `pricelist` WHERE `cat` = 1');
$stmt->execute();
$rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
foreach ($rows as $row => $value) {
  echo '<div class="pricelist-item"><span>'.$value['descr'].'</span><span>'.$value['price'].'</span><span>'.$value['ed'].'</span></div>';
}

echo '<h2 class="pricelist-category">Монтажные  работы. Пол:</h2>';
$stmt = $pdo->prepare('SELECT * FROM `pricelist` WHERE `cat` = 2');
$stmt->execute();
$rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
foreach ($rows as $row => $value) {
  echo '<div class="pricelist-item"><span>'.$value['descr'].'</span><span>'.$value['price'].'</span><span>'.$value['ed'].'</span></div>';
}

echo '<h2 class="pricelist-category">Монтажные  работы. Потолок:</h2>';
$stmt = $pdo->prepare('SELECT * FROM `pricelist` WHERE `cat` = 3');
$stmt->execute();
$rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
foreach ($rows as $row => $value) {
  echo '<div class="pricelist-item"><span>'.$value['descr'].'</span><span>'.$value['price'].'</span><span>'.$value['ed'].'</span></div>';
}

echo '<h2 id="otdelochnie-raboti" class="pricelist-category">Отделочные работы. Пол:</h2>';
$stmt = $pdo->prepare('SELECT * FROM `pricelist` WHERE `cat` = 4');
$stmt->execute();
$rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
foreach ($rows as $row => $value) {
  echo '<div class="pricelist-item"><span>'.$value['descr'].'</span><span>'.$value['price'].'</span><span>'.$value['ed'].'</span></div>';
}

echo '<h2 class="pricelist-category">Отделочные работы. Потолок:</h2>';
$stmt = $pdo->prepare('SELECT * FROM `pricelist` WHERE `cat` = 5');
$stmt->execute();
$rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
foreach ($rows as $row => $value) {
  echo '<div class="pricelist-item"><span>'.$value['descr'].'</span><span>'.$value['price'].'</span><span>'.$value['ed'].'</span></div>';
}

echo '<h2 class="pricelist-category">Отделочные работы. Стены:</h2>';
$stmt = $pdo->prepare('SELECT * FROM `pricelist` WHERE `cat` = 6');
$stmt->execute();
$rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
foreach ($rows as $row => $value) {
  echo '<div class="pricelist-item"><span>'.$value['descr'].'</span><span>'.$value['price'].'</span><span>'.$value['ed'].'</span></div>';
}

echo '<h2 class="pricelist-category">Отделочные работы. Разное:</h2>';
$stmt = $pdo->prepare('SELECT * FROM `pricelist` WHERE `cat` = 7');
$stmt->execute();
$rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
foreach ($rows as $row => $value) {
  echo '<div class="pricelist-item"><span>'.$value['descr'].'</span><span>'.$value['price'].'</span><span>'.$value['ed'].'</span></div>';
}

echo '<h2 class="pricelist-category">Установка дверей:</h2>';
$stmt = $pdo->prepare('SELECT * FROM `pricelist` WHERE `cat` = 8');
$stmt->execute();
$rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
foreach ($rows as $row => $value) {
  echo '<div class="pricelist-item"><span>'.$value['descr'].'</span><span>'.$value['price'].'</span><span>'.$value['ed'].'</span></div>';
}

echo '<h2 id="electromontajnie-raboti" class="pricelist-category">Электромонтажные работы:</h2>';
$stmt = $pdo->prepare('SELECT * FROM `pricelist` WHERE `cat` = 9');
$stmt->execute();
$rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
foreach ($rows as $row => $value) {
  echo '<div class="pricelist-item"><span>'.$value['descr'].'</span><span>'.$value['price'].'</span><span>'.$value['ed'].'</span></div>';
}

echo '<h2 id="plitochnie-raboti" class="pricelist-category">Плиточные работы:</h2>';
$stmt = $pdo->prepare('SELECT * FROM `pricelist` WHERE `cat` = 10');
$stmt->execute();
$rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
foreach ($rows as $row => $value) {
  echo '<div class="pricelist-item"><span>'.$value['descr'].'</span><span>'.$value['price'].'</span><span>'.$value['ed'].'</span></div>';
}

echo '<h2 id="santeh-raboti" class="pricelist-category">Сантехнические работы:</h2>';
$stmt = $pdo->prepare('SELECT * FROM `pricelist` WHERE `cat` = 11');
$stmt->execute();
$rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
foreach ($rows as $row => $value) {
  echo '<div class="pricelist-item"><span>'.$value['descr'].'</span><span>'.$value['price'].'</span><span>'.$value['ed'].'</span></div>';
}
?>