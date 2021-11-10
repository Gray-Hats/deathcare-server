<?php

require_once('../config.php');

$uuid = $_POST['uuid'];
$referenceNo = $_POST['referenceNo'];
$customer = $_POST['customer'];
$date = $_POST['date'];
$amount = $_POST['amount'];

try {
    $sql = "INSERT INTO payments VALUES('$uuid', '$referenceNo', '$customer', '$date', $amount)";
    
    //$result = $db->query($sql);
    
    echo json_encode($sql);
}
catch (exception $e) {
    echo json_encode(false);
}

?>