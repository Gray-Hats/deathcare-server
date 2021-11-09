<?php

require_once('../config.php');

if(!isset($_POST['customerNo'])) {
    echo json_encode(false);
    return;
}

$customerNo = $_POST['customerNo'];

try {
    $sql = "SELECT * FROM life_plan_customers WHERE customer_no='$customerNo'";
    
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