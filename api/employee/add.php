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
    $sql = "INSERT INTO employees ('$uuid', '$employeeNo', '$lname', '$fname', '$mname', '$contactNo', '$address', '$gender', '$position')";
    
    $result = $db->query($sql);
    
    $emparray = array();
    while($row = $result->fetch_assoc()) {
        $emparray[] = $row;
    }
    echo json_encode($emparray);
}
catch (exception $e) {
    echo json_encode([]);
}

?>