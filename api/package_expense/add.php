<?php

require_once('../config.php');

$customerUuid = $_POST['customerUuid'];
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
    $sql = "INSERT INTO package_expenses VALUES('$customerUuid', $casket, $van, $morgue, $pormalin, $embalmer, $candle, $water_container, $staff, $totalAmount)";
    
    $result = $db->query($sql);
}
catch (exception $e) {
    $result = false;
}

echo json_encode($result);

?>