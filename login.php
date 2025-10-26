<?php
session_start();
require_once('settings.php');

// Connect to DB
$conn = @mysqli_connect($host, $user, $pwd, $sql_db);
if (!$conn) {
  die("<p>❌ Database connection failed: " . mysqli_connect_error() . "</p>");
}

$error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $username = trim($_POST["username"]);
  $password = trim($_POST["password"]);

  $stmt = mysqli_prepare($conn, "SELECT password_hash FROM user WHERE username = ?");
  mysqli_stmt_bind_param($stmt, "s", $username);
  mysqli_stmt_execute($stmt);
  $result = mysqli_stmt_get_result($stmt);

  if ($row = mysqli_fetch_assoc($result)) {
    if (hash("sha256", $password) === $row["password_hash"]) {
      $_SESSION["loggedin"] = true;
      $_SESSION["username"] = $username;
      header("Location: manage.php");
      exit;
    } else {
      $error = "Invalid password.";
    }
  } else {
    $error = "User not found.";
  }

  mysqli_stmt_close($stmt);
}
mysqli_close($conn);
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Manager Login</title>
<style>
body {
  background-color: #f8f9fa;
  font-family: Arial, sans-serif;
  display: flex;
  justify-content: center;
  align-items: center;
  height: 100vh;
}
main {
  background-color: white;
  padding: 30px;
  border-radius: 10px;
  box-shadow: 0 4px 8px rgba(0,0,0,0.2);
  width: 350px;
  text-align: center;
}
input {
  width: 90%;
  padding: 10px;
  margin: 8px 0;
  border: 1px solid #ccc;
  border-radius: 5px;
}
button {
  background-color: #0077cc;
  color: white;
  border: none;
  padding: 10px 15px;
  border-radius: 5px;
  cursor: pointer;
  width: 95%;
}
button:hover {
  background-color: #005fa3;
}
.error { color: red; }
</style>
</head>
<body>
<main>
  <h2>Manager Login</h2>
  <?php if (!empty($error)) echo "<p class='error'>$error</p>"; ?>
  <form method="post" action="login.php">
    <input type="text" name="username" placeholder="Username" required><br>
    <input type="password" name="password" placeholder="Password" required><br>
    <button type="submit">Login</button>
  </form>
</main>
</body>
</html>
