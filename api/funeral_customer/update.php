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
$contactNo = $_POST['contactNo'];
$dueDate = $_POST['dueDate'];
$downPayment = $_POST['downPayment'];
$address = $_POST['address'];
$gender = $_POST['gender'];
$amountPaid = $_POST['amountPaid'];
$package = $_POST['package'];

try {
    $sql = "UPDATE funeral_customers SET lname='$lname', fname='$fname', mname='$mname', contact_no='$contactNo', due_date='$dueDate', down_payment='$downPayment', address='$address',gender='$gender', amount_paid=$amountPaid, package='$package' WHERE uuid='$uuid'";
    
    $result = $db->query($sql);
}
catch (exception $e) {
    $result = false;
}

echo json_encode($sql);

?>