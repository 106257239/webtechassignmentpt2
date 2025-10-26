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
</head>
<body>
<!-- header and nav which includes title of the webpage and the logo for our company-->
<?php
    include('header.inc');
    include('nav.inc');
?>

    <h3 style="font-size:2vw">
        If you're eager to begin working with us, please fill the form out below
    </h3>
<!-- Main form  -->
    <form action="https://mercury.swin.edu.au/it000000/formtest.php" method="post" class="form-grid">
        <!-- Fieldset that covers the job reference number found on the jobs page-->
            <fieldset style="font-size:1.5vw">
                <legend>Job Information</legend>
                <label for="job_reference">Reference Number (found on jobs page):</label>
                <input type="text" id="job_reference" name="job_reference" required maxlength="5">
            </fieldset>
        <!-- fieldset that gathers basic information from the applicant-->
            <fieldset style="font-size:1.5vw">
                <legend>Personal Information</legend>
                <label for="first_name">First Name:</label>
                <input type="text" id="first_name" name="first_name" required maxlength="20"><br>
                <label for="last_name">Last Name:</label>
                <input type="text" id="last_name" name="last_name" required maxlength="20"><br>

                <label for="DOB">Date of Birth:</label>
                <input type="date" id="DOB" name="DOB" required><br>

                Gender:
                <input type="radio" id="male" name="gender" value="male" required>
                <label for="gender">Male</label>
                <input type="radio" id="Female" name="gender" value="female" required>
                <label for="gender">Female</label>
                <input type="radio" id="Prefer" name="gender" value="Prefer not to say" required>
                <label for="Prefer">Prefer not to say</label>
            </fieldset>
        
        <!-- fieldset that covers the contact information from the applicant-->
            <fieldset style="font-size:1.5vw">
                <legend>Contact Information</legend>
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required maxlength="40"><br>    
                <label for="phone">Phone Number:</label>
                <input type="tel" id="phone" name="phone" required maxlength="15"><br>
                <label for="address">Street Address:</label>
                <input type="text" id="address" name="address" required maxlength="40"><br>
                <label for="suburb">Suburb:</label> 
                <input type="text" id="suburb" name="suburb" required maxlength="20"><br>
                <label for="postcode">Postcode:</label>
                <input type="text" id="postcode" name="postcode" required maxlength="4"><br>
                <label for="state">State:</label>
                <select id="state" name="state" required>
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
            <fieldset style="font-size:1.5vw">
                <legend>Relevant skills</legend>
                <input type="checkbox" id="Frontend" name="Frontend" value="Frontend" required>
                <label for="Frontend">Frontend Development</label>
                <input type="checkbox" id="Backend" name="Backend" value="Backend" required> 
                <label for="Backend">Backend Development</label><br>
                <input type="checkbox" id="Database" name="Database" value="Database" required>
                <label for="Database">Database Management</label>
                <input type="checkbox" id="dataanalysis" name="dataanalysis" value="dataanalysis" required>
                <label for="dataanalysis">Data Analysis</label><br>
                <input type="checkbox" id="projectmanagement" name="projectmanagement" value="projectmanagement" required>
                <label for="projectmanagement">Project Management</label><br><br>
                <label for="other_skills">Other skills:</label><br>
                <textarea id="other_skills" name="other_skills"> </textarea>
            </fieldset>
        </div>
        <!-- submission and reset buttons for the form-->
        <div class="form-buttons">
            <input type="submit" value="Submit application" style="font-size:1.5vw">
            <input type="reset" value="Reset form" style="font-size:1.5vw">
        </div>
    </form>
    <!-- Footer that is the same across all pages-->
<?php
    include('footer.inc');
?>
</body>
</html>