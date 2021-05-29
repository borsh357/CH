<?php
session_start();
if ($_SESSION['loggedin'] == 1) {
  require_once 'pdo.php';
} else {
  header('Location: admin.php');
}

if (isset($_POST['siteparams-title'])) {
  $stmt = $pdo->prepare('UPDATE `siteparams` SET `title` = ?');
  $stmt->execute([$_POST['siteparams-title']]);
}

if (isset($_POST['siteparams-description'])) {
  $stmt = $pdo->prepare('UPDATE `siteparams` SET `description` = ?');
  $stmt->execute([$_POST['siteparams-description']]);
}

if (isset($_POST['siteparams-keywords'])) {
  $stmt = $pdo->prepare('UPDATE `siteparams` SET `keywords` = ?');
  $stmt->execute([$_POST['siteparams-keywords']]);
}

if (isset($_POST['siteparams-address'])) {
  $stmt = $pdo->prepare('UPDATE `siteparams` SET `address` = ?');
  $stmt->execute([$_POST['siteparams-address']]);
}

if (isset($_POST['siteparams-phoneNum'])) {
  $stmt = $pdo->prepare('UPDATE `siteparams` SET `phoneNum` = ?');
  $stmt->execute([$_POST['siteparams-phoneNum']]);
}

header('Location: admin-siteparams.php');