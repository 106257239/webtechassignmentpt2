<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

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
        $otherskills = trim($_POST['suburb']);
        // variable displaying 
            echo $job_reference;
            echo $firstname;
            echo $lastname;
            echo $dob;
            echo $gender;
            echo $email;
            echo $phone;
            echo $address;
            echo $suburb;
            echo $postcode;
            echo $state;
            echo $frontend;
            echo $otherskills;
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
$sql =  "INSERT INTO `eoi` (`id`, `reference_no`, `firstname`, `lastname`, `dob`, `gender`, `email`,`phone`, `address`, `suburb`, `postcode`, `state`, `skills`, `otherskills`, `status`)
VALUES (Null, '$job_reference', '$firstname', '$lastname', '$dob', '$gender', '$email', '$phone', '$address', '$suburb', '$postcode', '$state', '$frontend', '$otherskills', 1 );";
$results = mysqli_query($conn, $sql);
// echo if results where successful
if ($results) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
// close sql connections 
mysqli_close($conn);
?>
</body>
</html>