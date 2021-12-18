<?php

require_once('../config.php');

if(!isset($_POST['lifePlanCustomer'])) {
    echo json_encode(false);
    return;
}

$lifePlanCustomer = $_POST['lifePlanCustomer'];
$lname = $_POST['lname'];
$fname = $_POST['fname'];
$mname = $_POST['mname'];
$dateOfBirth = $_POST['dateOfBirth'];
$relationship = $_POST['relationship'];
$address = $_POST['address'];

try {
    $sql = "UPDATE beneficiaries SET lname='$lname', fname='$fname', mname='$mname', date_of_birth='$dateOfBirth', relationship='$relationship', address='$address' WHERE life_plan_customer='$lifePlanCustomer'";
    
    $result = $db->query($sql);
}
catch (exception $e) {
    $result = false;
}

echo json_encode($result);

?>