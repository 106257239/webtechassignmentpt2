<?php
session_start();
require_once('settings.php');

// Redirect to login if not authenticated
if (!isset($_SESSION['loggedin'])) {
  header("Location: login.php");
  exit;
}

// Connect to DB
$conn = @mysqli_connect($host, $user, $pwd, $sql_db);
if (!$conn) {
  die("<p> Database connection failed: " . mysqli_connect_error() . "</p>");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Manage EOIs</title>

<link rel="stylesheet" href="styles/newstyles.css">
<link rel="stylesheet" href="styles/style.css">


</head>
<body>
<header><h1>     Save The Shrimps  </h1></header>
<nav>
  <ul>
    <li><a href="index.php">Home</a></li>
    <li><a href="jobs.php">Jobs</a></li>
    <li><a href="logout.php">Logout</a></li>
  </ul>
</nav>
<main>
  <h2>HR Manager – Manage EOIs</h2>

  <form method="post" action="manage.php">
    <fieldset>
      <legend>List / Search EOIs</legend>
      <label><input type="radio" name="action" value="list_all"> List all EOIs</label><br>
      <label><input type="radio" name="action" value="search_job"> Search by Job Reference:</label>
      <input type="text" name="job_ref"><br>
      <label><input type="radio" name="action" value="search_name"> Search by Applicant Name:</label>
      <input type="text" name="first_name" placeholder="First name">
      <input type="text" name="last_name" placeholder="Last name"><br>
    </fieldset>

    <fieldset>
      <legend>Delete EOIs by Job Reference</legend>
      <input type="text" name="delete_job_ref" placeholder="Enter Job Ref">
      <button type="submit" name="action" value="delete_job">Delete</button>
    </fieldset>

    <fieldset>
      <legend>Change EOI Status</legend>
      <input type="text" name="eoi_number" placeholder="EOI Number">
      <select name="new_status">
        <option value="New">New</option>
        <option value="Current">Current</option>
        <option value="Final">Final</option>
      </select>
      <button type="submit" name="action" value="update_status">Update</button>
    </fieldset>

    <fieldset>
      <legend>Sort Results</legend>
      <select name="sort_field">
        <option value="EOInumber">EOI Number</option>
        <option value="job_ref">Job Reference</option>
        <option value="first_name">First Name</option>
        <option value="last_name">Last Name</option>
        <option value="status">Status</option>
      </select>
      <button type="submit" name="action" value="sort_results">Sort</button>
    </fieldset>

    <button type="submit">Submit</button>
  </form>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $action = $_POST['action'] ?? '';
  $result = null;

  switch ($action) {
    case 'list_all':
      $query = "SELECT * FROM eoi";
      $result = mysqli_query($conn, $query);
      break;
    case 'search_job':
      $job_ref = mysqli_real_escape_string($conn, $_POST['job_ref']);
      $query = "SELECT * FROM eoi WHERE job_ref = '$job_ref'";
      $result = mysqli_query($conn, $query);
      break;
    case 'search_name':
      $first = mysqli_real_escape_string($conn, $_POST['first_name']);
      $last  = mysqli_real_escape_string($conn, $_POST['last_name']);
      $query = "SELECT * FROM eoi WHERE first_name LIKE '%$first%' OR last_name LIKE '%$last%'";
      $result = mysqli_query($conn, $query);
      break;
    case 'delete_job':
      $del_ref = mysqli_real_escape_string($conn, $_POST['delete_job_ref']);
      $query = "DELETE FROM eoi WHERE job_ref = '$del_ref'";
      if (mysqli_query($conn, $query)) echo "<p>✅ EOIs for Job $del_ref deleted.</p>";
      break;
    case 'update_status':
      $eoi_no = mysqli_real_escape_string($conn, $_POST['eoi_number']);
      $status = mysqli_real_escape_string($conn, $_POST['new_status']);
      $query = "UPDATE eoi SET status='$status' WHERE EOInumber='$eoi_no'";
      if (mysqli_query($conn, $query)) echo "<p>✅ EOI $eoi_no updated to $status.</p>";
      break;
    case 'sort_results':
      $sort_field = mysqli_real_escape_string($conn, $_POST['sort_field']);
      $query = "SELECT * FROM eoi ORDER BY $sort_field ASC";
      $result = mysqli_query($conn, $query);
      break;
  }

  if ($result && mysqli_num_rows($result) > 0) {
  echo "<table border='1'><tr>
          <th>ID</th>
          <th>Job Ref</th>
          <th>First Name</th>
          <th>Last Name</th>
          <th>DOB</th>
          <th>Gender</th>
          <th>Email</th>
          <th>Phone</th>
          <th>Address</th>
          <th>Suburb</th>
          <th>Postcode</th>
          <th>State</th>
          <th>Skills</th>
          <th>Other Skills</th>
          <th>Status</th>
          <th>Created At</th>
        </tr>";

  while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr>
            <td>{$row['id']}</td>
            <td>{$row['reference_no']}</td>
            <td>{$row['firstname']}</td>
            <td>{$row['lastname']}</td>
            <td>{$row['dob']}</td>
            <td>{$row['gender']}</td>
            <td>{$row['email']}</td>
            <td>{$row['phone']}</td>
            <td>{$row['address']}</td>
            <td>{$row['suburb']}</td>
            <td>{$row['postcode']}</td>
            <td>{$row['state']}</td>
            <td>{$row['skills']}</td>
            <td>{$row['otherskills']}</td>
            <td>{$row['status']}</td>
            <td>{$row['created_at']}</td>
          </tr>";
  }
  echo "</table>";
} elseif ($result) {
  echo "<p>No results found.</p>";
}
  }
mysqli_close($conn);
?>
</main>
</body>
</html>
