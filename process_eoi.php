<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
        <meta name = "viewport" content = "width=device-width, initial-scale=1.0">
        <meta name = "description" content = "job aplication form data ">
        <meta name = "keywords" content = "process, swinburne, assignment">
        <meta name = "author" content = "Sammie Miller">
        <link rel="icon" type="image/x-icon" href="styles/images/shrimp.jpg">
        <!--CSS Refrencing-->
        <link href="styles/style.css"rel= "stylesheet">
        <!--page tab title-->
        <title>Form Results</title>
</head>
<body>
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
                <li><a href="./index.html" target="_self" title="Index Page" hreflang="english" >Home Page</a></li>
                <li><a href="./about.html" target="_self" title="About Page" hreflang="english">About Us</a></li>
                <li><a href="./jobs.html" target="_self" title="Jobs Page" hreflang="english">Jobs</a></li>
                <li><a href="./apply.html" target="_self" title="Apply page" hreflang="english">Volunteer</a></li>
            </ul>
        </nav>
        <!--end of nav section-->
    <h2 class="job_headings" id="job_h2"> Your Application has been submitted<h2>
<?php
// redirect if coming from wrong method
if ($_SERVER["REQUEST_METHOD"] != "POST") {
    header( 'Location: /webtechassignmentpt2/apply.html' ) ;}
?>

<?php
// retrieve from post method form data and assign to variable as well as sanatise data
print_r($_POST);
if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $job_reference = trim($_POST['job_reference']);
        $firstname = sanitise_data($_POST ['first_name']);
        $lastname = sanitise_data($_POST['last_name']);
        $dob = sanitise_data($_POST['DOB']);
        $gender = sanitise_data($_POST['gender']);
        $email = sanitise_data($_POST['email']);
        $phone = sanitise_data($_POST['phone']);
        $address = sanitise_data($_POST['address']);
        $suburb = sanitise_data($_POST['suburb']);
        $postcode = sanitise_data($_POST['postcode']);
        $state = sanitise_data($_POST['state']);
        $frontend = isset($_POST['skill']) ? implode( ",",array_map('sanitise_data', $_POST["skill"])) : "";
        $otherskills = sanitise_data($_POST['other_skills']);
        // check formatting of data and if incorrect display error
        if (!preg_match("/^\w{5}$/",$job_reference)) $errors[] = "5 digit Job Reference Number is required.";
        if (!preg_match("/^\w{1,20}$/",$firstname)) $errors[] = "First Name(1-20 Characters) is required.";
        if (!preg_match("/^\w{1,20}$/",$lastname)) $errors[] = "Last Name (1-20 Characters) is required.";
        if (empty($dob)) $errors[] = "Date of Birth is required.";
        if (empty($gender)) $errors[] = "Gender is required.";
        if (!preg_match("/^.{1,50}$/",$email)) $errors[] = "Email (1-50 Characters) is required.";
        if (!preg_match("/^[0-9]{1,15}$/",$phone)) $errors[] = "Phone number(1-15 Digits) is required.";
        if (!preg_match("/^.{1,40}$/",$address)) $errors[] = "Address (1-40 Characters) is required."; 
        if (!preg_match("/^.{1,20}$/",$suburb)) $errors[] = "Suburb (1-20 Characters) is required.";
        if (!preg_match("/^[0-9]{1,4}$/",$postcode)) $errors[] = "Postcode (1-4 Digits) is required.";
        if (empty($state)) $errors[] = "State is required.";
        if (empty($frontend)) $errors[] = "Skills are required.";
        if (empty($otherskills)) $errors[] = "Other Skills are required.";
        // if (empty($errors)) {
            // Display all error messages
            if (!empty($errors)) {
                // Show errors, do NOT insert into DB
                foreach ($errors as $error) {
                    echo "<p style='color:red;'>" . htmlspecialchars($error) . "</p>";
                    echo "<p><strong>Please go back and fix the errors.</strong></p>";}
                }               
            }
            // if (!preg_match("/^[0-9]{1}$/", $number)) $errors[] = "Favourite number must be a single digit (0–9).";
            // if (empty($pets)) $errors[] = "Please select at least one pet.";
            // if (empty($birthday)) $errors[] = "Birthday is required.";
// retrieve required information for connection
require_once('settings.php');


// connect to database
$conn = @mysqli_connect($host, $user, $pwd, $sql_db);

// Check connection status used for testing 
// if (!$conn) {
//     die("Connection failed: " . mysqli_connect_error());
// } else {
//     echo "Connected successfully<br>";}

// create table if table does not exist
    $tablename = "eoi";
    $createTableSQL = "CREATE TABLE IF NOT EXISTS $tablename (
        id INT(11) NOT NULL AUTO_INCREMENT,
        reference_no VARCHAR(5) NOT NULL,
        firstname VARCHAR(20) NOT NULL,
        lastname VARCHAR(20) NOT NULL,
        dob DATE NOT NULL,
        gender ENUM('Male','Female','prefer_not_to_say') NOT NULL,
        email VARCHAR(50) NOT NULL,
        phone INT(15) NOT NULL,
        address VARCHAR(40) NOT NULL,
        suburb VARCHAR(20) NOT NULL,
        postcode INT(4) NOT NULL,
        state ENUM('vic','nsw','qld','nt','wa','sa','tas','act') NOT NULL,
        skills SET('frontend','backend','database','dataanalysis','projectmanagement'),
        otherskills TEXT NOT NULL,
        status ENUM('New','Current','Final') NOT NULL DEFAULT 'New',
        created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
        PRIMARY KEY (id)
    ) ENGINE=InnoDB;";

// error handeling for table creation 
    if (!mysqli_query($conn, $createTableSQL)) {
        die(" Error creating table: " . mysqli_error($conn));}
    else{
    


//insert data from variables in to eoi table 
    $stmt = $conn->prepare  ("INSERT INTO `eoi` (`id`, `reference_no`, `firstname`, `lastname`, `dob`, `gender`, `email`,`phone`, `address`, `suburb`, `postcode`, `state`, `skills`, `otherskills`, `status`)
        VALUES (Null, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, 'New' );");
    $stmt->bind_param("sssssssssssss",  $job_reference,$firstname,$lastname,$dob,$gender,$email,$phone,$address,$suburb,$postcode,$state,$frontend,$otherskills);
    $stmt->execute();
    $results = $stmt->get_result();
    
    // echo if results where successful used for debugging
    // if ($stmt) {
    //     echo "New record created successfully";
    // } else {
    //     echo "Error: " . $sql . "<br>" . mysqli_error($conn); 
    // }

    // close sql connections 
    mysqli_close($conn);
    }   
// table creation 
    ?>
    <section class="job_pos">
    <table>
        <caption><h2 class="job_headings">Your Application<h2></caption>
        <thead>
            <tr>
                <th>Field</th>
                <th>Answer</th>
            </tr>
        </thead>

<?php
        $jobnum = rand();
        // variable displaying
            echo "<tbody>";
            echo "<tr>";
            echo "<td>Application No</td>";
            echo  "<td>" . $jobnum . "<td></tr>";
            echo "<tr><td>Job Reference</td>";
            echo "<td>" . $job_reference . "</td></tr>";
            echo "<tr><td>Name</,td>";
            echo "<td>". $firstname." " .$lastname. "</td></tr>";
            // echo $lastname. "<br>";
            echo "<tr><td>DOB</td>";
            echo "<td>" . $dob. "</td></tr>";
            echo "<tr><td>Gender</td>";
            echo "<td>" . $gender. "</td></tr>";
            echo "<tr><td>Email</td>";
            echo "<td>" . $email. "</td></tr>";
            echo "<tr><td>Phone Number</td>";
            echo "<td>" . $phone. "</td></tr>";
            echo "<tr><td>Address</td>";
            echo "<td>" . $address. " ".$suburb." ".$postcode." ". $state.  "</td></tr>";
            // echo $suburb. "<br>";
            // echo $postcode. "<br>";
            // echo $state. "<br>";
            echo "<tr><td>Skills</td>";
            echo "<td>". $frontend.", ". $otherskills. "</td></tr>";
            // echo $otherskills. "<br>";
        
    //Data sanatising function
    function sanitise_data($data) {
        $data = trim($data);                 
        $data = htmlspecialchars($data);
        $data = stripslashes($data);       
    return $data;
    }

?>
</tbody>
</table>
</section>
 <footer>
        <!-- footer with copyright and other details, along with the link to the Jira board. -->
        <p id="footercopy">&copy; Copyright Save the Krill 1830-2025 &trade; &reg;  
        <a href="https://lachiecolville.atlassian.net/jira/software/projects/T2G/boards/34/backlog?epics=visible&jql=parent%20IN%20%28__OPTIMISTIC_UI__%2C%20empty%2C%20T2G-7%2C%20T2G-7%2C%20T2G-8%29">Jira</a> </p>
    </footer>
</body>
</html>