<?php

require_once('../config.php');

if(!isset($_POST['uuid'])) {
    echo json_encode(false);
    return;
}

$uuid = $_POST['uuid'];

$lname = $_POST['lname'];
$fname = $_POST['fname'];
$mname = $_POST['mname'];
$dateOfBirth = $_POST['dateOfBirth'];
$contactNo = $_POST['contactNo'];
$gender = $_POST['gender'];
$address = $_POST['address'];

try {
    $sql = "UPDATE life_plan_customers SET lname='$lname', fname='$fname', mname='$mname', date_of_birth='$dateOfBirth', contact_no='$contactNo', gender='$gender', addres='$address' WHERE uuid='$uuid'";
    
    $result = $db->query($sql);
}
catch (exception $e) {
    $result = false;
}

echo json_encode($result);

?>