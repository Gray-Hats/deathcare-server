<?php

require_once('../config.php');

$contractNo = $_POST['contractNo'];
$hearse = $_POST['hearse'];
$foods = $_POST['foods'];
$refreshment = $_POST['refreshment'];
$balloons = $_POST['balloons'];
$barangay = $_POST['barangay'];
$staff = $_POST['staff'];
$other = $_POST['other'];
$totalAmount = $_POST['totalAmount'];

try {
    $sql = "UPDATE internment_expenses SET hearse=$hearse, foods=$foods, refreshment=$refreshment, balloons=$balloons, barangay=$barangay, staff=$staff, other=$other, total_amount=$totalAmount WHERE customer='$contractNo'";
    
    $result = $db->query($sql);
}
catch (exception $e) {
    $result = false;
}

echo json_encode($result);

?>