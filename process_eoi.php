<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
        $firstname = trim($_POST ['first_name']);
        $lastname = trim($_POST['last_name']);
        $dob = trim($_POST['DOB']);
        $gender = trim($_POST['gender']);
        $email = trim($_POST['email']);
        $phone = trim($_POST['phone']);
        $address = trim($_POST['address']);
        $suburb = trim($_POST['suburb']);
        $postcode = trim($_POST['postcode']);
        $state = trim($_POST['state']);
        $frontend= trim($_POST['Frontend']);
        $otherskills = trim($_POST['other_skills']);
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
// retrieve required information for connection
require_once('settings.php');

// connect to database
$conn = @mysqli_connect($host, $user, $pwd, $sql_db);

// Check connection if it was a failure or success
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
} else {
    echo "Connected successfully<br>";
}
// insert data from variables in to eoi table 
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
?>
</body>
</html>