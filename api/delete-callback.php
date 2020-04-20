<?php
require_once 'pdo.php';
$callback_id = $_GET['id'];

$stmt = $pdo->prepare('DELETE FROM `callback` WHERE id = ?');
$stmt->execute([$callback_id]);

header('Location: admin-callback.php');