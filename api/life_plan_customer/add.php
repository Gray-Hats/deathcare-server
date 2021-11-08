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
$password = $_POST['password'];

try {
    $sql = "INSERT INTO life_plan_customers VALUES('$uuid','$customerNo','$lname','$fname','$mname', '$dateOfBirth', '$contactNo','$gender','$address','$dateRegistered','$status',$lifePlanAmount,'$password','','')";
    
    $result = $db->query($sql);
}
catch (exception $e) {
    $result = false;
}

echo json_encode($result);

?>