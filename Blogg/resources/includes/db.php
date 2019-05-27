<?php
$host = 'localhost';
$dbname = 'blogg';
$user = 'admin';
$password = 'Y3bBa4ogClkhB67W';
//define varible with attriubtes for our PDO-object.
$attr = array(PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC);

$dsn = "mysql:host=$host;dbname=$dbname;charset=utf8mb4";
//$pdo koden gör en attriubt med koden ovanför...
$pdo = new PDO($dsn, $user, $password, $attr);
 ?>
