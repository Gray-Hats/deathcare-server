<?php

require_once('../config.php');

$contractNo = $_POST['contractNo'];
$casket = $_POST['casket'];
$van = $_POST['van'];
$morgue = $_POST['morgue'];
$pormalin = $_POST['pormalin'];
$embalmer = $_POST['embalmer'];
$candle = $_POST['candle'];
$water_container = $_POST['water_container'];
$staff = $_POST['staff'];
$totalAmount = $_POST['address'];

try {
    $sql = "INSERT INTO package_expenses VALUES('$contractNo', $casket, $van, $morgue, $pormalin, $embalmer, $candle, $water_container, $staff, $totalAmount)";
    
    $result = $db->query($sql);
}
catch (exception $e) {
    $result = false;
}

echo json_encode($result);

?>