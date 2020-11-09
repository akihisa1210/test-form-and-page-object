<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>User list</title>
</head>
<body>

<h1>User list</h1>
<a href="create.html">Create user</a>

<?php
$user = "root";
$pass = "root";

$dbh = new PDO('mysql:host=db;dbname=test;charset=utf8', $user, $pass);
$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$sql = "SELECT * FROM users";
$stmt = $dbh->query($sql);
$result = $stmt->fetchAll(PDO::FETCH_ASSOC);

$dbh = null;

echo "<table id='users'>\n";

echo "<tr>\n";
echo "<th>ID</th><th>Name</th><th>Notes</th>\n";
echo "</tr>\n";

foreach($result as $row) {
  echo "<tr>\n";
  echo "<td>" . $row['id'] . "</td>\n";
  echo "<td>" . $row['name'] . "</td>\n";
  echo "<td>" . $row['notes'] . "</td>\n";
  
  echo "<td>\n";
  echo "<a href=delete.php?id=" . htmlspecialchars($row['id'], ENT_QUOTES, 'UTF-8') . ">Delete</a>\n";
  echo "</td>\n";

  echo "</tr>\n";
}

echo "</table>\n";
?>

</body>
</html>
