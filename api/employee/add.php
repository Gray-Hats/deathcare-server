<?php

require_once('../config.php');

if(!isset($_POST['uuid'])) {
    echo json_encode(false);
    return;
}

$uuid = $_POST['uuid'];
$employeeNo = $_POST['employeeNo'];
$lname = $_POST['lname'];
$fname = $_POST['fname'];
$mname = $_POST['mname'];
$contactNo = $_POST['contactNo'];
$address = $_POST['address'];
$gender = $_POST['gender'];
$position = $_POST['position'];

try {
    $sql = "INSERT INTO employees VALUES('$uuid', '$employeeNo', '$lname', '$fname', '$mname', '$contactNo', '$address', '$gender', '$position')";
    
    $result = $db->query($sql);
    
    echo json_encode($result);
}
catch (exception $e) {
    echo json_encode([]);
}

?>