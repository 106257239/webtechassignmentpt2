<!DOCTYPE html>
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
    <!--start of header and nav -->    
<?php
    include('header.inc');
    include('nav.inc');
?>
        <!--end of header and nav section-->
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
<?php
    include('footer.inc');
?>
        <!--end of footer-->
    </body>
    <!--end of body-->
</html>

