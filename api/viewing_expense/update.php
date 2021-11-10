<?php

require_once('../config.php');

$contractNo = $_POST['contractNo'];
$hearse = $_POST['customerNo'];
$foods = $_POST['lname'];
$refreshment = $_POST['fname'];
$balloons = $_POST['mname'];
$barangay = $_POST['contactNo'];
$staff = $_POST['dueDate'];
$other = $_POST['downPayment'];
$totalAmount = $_POST['address'];

try {
    $sql = "UPDATE viewing_expenses SET flowers=$flowers, tarpaulin=$tarpaulin, frame=$frame, staff=$staff, van=$van, refreshment=$refreshment, total_amount=$totalAmount WHERE customer='$contractNo'";
    
    $result = $db->query($sql);
}
catch (exception $e) {
    $result = false;
}

echo json_encode($result);

?>