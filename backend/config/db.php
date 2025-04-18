<?php
$host = 'localhost';
$dbname = 'fittrack_plus'; // Change if you named it differently
$username = 'root'; // Change if needed
$password = '';     // Change if you use a password

try {
  $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $username, $password);
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
  die(json_encode(['success' => false, 'message' => 'Connection failed: ' . $e->getMessage()]));
}
?>