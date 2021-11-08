<?php

require_once('../config.php');

$uuid = $_POST['uuid'];
$lname = $_POST['lname'];
$fname = $_POST['fname'];
$mname = $_POST['mname'];
$contactNo = $_POST['contactNo'];
$dueDate = $_POST['dueDate'];
$downPayment = $_POST['downPayment'];
$address = $_POST['address'];
$gender = $_POST['gender'];
$totalAmount = $_POST['totalAmount'];
$amountPaid = $_POST['amountPaid'];

try {
    $sql = "UPDATE funeral_customers SET lname='$lname', fname='$fname', mname='$mname', contact_no='$contactNo', due_date='$dueDate', down_payment='$downPayment', address='$address',gender='$gender', total_amount=$totalAmount, amount_paid=$amountPaid WHERE uuid='$uuid'";
    
    $result = $db->query($sql);
}
catch (exception $e) {
    $result = false;
}

echo json_encode($result);

?>