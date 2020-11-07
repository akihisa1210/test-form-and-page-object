<?php
try {
  if (empty($_GET['id'])) throw new Exception("ID is invalid.");
} catch (Exception $e) {
  echo $e;
  die();
}

$id = (int) $_GET['id'];

$user = "root";
$pass = "root";

$dbh = new PDO('mysql:host=db;dbname=test;charset=utf8', $user, $pass);
$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$sql = "DELETE FROM users WHERE id = ?";
$stmt = $dbh->prepare($sql);
$stmt->bindValue(1, $id, PDO::PARAM_INT);
$stmt->execute();
$dbh = null;

header('Location: /');
