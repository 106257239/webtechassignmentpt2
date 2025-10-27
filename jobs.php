<!DOCTYPE html>
<html lang="en">
    <head>
        <!--META TAGS-->
        <meta charset="UTF-8">
        <meta name = "viewport" content = "width=device-width, initial-scale=1.0">
        <meta name = "description" content = "jobs page of the job application website ">
        <meta name = "keywords" content = "jobs, swinburne, assignment">
        <meta name = "author" content = "Sammie Miller">
        <link rel="icon" type="image/x-icon" href="styles/images/shrimp.jpg">
        <!--CSS Refrencing-->
        <link href="styles/style.css"rel= "stylesheet">
        <!--page tab title-->
        <title>Jobs Page</title>
        <style>/* Aside styling*/
            aside 
            {width: 25%; 
            float: right; 
            border: 2px solid black;
            border-radius:20%;
            margin: 1%;
            padding: 1%;
            background-color: #ffcf76;}
        </style>
    </head> 
<!-- start of body section-->
    <body id="job_body">
<!-- header/nav (shared across all pages)-->
    <!--start of header and nav -->    
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
    <!--start of content -->
        <main>
        
            <!--pages Heading -->
            <section id="job_page" aria-labelledby="job_h2">
                <h2 id="job_h2" class="job_headings" style="font-size:3vw">Jobs Page</h2>
            </section>
        
            <!--pages subheading -->
            <section id="job_current_position" aria-labelledby="job_h3">
                <h3 id="job_h3" class="job_headings" style="font-size:3vw">Current Positions</h3>
            </section>
            <!--start of pages aside -->
            <aside>
                <!--inline css to fufill assignment requirements-->
                <p style="font-style: italic; font-size:1.5vw"><strong>Note:</strong> Save The Shrimp &copy; is a none for profit organization and all Positions are on a Volunteer basis</p>
            </aside >
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
          echo "</ul>"
          echo "</section><hr>";
      }
  } else {
      echo "<p>No volunteer roles are currently open. Please check back soon!</p>";
  }

  mysqli_close($conn);
  ?>
            <!--end of job 2-->
            <!-- apply now button to go to apply section -->
            </section>
            <section id="job_apply_sec">
            <a          href="apply.php"
                        target="_blank"
                        title="Go to Apply form"
                        hreflang="en"
                        id= "job_apply_button"> <h3 id = "apply_button_text">Apply Now </h3>
            </a>
            </section>
            

        </main>
        <!--end of main-->
<?php
    include('footer.inc');
?>
        <!--end of footer-->
    </body>
    <!--end of body-->
</html>

