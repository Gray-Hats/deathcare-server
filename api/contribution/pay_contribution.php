<?php

require_once('../config.php');

$uuid = $_POST['uuid'];
$referenceNo = $_POST['referenceNo'];
$paymentDate = $_POST['paymentDate'];
$month = $_POST['month'];
$year = $_POST['year'];
$amount = $_POST['amount'];
$customerNo = $_POST['customerNo'];
$status = $_POST['status'];
$penalty = $_POST['penalty'];

try {
    $sql = "INSERT INTO contributions VALUES ('$uuid','$referenceNo','$paymentDate','$month','$year',$amount,'$customerNo','$status',$penalty)";
    
    $result = $db->query($sql);
    
    echo json_encode($result);
}
catch (exception $e) {
    echo json_encode(false);
}

?>