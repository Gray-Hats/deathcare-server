<?php

require_once('../config.php');

$customerUuid = $_POST['customerUuid'];
$casket = $_POST['casket'];
$van = $_POST['van'];
$morgue = $_POST['morgue'];
$pormalin = $_POST['pormalin'];
$embalmer = $_POST['embalmer'];
$candle = $_POST['candle'];
$waterContainer = $_POST['waterContainer'];
$staff = $_POST['staff'];
$totalAmount = $_POST['address'];

try {
    $sql = "UPDATE package_expenses SET casket=$casket, van=$van, morgue=$morgue, pormalin=$pormalin, embalmer=$embalmer, candle=$candle, water_container=$waterContainer, staff=$staff, total_amount=$totalAmount WHERE customer='$customerUuid'";
    
    $result = $db->query($sql);
}
catch (exception $e) {
    $result = false;
}

echo json_encode($result);

?>