<?php

require_once('../config.php');

if(!isset($_POST['lifePlanCustomer'])) {
    echo json_encode(false);
    return;
}

$lifePlanCustomer = $_POST['lifePlanCustomer'];

try {
    $sql = "SELECT * FROM beneficiaries WHERE life_plan_customer='$lifePlanCustomer'";
    
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