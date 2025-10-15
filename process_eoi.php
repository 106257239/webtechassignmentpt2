
<?php
require_once('settings.php');
    $conn = mysqli_connect("localhost", "root", "", "web_tech_assignment_2");
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    $results = mysqli_select_db($conn, "db_name");}
        if ($results) {}
            echo "conection sucessfull"
        require_once ('eoi.sql");

    // INSERT INTO `eoi` (`id`, `reference_no`, `firstname`, `lastname`, `dob`, `gender`, `email`, `p/n`, `adress`, `suburb`, `postcode`, `state`, `skills`, `other skills`, `status`) 
    // VALUES (NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '')
?>
hi