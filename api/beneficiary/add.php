<?php

require_once('../config.php');

if(!isset($_POST['uuid'])) {
    echo json_encode(false);
    return;
}

$uuid = $_POST['uuid'];
$lifePlanCustomer = $_POST['lifePlanCustomer'];
$lname = $_POST['lname'];
$fname = $_POST['fname'];
$mname = $_POST['mname'];
$dateOfBirth = $_POST['dateOfBirth'];
$relationship = $_POST['relationship'];
$address = $_POST['address'];

try {
    $sql = "INSERT INTO beneficiaries VALUES('$uuid','$lifePlanCustomer','$lname','$fname','$mname', '$dateOfBirth', '$relationship','$address')";
    
    $result = $db->query($sql);
}
catch (exception $e) {
    $result = false;
}

echo json_encode($result);

?>