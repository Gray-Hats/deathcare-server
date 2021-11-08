<?php

require_once('../config.php');

$uuid = $_POST['uuid'];
$customerNo = $_POST['customerNo'];
$lname = $_POST['lname'];
$fname = $_POST['fname'];
$mname = $_POST['mname'];
$dateOfBirth = $_POST['dateOfBirth'];
$contactNo = $_POST['contactNo'];
$gender = $_POST['gender'];
$address = $_POST['address'];
$dateRegistered = $_POST['dateRegistered'];
$status = $_POST['status'];
$lifePlanAmount = $_POST['lifePlanAmount'];

try {
    $sql = "UPDATE life_plan_customers SET lname='$lname', fname='$fname', mname='$mname', date_of_birth='$dateOfBirth', contact_no='$contactNo', gender='$gender', addres='$address', date_registered='$dateRegistered', status='$status', life_plan_amount=$lifePlanAmount WHERE uuid='$uuid'";
    
    $result = $db->query($sql);
}
catch (exception $e) {
    $result = false;
}

echo json_encode($result);

?>