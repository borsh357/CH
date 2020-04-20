<?php
require_once 'pdo.php';
$feedback_id = $_GET['id'];

$stmt = $pdo->prepare('DELETE FROM `feedback` WHERE id = ?');
$stmt->execute([$feedback_id]);

header('Location: admin-feedback.php');