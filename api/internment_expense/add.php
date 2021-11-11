<?php

require_once('../config.php');

if(!isset($_POST['contractNo'])) {
    echo json_encode(false);
    return;
}

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
    $sql = "INSERT INTO internment_expenses VALUES('$contractNo', $hearse, $foods, $refreshment, $balloons, $barangay, $staff, $other, $totalAmount)";
    
    $result = $db->query($sql);
    echo json_encode($result);
}
catch (exception $e) {
    echo json_encode($e);
}

?>