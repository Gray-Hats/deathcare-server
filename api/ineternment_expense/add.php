<?php

require_once('../config.php');

$customerUuid = $_POST['customerUuid'];
$hearse = $_POST['hearse'];
$foods = $_POST['foods'];
$refreshment = $_POST['refreshment'];
$balloons = $_POST['balloons'];
$barangay = $_POST['barangay'];
$staff = $_POST['staff'];
$other = $_POST['other'];
$totalAmount = $_POST['totalAmount'];

try {
    $sql = "INSERT INTO internment_expenses VALUES('$customerUuid', $hearse, $foods, $refreshment, $balloons, $barangay, $staff, $other, $totalAmount)";
    
    $result = $db->query($sql);
}
catch (exception $e) {
    $result = false;
}

echo json_encode($result);

?>