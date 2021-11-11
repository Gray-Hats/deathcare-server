<?php

require_once('../config.php');

if(!isset($_POST['contractNo'])) {
    echo json_encode(false);
    return;
}

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
    echo json_encode($sql);
}
catch (exception $e) {
    echo json_encode(false);
}



?>