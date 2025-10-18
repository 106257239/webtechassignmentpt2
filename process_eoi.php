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

if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $job_reference = $_POST['job_reference'];
        $firstname = $_POST['first_name'];
        $lastname = $_POST['last_name'];
        $dob = $_POST['DOB'];
        $gender = $_POST['gender'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $address = $_POST['address'];
        $suburb = $_POST['suburb'];
        $postcode = $_POST['postcode'];
        $state = $_POST['state'];
        $frontend= $_POST['Frontend'];
        $otherskills = $_POST['suburb'];
            // variable gathering testing
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
// require_once('settings.php');
$host = "localhost";
$user = "root";
$pwd = "";
$sql_db = "webtech_assignment_2"; // Replace with your actual DB name

// connect to database
$conn = @mysqli_connect($host, $user, $pwd, $sql_db);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
} else {
    echo "Connected successfully<br>";
}

$sql = "INSERT INTO `eoi` (`id`, `reference_no`, `firstname`, `lastname`, `dob`, `gender`, `email`,`phone`, `address`, `suburb`, `postcode`, `state`, `skills`, `otherskills`, `status`)
VALUES (Null, '$job_reference', '$firstname', '$lastname', '$dob', '$gender', '$email', '$phone', '$address', '$suburb', '$postcode', '$state', '$frontend', '$otherskills', 1 );";
$results = mysqli_query($conn, $sql);

if ($results) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>
hi
</body>
</html>