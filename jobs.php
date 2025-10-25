<DOCTYPE php >
<html lang="en">
    <head>
        <!--META TAGS-->
        <meta charset="UTF-8">
        <meta name = "viewport" content = "width=device-width, initial-scale=1.0">
        <meta name = "description" content = "jobs page of the job application website ">
        <meta name = "keywords" content = "jobs, swinburne, assignment">
        <meta name = "author" content = "Sammie Miller">
        <!--CSS Refrencing-->
        <link href="styles/style.css"rel= "stylesheet">
        <!--page tab title-->
        <title>Jobs Page</title>
    </head> 
<!-- start of body section-->
    <body id="job_body">
<!-- header/nav (shared across all pages)-->
    <!--start of header -->    
        <header>
        <!-- IMG SOURCED FROM https://www.freepik.com/ USER: Catalyst stuff  full link: https://www.freepik.com/free-vector/cute-chef-shrimp-cartoon-vector-icon-illustration-animal-food-icon-concept-isolated-premium-vector_26259299.htm#fromView=keyword&page=1&position=0&uuid=eae536ac-f070-4e07-a549-7e5f0fb771f4&query=Shrimp+chef-->
            <img src="styles/images/shrimp_no_bg.png"; alt="a cartoon shrimp"; title="Save The Shrimp"; id="shrimp">
            <!--links heading text to index page -->
            <a href="index.html"><h1>Save The Krill</h1></a>
            <!--empty p tag for equal spacing in flexbox  -->
            <p></p>
        </header>
        <!--end of header section-->
        <!--start of nav section -->
        <nav>
        <!--nav sey up as list for styling purposes-->
            <ul>
            <!--links to each page of website with _self as target to open on same page-->
                <li><a href="./index.html" target="_self" title="Home Page" hreflang="english" >Home Page</a></li>
                <li><a href="./about.html" target="_self" title="About Page" hreflang="english">About Us</a></li>
                <li><a href="./jobs.html" target="_self" title="Jobs Page" hreflang="english">Jobs</a></li>
                <li><a href="./apply.html" target="_self" title="Apply page" hreflang="english">Volunteer</a></li>
            </ul>
        </nav>
        <!--end of nav section-->
        <!--start of content -->
        <main>
        
            <!--pages Heading -->
            <section id="job_page" aria-labelledby="job_h2">
                <h2 id="job_h2" class="job_headings">Jobs Page</h2>
            </section>
        
            <!--pages subheading -->
            <section id="job_current_position" aria-labelledby="job_h3">
                <h3 id="job_h3" class="job_headings">Current Positions</h3>
            </section>
            <!--start of pages aside -->
            <aside id="job_aside">
                <!--inline css to fufill assignment requirements-->
                <p style="font-style: italic;"><strong>Note:</strong> Save The Shrimp &copy; is a none for profit organization and all Positions are on a Volunteer basis</p>
            </aside >
            <!--end of pages aside-->
            <!-- start of job one -->
            <section class="job_pos" aria-labelledby="job_1">   
                <!-- heading links to apply page with a blank title so it opens in the same page-->                 
                <a  href="apply.html"
                        target="_blank"
                        title="go to job"
                        hreflang="en"
                        >
                        <h4 class="job_title" id="job_1">Entry Level Web Developer</h4> </a> <p class="jobno">Job No <br></p> <p class="job_num">#B28L0</p>
                        <!--list for job requirements-->
                        <ul class="job_list">
                            <li><strong>Description:</strong><br>Join an exciting team of passionate volunteers and feel the real impact of your work, this role is to be a crucial part of our Web Dev team Assist in the creation and maintenance of the organizations web presences,
                                help get the word out about our great cause </li>
                            <li><strong>Salary:</strong><br> Volunteer Based</li>
                            <li><strong>Reporting Line:</strong><br>Head of Web Development</li>
                            <li><strong>Key Responsibilities:</strong></li>
                                <ol>
                                <!--nested list for responsabilities-->
                                    <li>Assist in Maintenance and up keep of website</li>
                                    <li>Implement new exciting features</li>
                                    <li>Work within a team of other enthusiastic web developers </li>
                                </ol>
                            <li><strong>Requirements:</strong></li>
                            <!--nested list for requirements-->
                                <ol>
                                    <li>Knowledge of HTML, CSS, RUBY, JAVA SCRIPT</li>
                                    <li>A Can do attitude</li>
                                    <li>Strong ability to work as an effective team member</li>
                                    <li>enthusiasm and a loving of learning </li>
                                    <li>A love of Krill (a disdain for whales is also encouraged)</li>
                                </ol>
                        </ul>
            </section>
            <!--end of job 1-->
            <!--start of job 2-->
            <section class="job_pos" aria-labelledby="job_2">
                        <a  href="apply.html"
                        target="_blank"
                        title="go to job"
                        hreflang="en"><h4 class="job_title" id="job_2">Entry Level Software Developer</h4></a> <p class="jobno">Job No <br> </p> <p class="job_num">#A74K9</p>
                        <ul class="job_list">
                            <li><strong>Description:</strong><br>Join an exciting team of passionate volunteers and feel the real impact of your work, this role is to be a crucial part of our software Dev team Assist in the creation and maintenance of the organizations internally used software such as our world class whale tracking systems</li>
                            <li><strong>Salary:</strong><br>Volunteer Based</li>
                            <li><strong>Reporting Line:</strong><br>Head of Software Development</li>
                            <li><strong>Key Responsibilities:</strong></li>
                                <!--nested list for responsabilities-->
                                <ol class="job_ol">
                                    <li>Maintenance and up keep of internally used systems</li>
                                    <li>Implement new exciting features</li>
                                    <li>Work within a team of other enthusiastic of software developers </li>
                                </ol>
                            <li><strong>Requirements:</strong></li>
                                <!--nested list for Requirements-->
                                <ol class="job_ol">
                                    <li>Knowledge of, Ruby, Python and C</li>
                                    <li>A can do attitude</li>
                                    <li>Strong ability to work as an effective team member</li>
                                    <li>enthusiasm and a loving of learning </li>
                                    <li>A love of Krill (a disdain for whales is also encouraged)</li>
                                </ol>
                        </ul>
            </section>
            <!--end of job 2-->
            

        </main>
        <!--end of main-->
        <!--footer shared across all pages-->
        <!--start of footer-->
        <footer>
            <!-- footer with copyright and other details, along with the link to the Jira board. -->
            <p id="footercopy">&copy; Copyright Save the Krill 1830-2025 &trade; &reg;  
            <a href="https://lachiecolville.atlassian.net/jira/software/projects/T2G/boards/34/backlog?epics=visible&jql=parent%20IN%20%28__OPTIMISTIC_UI__%2C%20empty%2C%20T2G-7%2C%20T2G-7%2C%20T2G-8%29">Jira</a> </p>
        </footer>
        <!--end of footer-->
    </body>
    <!--end of body-->
</html>

#jobs.php Vethum

<?php
// Include shared layout and database connection
include('header.inc');
include('nav.inc');
require_once('settings.php');

// Connect to MySQL database
$conn = @mysqli_connect($host, $user, $pwd, $sql_db);

if (!$conn) {
    die("<p>Database connection failed: " . mysqli_connect_error() . "</p>");
}

// SQL query to get all jobs
$sql = "SELECT * FROM jobs";
$result = mysqli_query($conn, $sql);
?>

<main>
    <section id="job_page" aria-labelledby="job_h2">
        <h2 id="job_h2" class="job_headings">Current Job Positions</h2>
    </section>

    <aside id="job_aside">
        <p style="font-style: italic;">
            <strong>Note:</strong> Save The Shrimp &copy; is a non-profit organization and all positions are on a volunteer basis.
        </p>
    </aside>

    <?php
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<section class='job_pos'>";
            echo "<a href='apply.php?job_ref={$row['job_ref']}' title='Apply for this job'>";
            echo "<h4 class='job_title'>{$row['job_title']}</h4></a>";
            echo "<p class='jobno'>Job No</p>";
            echo "<p class='job_num'>#{$row['job_ref']}</p>";

            echo "<ul class='job_list'>";
            echo "<li><strong>Description:</strong><br>{$row['job_description']}</li>";
            echo "<li><strong>Location:</strong><br>{$row['location']}</li>";
            echo "<li><strong>Position Type:</strong><br>{$row['position_type']}</li>";
            echo "<li><strong>Contract Type:</strong><br>{$row['contract_type']}</li>";
            echo "<li><strong>Salary Range:</strong><br>{$row['salary_range']}</li>";
            echo "<li><strong>Closing Date:</strong><br>{$row['closing_date']}</li>";
            echo "<li><strong>Qualifications:</strong><br>{$row['qualifications']}</li>";
            echo "<li><strong>Responsibilities:</strong><br>{$row['responsibilities']}</li>";
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
