<?php
$user_name = $_POST['user_name'];
$user_notes = $_POST['user_notes'];

$user = "root";
$pass = "root";

$dbh = new PDO('mysql:host=db;dbname=test;charset=utf8', $user, $pass);
$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$sql = "INSERT INTO users (name, notes) VALUES (?, ?)";
$stmt = $dbh->prepare($sql);
$stmt->bindValue(1, $user_name, PDO::PARAM_STR);
$stmt->bindValue(2, $user_notes, PDO::PARAM_STR);
$stmt->execute();
$dbh = null;

header('Location: /');
