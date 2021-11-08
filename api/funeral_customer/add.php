<?php

require_once('../config.php');

$uuid = $_POST['uuid'];
$customerNo = $_POST['customerNo'];
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
    $sql = "INSERT INTO funeral_customers VALUES('$uuid','$customerNo','$lname','$fname','$mname','$contactNo','$dueDate','$downPayment','$address','$gender',$totalAmount,$amountPaid)";
    
    $result = $db->query($sql);
}
catch (exception $e) {
    $result = false;
}

echo json_encode($result);

?>