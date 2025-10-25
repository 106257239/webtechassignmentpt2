<?php
// Enable error display for debugging (remove later before submission)
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Include shared layout files
include('header.inc');
include('nav.inc');
require_once('settings.php');

// Connect to MySQL
$conn = @mysqli_connect($host, $user, $pwd, $sql_db);

if (!$conn) {
    die("<p>❌ Database connection failed: " . mysqli_connect_error() . "</p>");
}

// SQL query: select all jobs
$sql = "SELECT * FROM jobs ORDER BY closing_date ASC";
$result = mysqli_query($conn, $sql);
?>

<main id="job_body">
    <section id="job_page" aria-labelledby="job_h2">
        <h2 id="job_h2" class="job_headings">Current Job Positions</h2>
    </section>

    <aside id="job_aside">
        <p style="font-style: italic;">
            <strong>Note:</strong> Save The Shrimp &copy; is a non-profit organization — all positions are on a volunteer basis.
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
        echo "<p>No jobs available at the moment.</p>";
    }

    mysqli_close($conn);
    ?>
</main>

<?php include('footer.inc'); ?>
