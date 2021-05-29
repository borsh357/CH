<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/api/pdo.php';

$GLOBALS['phoneNum'] = getSingleValue($pdo, 'SELECT `phoneNum` from `siteparams`');
$GLOBALS['title'] = getSingleValue($pdo, 'SELECT `title` from `siteparams`');
$GLOBALS['address'] = getSingleValue($pdo, 'SELECT `address` from `siteparams`');
$GLOBALS['description'] = getSingleValue($pdo, 'SELECT `description` from `siteparams`');
$GLOBALS['keywords'] = getSingleValue($pdo, 'SELECT `keywords` from `siteparams`');