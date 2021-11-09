<?php

require_once('../config.php');

if(!isset($_POST['contractNo'])) {
    echo json_encode(false);
    return;
}

$contractNo = $_POST['contractNo'];

try {
    $sql = "SELECT * FROM funeral_customers WHERE contract_no='$contractNo'";
    
    $result = $db->query($sql);
    
    $emparray = array();
    while($row = $result->fetch_assoc()) {
        $emparray[] = $row;
    }
    echo json_encode($emparray);
}
catch (exception $e) {
    echo json_encode([]);
}

?>