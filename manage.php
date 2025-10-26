<?php
// ---------- LOGIN PROTECTION ----------
session_start();
if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
    header("Location: login.php");
    exit();
}

// ---------- INCLUDE FILES ----------
include('header.inc');
include('nav.inc');
require_once('settings.php');

// ---------- CONNECT TO DATABASE ----------
$conn = @mysqli_connect($host, $user, $pwd, $sql_db);
if (!$conn) {
    die("<p>❌ Database connection failed: " . mysqli_connect_error() . "</p>");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Manage EOIs - Save The Shrimps</title>
  <link rel="stylesheet" href="styles/style.css">
</head>
<body>
<main>
  <h2>HR Manager – Manage EOIs</h2>
  <p style="text-align:right;"><a href="logout.php" style="color:#0077cc;font-weight:bold;">Logout</a></p>

  <!-- ---------- MAIN FORM ---------- -->
  <form method="post" action="manage.php">
    <!-- List/Search EOIs -->
    <fieldset>
      <legend>List or Search EOIs</legend>

      <label><input type="radio" name="action" value="list_all"> List all EOIs</label><br>

      <label><input type="radio" name="action" value="search_job"> Search by Job Reference:</label>
      <input type="text" name="job_ref" placeholder="e.g. ST001"><br>

      <label><input type="radio" name="action" value="search_name"> Search by Applicant Name:</label>
      <input type="text" name="first_name" placeholder="First name">
      <input type="text" name="last_name" placeholder="Last name"><br>
    </fieldset>

    <!-- Delete EOIs -->
    <fieldset>
      <legend>Delete EOIs by Job Reference</legend>
      <input type="text" name="delete_job_ref" placeholder="Enter Job Reference">
      <button type="submit" name="action" value="delete_job">Delete</button>
    </fieldset>

    <!-- Update Status -->
    <fieldset>
      <legend>Change EOI Status</legend>
      <input type="text" name="eoi_number" placeholder="EOI Number">
      <select name="new_status">
        <option value="New">New</option>
        <option value="Current">Current</option>
        <option value="Final">Final</option>
      </select>
      <button type="submit" name="action" value="update_status">Update Status</button>
    </fieldset>

    <!-- Sort Results -->
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
// ---------- FORM ACTIONS ----------
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $action = $_POST['action'] ?? '';
    $result = null;

    switch ($action) {
        // List all EOIs
        case 'list_all':
            $query = "SELECT * FROM eoi";
            $result = mysqli_query($conn, $query);
            break;

        // Search by Job Reference
        case 'search_job':
            $job_ref = mysqli_real_escape_string($conn, $_POST['job_ref']);
            $query = "SELECT * FROM eoi WHERE job_ref = '$job_ref'";
            $result = mysqli_query($conn, $query);
            break;

        // Search by Applicant Name
        case 'search_name':
            $first = mysqli_real_escape_string($conn, $_POST['first_name']);
            $last  = mysqli_real_escape_string($conn, $_POST['last_name']);
            $query = "SELECT * FROM eoi WHERE first_name LIKE '%$first%' OR last_name LIKE '%$last%'";
            $result = mysqli_query($conn, $query);
            break;

        // Delete EOIs
        case 'delete_job':
            $del_ref = mysqli_real_escape_string($conn, $_POST['delete_job_ref']);
            $query = "DELETE FROM eoi WHERE job_ref = '$del_ref'";
            if (mysqli_query($conn, $query)) {
                echo "<p style='color:green;'>All EOIs for Job Reference <strong>$del_ref</strong> deleted.</p>";
            } else {
                echo "<p style='color:red;'>Error deleting: " . mysqli_error($conn) . "</p>";
            }
            break;

        // Update Status
        case 'update_status':
            $eoi_no = mysqli_real_escape_string($conn, $_POST['eoi_number']);
            $status = mysqli_real_escape_string($conn, $_POST['new_status']);
            $query = "UPDATE eoi SET status = '$status' WHERE EOInumber = '$eoi_no'";
            if (mysqli_query($conn, $query)) {
                echo "<p style='color:green;'>EOI <strong>$eoi_no</strong> updated to <strong>$status</strong>.</p>";
            } else {
                echo "<p style='color:red;'>Error updating: " . mysqli_error($conn) . "</p>";
            }
            break;

        // Sort EOIs
        case 'sort_results':
            $sort_field = mysqli_real_escape_string($conn, $_POST['sort_field']);
            $query = "SELECT * FROM eoi ORDER BY $sort_field ASC";
            $result = mysqli_query($conn, $query);
            break;

        default:
            echo "<p>Please select an action above.</p>";
            break;
    }

    // ---------- DISPLAY MAIN EOI TABLE ----------
    if ($result && mysqli_num_rows($result) > 0) {
        echo "<h3>EOI Table Results</h3>";
        echo "<table border='1'>";
        echo "<tr>
                <th>EOI#</th>
                <th>Job Ref</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Skills</th>
                <th>Status</th>
              </tr>";
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>
                    <td>{$row['EOInumber']}</td>
                    <td>{$row['job_ref']}</td>
                    <td>{$row['first_name']}</td>
                    <td>{$row['last_name']}</td>
                    <td>{$row['email']}</td>
                    <td>{$row['phone']}</td>
                    <td>{$row['skills']}</td>
                    <td>{$row['status']}</td>
                  </tr>";
        }
        echo "</table>";
    } elseif ($result) {
        echo "<p>No results found.</p>";
    }
}

// ---------- EXTRA TABLES (Jobs, Users, About) ----------
echo "<hr><h3>Jobs Table (for reference)</h3>";
$query_jobs = "SELECT * FROM jobs";
$result_jobs = mysqli_query($conn, $query_jobs);

if ($result_jobs && mysqli_num_rows($result_jobs) > 0) {
    echo "<table border='1'>";
    echo "<tr>
            <th>Job Ref</th>
            <th>Title</th>
            <th>Description</th>
            <th>Location</th>
            <th>Position Type</th>
            <th>Contract Type</th>
            <th>Closing Date</th>
          </tr>";
    while ($job = mysqli_fetch_assoc($result_jobs)) {
        echo "<tr>
                <td>{$job['job_ref']}</td>
                <td>{$job['job_title']}</td>
                <td>{$job['job_description']}</td>
                <td>{$job['location']}</td>
                <td>{$job['position_type']}</td>
                <td>{$job['contract_type']}</td>
                <td>{$job['closing_date']}</td>
              </tr>";
    }
    echo "</table>";
}

echo "<hr><h3>User Table (Admin Reference)</h3>";
$query_users = "SELECT * FROM user";
$result_users = mysqli_query($conn, $query_users);

if ($result_users && mysqli_num_rows($result_users) > 0) {
    echo "<table border='1'>";
    echo "<tr><th>User ID</th><th>Username</th><th>Password</th></tr>";
    while ($user = mysqli_fetch_assoc($result_users)) {
        echo "<tr>
                <td>{$user['user_id']}</td>
                <td>{$user['username']}</td>
                <td>{$user['password']}</td>
              </tr>";
    }
    echo "</table>";
}

echo "<hr><h3>About Table (Team Contributions)</h3>";
$query_about = "SELECT * FROM about";
$result_about = mysqli_query($conn, $query_about);

if ($result_about && mysqli_num_rows($result_about) > 0) {
    echo "<table border='1'>";
    echo "<tr><th>Name</th><th>Role</th><th>Project 1</th><th>Project 2</th></tr>";
    while ($about = mysqli_fetch_assoc($result_about)) {
        echo "<tr>
                <td>{$about['name']}</td>
                <td>{$about['role']}</td>
                <td>{$about['project1']}</td>
                <td>{$about['project2']}</td>
              </tr>";
    }
    echo "</table>";
}

mysqli_close($conn);
?>
</main>
<?php include('footer.inc'); ?>
</body>
</html>
