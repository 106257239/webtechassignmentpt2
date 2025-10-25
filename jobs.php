<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

include('header.inc');
include('nav.inc');
require_once('settings.php');

$conn = @mysqli_connect($host, $user, $pwd, $sql_db);
if (!$conn) {
    die("<p>❌ Database connection failed: " . mysqli_connect_error() . "</p>");
}

$sql = "SELECT * FROM jobs ORDER BY closing_date ASC";
$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Save The Shrimps - Jobs</title>
  <link rel="stylesheet" href="styles/style.css">
</head>
<body>

<main id="job_body">
  <section id="job_page">
    <h2 class="job_headings">Available Volunteer Positions</h2>
    <p class="intro-text">
      Save The Shrimps is a non-profit organization dedicated to marine life protection.
      Explore our volunteer positions and make an impact today 🌊
    </p>
  </section>

  <aside id="job_aside">
    <p style="font-style: italic;">
      <strong>Note:</strong> All positions are unpaid and on a volunteer basis.
    </p>
  </aside>

  <?php
  if ($result && mysqli_num_rows($result) > 0) {
      while ($row = mysqli_fetch_assoc($result)) {
          echo "<section class='job_pos'>";
          echo "<h3 class='job_title'>{$row['job_title']} ({$row['job_ref']})</h3>";
          echo "<ul class='job_list'>";
          echo "<li><strong>Description:</strong> {$row['job_description']}</li>";
          echo "<li><strong>Location:</strong> {$row['location']}</li>";
          echo "<li><strong>Position Type:</strong> {$row['position_type']}</li>";
          echo "<li><strong>Contract Type:</strong> {$row['contract_type']}</li>";
          echo "<li><strong>Salary Range:</strong> {$row['salary_range']}</li>";
          echo "<li><strong>Closing Date:</strong> {$row['closing_date']}</li>";
          echo "<li><strong>Qualifications:</strong> {$row['qualifications']}</li>";
          echo "<li><strong>Responsibilities:</strong> {$row['responsibilities']}</li>";
          echo "</ul>";
          echo "<a href='apply.php?job_ref={$row['job_ref']}' class='apply-btn'>Apply Now</a>";
          echo "</section><hr>";
      }
  } else {
      echo "<p>No volunteer roles are currently open. Please check back soon!</p>";
  }

  mysqli_close($conn);
  ?>
</main>

<?php include('footer.inc'); ?>
</body>
</html>
