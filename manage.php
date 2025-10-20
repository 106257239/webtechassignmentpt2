#made the mamange.php file
<?php
// Include header, navigation, and database settings
include('header.inc');
include('nav.inc');
require_once('settings.php');

// Connect to MySQL
$conn = @mysqli_connect($host, $user, $pwd, $sql_db);
if (!$conn) {
    die("<p> Database connection failed: " . mysqli_connect_error() . "</p>");
}
?>
<main>
  <h2>HR Manager – Manage EOIs</h2>

  <form method="post" action="manage.php">
    <!-- List / Search EOIs -->
    <fieldset>
      <legend>List or Search EOIs</legend>

      <label><input type="radio" name="action" value="list_all"> List all EOIs</label><br>

      <label><input type="radio" name="action" value="search_job"> Search by Job Reference:</label>
      <input type="text" name="job_ref" placeholder="e.g. JB001"><br>

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

    <!-- Sort -->
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
        // 1️ List all EOIs
        case 'list_all':
            $query = "SELECT * FROM eoi";
            $result = mysqli_query($conn, $query);
            break;

        // 2️ Search by Job Reference
        case 'search_job':
            $job_ref = mysqli_real_escape_string($conn, $_POST['job_ref']);
            $query = "SELECT * FROM eoi WHERE job_ref = '$job_ref'";
            $result = mysqli_query($conn, $query);
            break;

        // 3️ Search by Applicant Name
        case 'search_name':
            $first = mysqli_real_escape_string($conn, $_POST['first_name']);
            $last  = mysqli_real_escape_string($conn, $_POST['last_name']);
            $query = "SELECT * FROM eoi WHERE first_name LIKE '%$first%' OR last_name LIKE '%$last%'";
            $result = mysqli_query($conn, $query);
            break;

        // 4️ Delete EOIs by Job Reference
        case 'delete_job':
            $del_ref = mysqli_real_escape_string($conn, $_POST['delete_job_ref']);
            $query = "DELETE FROM eoi WHERE job_ref = '$del_ref'";
            if (mysqli_query($conn, $query)) {
                echo "<p> All EOIs for Job Reference <strong>$del_ref</strong> deleted.</p>";
            } else {
                echo "<p> Error deleting: " . mysqli_error($conn) . "</p>";
            }
            break;

        // 5️ Change EOI Status
        case 'update_status':
            $eoi_no = mysqli_real_escape_string($conn, $_POST['eoi_number']);
            $status = mysqli_real_escape_string($conn, $_POST['new_status']);
            $query = "UPDATE eoi SET status = '$status' WHERE EOInumber = '$eoi_no'";
            if (mysqli_query($conn, $query)) {
                echo "<p> EOI <strong>$eoi_no</strong> updated to <strong>$status</strong>.</p>";
            } else {
                echo "<p> Error updating: " . mysqli_error($conn) . "</p>";
            }
            break;

        // 6️ Sort Results
        case 'sort_results':
            $sort_field = mysqli_real_escape_string($conn, $_POST['sort_field']);
            $query = "SELECT * FROM eoi ORDER BY $sort_field ASC";
            $result = mysqli_query($conn, $query);
            break;

        default:
            echo "<p> Please select an action above.</p>";
            break;
    }

    // Display table if there are results
    if ($result && mysqli_num_rows($result) > 0) {
        echo "<table border='1'>";
        echo "<tr><th>EOI#</th><th>Job Ref</th><th>First Name</th><th>Last Name</th><th>Email</th><th>Status</th></tr>";
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>
                    <td>{$row['EOInumber']}</td>
                    <td>{$row['job_ref']}</td>
                    <td>{$row['first_name']}</td>
                    <td>{$row['last_name']}</td>
                    <td>{$row['email']}</td>
                    <td>{$row['status']}</td>
                  </tr>";
        }
        echo "</table>";
    } elseif ($result) {
        echo "<p>No results found.</p>";
    }
}
mysqli_close($conn);
?>
<?php include('footer.inc'); ?>
