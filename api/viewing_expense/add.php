<?php

require_once('../config.php');

$contractNo = $_POST['contractNo'];
$flowers = $_POST['flowers'];
$tarpaulin = $_POST['tarpaulin'];
$frame = $_POST['frame'];
$staff = $_POST['staff'];
$van = $_POST['van'];
$refreshment = $_POST['refreshment'];
$totalAmount = $_POST['address'];

try {
    $sql = "INSERT INTO viewing_expenses VALUES('$contractNo', $flowers, $tarpaulin, $frame, $staff, $van, $refreshment, $totalAmount)";
    
    $result = $db->query($sql);
}
catch (exception $e) {
    $result = false;
}

echo json_encode($result);

?>