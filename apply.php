<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="apply page of the job application website">
    <meta name="keywords" content="apply, , assignment">
    <meta name="author" content="Lachie Colville">
    <link href="styles/style.css"rel= "stylesheet">
    <link rel="icon" type="image/x-icon" href="styles/images/shrimp.jpg">
    <title>Volunteer with us!</title>
    <style>
        legend
        {font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;}
    </style>
</head>
<body>
<!-- header and nav which includes title of the webpage and the logo for our company-->
<?php
    include('header.inc');
    include('nav.inc');
?>

    <h3>
        If you're eager to begin working with us, please fill the form out below
    </h3>
<!-- Main form  -->
    <form action="process_eoi.php" method="post" class="form-grid">
        <!-- Fieldset that covers the job reference number found on the jobs page-->
            <fieldset>
                <legend>Job Information</legend>
                <label for="job_reference">Reference Number (found on jobs page):</label>
                <input type="text" id="job_reference" name="job_reference">
            </fieldset>
        <!-- fieldset that gathers basic information from the applicant-->
            <fieldset>
                <legend>Personal Information</legend>
                <label for="first_name">First Name:</label>
                <input type="text" id="first_name" name="first_name"><br>
                <label for="last_name">Last Name:</label>
                <input type="text" id="last_name" name="last_name"><br>

                <label for="DOB">Date of Birth:</label>
                <input type="date" id="DOB" name="DOB" ><br>

                Gender:
                <input type="radio" id="male" name="gender" value="male">
                <label for="gender">Male</label>
                <input type="radio" id="Female" name="gender" value="female">
                <label for="gender">Female</label>
                <input type="radio" id="Prefer" name="gender" value="Prefer not to say">
                <label for="Prefer">Prefer not to say</label>
            </fieldset>
        
        <!-- fieldset that covers the contact information from the applicant-->
            <fieldset>
                <legend>Contact Information</legend>
                <label for="email">Email:</label>
                <input type="email" id="email" name="email"><br>    
                <label for="phone">Phone Number:</label>
                <input type="tel" id="phone" name="phone"><br>
                <label for="address">Street Address:</label>
                <input type="text" id="address" name="address" ><br>
                <label for="suburb">Suburb:</label> 
                <input type="text" id="suburb" name="suburb"><br>
                <label for="postcode">Postcode:</label>
                <input type="text" id="postcode" name="postcode"><br>
                <label for="state">State:</label>
                <select id="state" name="state" >
                    <option value="">Select your state</option>
                    <option value="VIC">VIC</option>
                    <option value="NSW">NSW</option>
                    <option value="QLD">QLD</option>
                    <option value="NT">NT</option>
                    <option value="WA">WA</option>
                    <option value="SA">SA</option>
                    <option value="TAS">TAS</option>
                    <option value="ACT">ACT</option>
                </select>
            </fieldset>

        <!-- fieldset that covers the relevant skills of the applicant-->
        <div class="Skills"></div>
            <fieldset >
                <legend>Relevant skills</legend>
                <input type="checkbox" id="frontend" name="skill[]" value="frontend">
                <label for="frontend">Frontend Development</label>
                <input type="checkbox" id="backend" name="skill[]" value="backend"> 
                <label for="backend">Backend Development</label><br>
                <input type="checkbox" id="database" name="skill[]" value="database">
                <label for="database">Database Management</label>
                <input type="checkbox" id="dataanalysis" name="skill[]" value="dataanalysis">
                <label for="dataanalysis">Data Analysis</label><br>
                <input type="checkbox" id="projectmanagement" name="skill[]" value="projectmanagement">
                <label for="projectmanagement">Project Management</label><br><br>
                <label for="other_skills"><input type= "checkbox" for="other_skills" name = "yes_other" value="yes">Other skills:</label><br>
                
                <textarea id="other_skills" name="other_skills"> </textarea>
            </fieldset>
        </div>
        <!-- submission and reset buttons for the form-->
        <div class="form-buttons">
            <input type="submit" value="Submit application">
            <input type="reset" value="Reset form" style="background-color: azure;">
        </div>
    </form>
    <!-- Footer that is the same across all pages-->
<?php
    include('footer.inc');
?>
</body>
</html>
