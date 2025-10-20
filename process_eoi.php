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
<?php
if ($_SERVER["REQUEST_METHOD"] != "POST") {
    header( 'Location: /webtechassignmentpt2/apply.html' ) ;}
?>
<?php
// retrieve from post method form data and assign to variable 
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
        $frontend= sanitise_data($_POST['Frontend']);
        $otherskills = sanitise_data($_POST['other_skills']);
        // retrieve required information for connection
require_once('settings.php');

// connect to database
$conn = @mysqli_connect($host, $user, $pwd, $sql_db);

// Check connection if it was a failure or success
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
} else {
    echo "Connected successfully<br>";}

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
        skills SET('frontend','backend','database','dataanalysis','projectmanagement') NOT NULL,
        otherskills TEXT NOT NULL,
        status ENUM('New','Current','Final') NOT NULL DEFAULT 'New',
        created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
        PRIMARY KEY (id)
    ) ENGINE=InnoDB;";

    if (!mysqli_query($conn, $createTableSQL)) {
        die(" Error creating table: " . mysqli_error($conn));
    } else {
        echo " Table '$tablename' ready.<br>";
    }


//insert data from variables in to eoi table 
$stmt = $conn->prepare  ("INSERT INTO `eoi` (`id`, `reference_no`, `firstname`, `lastname`, `dob`, `gender`, `email`,`phone`, `address`, `suburb`, `postcode`, `state`, `skills`, `otherskills`, `status`)
VALUES (Null, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, 1 );");
$stmt->bind_param("sssssssssssss",  $job_reference,$firstname,$lastname,$dob,$gender,$email,$phone,$address,$suburb,$postcode,$state,$frontend,$otherskills);
$stmt->execute();
$results = $stmt->get_result();
// echo if results where successful
if ($stmt) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
// close sql connections 
mysqli_close($conn);

        // variable displaying 
            echo $job_reference . "<br>";
            echo $firstname. "<br>";
            echo $lastname. "<br>";
            echo $dob. "<br>";
            echo $gender. "<br>";
            echo $email. "<br>";
            echo $phone. "<br>";
            echo $address. "<br>";
            echo $suburb. "<br>";
            echo $postcode. "<br>";
            echo $state. "<br>";
            echo $frontend. "<br>";
            echo $otherskills. "<br>";
        }
//Data sanatising 
function sanitise_data($data) {
    $data = trim($data);                 
    $data = htmlspecialchars($data);
    $data = stripslashes($data);       
    return $data;
}
?>
</body>
</html>