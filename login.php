<?php
session_start();
include('header.inc');
include('nav.inc');
require_once('settings.php');

$conn = @mysqli_connect($host, $user, $pwd, $sql_db);
if (!$conn) {
  die("<p>❌ Database connection failed: " . mysqli_connect_error() . "</p>");
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $username = trim($_POST['username']);
  $password = trim($_POST['password']);

  $stmt = mysqli_prepare($conn, "SELECT password_hash FROM user WHERE username = ?");
  mysqli_stmt_bind_param($stmt, "s", $username);
  mysqli_stmt_execute($stmt);
  $result = mysqli_stmt_get_result($stmt);

  if ($row = mysqli_fetch_assoc($result)) {
    if (hash('sha256', $password) === $row['password_hash']) {
      $_SESSION['loggedin'] = true;
      $_SESSION['username'] = $username;
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

<main>
  <h2>Login</h2>
  <?php if (!empty($error)) echo "<p style='color:red;'>$error</p>"; ?>
  <form method="post" action="login.php">
    <label>Username:</label>
    <input type="text" name="username" required><br><br>
    <label>Password:</label>
    <input type="password" name="password" required><br><br>
    <button type="submit">Login</button>
  </form>
</main>

<?php include('footer.inc'); ?>

