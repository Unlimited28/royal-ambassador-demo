<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $fullname = htmlspecialchars($_POST["fullname"]);
  $email = htmlspecialchars($_POST["email"]);
  $age = $_POST["age"];
  $church = htmlspecialchars($_POST["church"]);
  $association = htmlspecialchars($_POST["association"]);
  $rank = htmlspecialchars($_POST["rank"]);
  $password = password_hash($_POST["password"], PASSWORD_DEFAULT);

  // TODO: Save to a database (e.g., MySQL) using PDO or MySQLi

  // For now, just display back for confirmation
  echo "<h2>Registration Successful!</h2>";
  echo "<p>Welcome, <strong>$fullname</strong>!</p>";
  echo "<p>Email: $email</p>";
  echo "<p>Rank: $rank</p>";
  echo "<p>Church: $church</p>";
  echo "<p>Association: $association</p>";
  echo "<p>Age: $age</p>";
}
?>
