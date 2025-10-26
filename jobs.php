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
    include('header.inc');
    include('nav.inc');
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
            <!--end of pages aside-->
            <!-- start of job one -->
            <section class="job_pos" aria-labelledby="job_1">   
                <!-- heading links to apply page with a blank title so it opens in the same page-->                
                        <h4 class="job_title" id="job_1" style="font-size:2vw">Entry Level Web Developer</h4> 
                        <h5 class="jobno" style="font-size:2vw">Job No <br></h5> 
                        <p class="job_num" style="font-size:2vw">#B28L0</p>
                        <!--list for job requirements-->
                        <dl class="job_list">
                            <dt style="font-size:1vw"><strong>Description:</strong></dt>
                                <dd>Join an exciting team of passionate volunteers and feel the real impact of your work, this role is to be a crucial part of our Web Dev team Assist in the creation and maintenance of the organizations web presences,
                                help get the word out about our great cause </dd>
                            <dt style="font-size:1vw"><strong>Salary:</strong></dt>
                                <dd>$0</dd>
                            <dt style="font-size:1vw"><strong>Reporting Line:</strong></dt>
                                <dd>Head of Web Development<dd>
                            <dt style="font-size:1vw"><strong>Key Responsibilities:</strong></dt>
                                <dd>
                                    <ul class = "job_ul">
                                <!--nested list for responsabilities-->
                                        <li style="font-size:1vw">Assist in Maintenance and up keep of website</li>
                                        <li style="font-size:1vw">Implement new exciting features</li>
                                        <li style="font-size:1vw">Work within a team of other enthusiastic web developers </li>
                                    </ul>
                                </dd>
                            <dt style="font-size:1vw"><strong>Requirements:</strong></dt>
                            <!--nested list for requirements-->
                                <dd>
                                    <ol>
                                    <h5>Required</h5>
                                        <li>Knowledge of HTML, CSS, RUBY, JAVA SCRIPT</li>
                                        <li>Strong ability to work as an effective team member</li>
                                    <h5>Preferred</h5>
                                        <li>A Can do attitude</li>
                                        <li>enthusiasm and a loving of learning </li>
                                        <li>A love of Krill (a disdain for whales is also encouraged)</li>
                                </ol>
                            </dd>
                        </dt>
            </section>
            <!--end of job 1-->
            <!--start of job 2-->
            <section class="job_pos" aria-labelledby="job_2">
                        <h4 class="job_title" id="job_2" style="font-size:2vw">Entry Level Software Developer</h4>
                        <h5 class="jobno" style="font-size:2vw">Job No <br> </h5> <p class="job_num" style="font-size:2vw">#A74K9</p>
                        <ul class="job_list">
                            <dl class="job_list">
                            <dt style="font-size:1vw"><strong>Description:</strong></dt>
                                <dd>Join an exciting team of passionate volunteers and feel the real impact of your work, this role is to be a
                                    crucial part of our software Dev team Assist in the creation and maintenance of the organizations 
                                    internally used software such as our world class whale tracking systems </dd>
                            <dt style="font-size:1vw"><strong>Salary:</strong></dt>
                                <dd>$0</dd>
                            <dt style="font-size:1vw"><strong>Reporting Line:</strong></dt>
                                <dd>Head of Software Development<dd>
                            <dt style="font-size:1vw"><strong>Key Responsibilities:</strong></dt>
                                <dd>
                                    <ul class = "job_ul">
                                <!--nested list for responsabilities-->
                                        <li>Maintenance and up keep of internally used systems</li>
                                        <li>Implement new exciting features</li>
                                        <li>Work within a team of other enthusiastic of software developers</li>
                                    </ul>
                                </dd>
                            <dt><strong>Requirements:</strong></dt>
                            <!--nested list for requirements-->
                                <dd>
                                    <ol>
                                    <h5>Required</h5>
                                        <li>Knowledge of HTML, CSS, RUBY, JAVA SCRIPT</li>
                                        <li>Strong ability to work as an effective team member</li>
                                    <h5>Preferred</h5>
                                        <li>A Can do attitude</li>
                                        <li>enthusiasm and a loving of learning </li>
                                        <li>A love of Krill (a disdain for whales is also encouraged)</li>
                                </ol>
                            </dd>
                        </dt>
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

