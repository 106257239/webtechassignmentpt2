
<?php
require_once('settings.php');
    $conn = mysqli_connect("localhost", "root", "", "web_tech_assignment_2");
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    $results = mysqli_select_db($conn, "db_name");}
        $job_reference = $_post['job_reference'];
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
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
        echo "email: " . htmlspecialchars($email) . "<br>";
        echo "phone: " . htmlspecialchars($phone);
    INSERT INTO `eoi` (`id`, `reference_no`, `firstname`, `lastname`, `dob`, `gender`, `email`, `p/n`, `adress`, `suburb`, `postcode`, `state`, `skills`, `other skills`, `status`) 
    VALUES (NULL, ,'$job_refrence','$firstname', '$lastname', '$DOB', '$gender', 
    '$email', '$phone', '$address', '$suburb', '$postcode', 'state','$frontend', '$otherskills', NULL,)
?>
hi