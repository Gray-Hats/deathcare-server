<?php

require_once('../config.php');

$uuid = $_POST['uuid'];
$referenceNo = $_POST['referenceNo'];
$customerNo = $_POST['customerNo'];
$paymentDate = $_POST['paymentDate'];
$month = $_POST['month'];
$year = $_POST['year'];
$amount = $_POST['amount'];
$penalty = $_POST['penalty'];

try {
    $sql = "INSERT INTO contributions VALUES ('$uuid','$referenceNo','$customerNo','$paymentDate','$month','$year',$amount,$penalty)";
    
    $result = $db->query($sql);
    
    echo json_encode($result);
}
catch (exception $e) {
    echo json_encode(false);
}

?>