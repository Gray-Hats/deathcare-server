<?php

require_once('../config.php');

$uuid = $_POST['uuid'];

try {
    $sql = "SELECT * FROM life_plan_customers WHERE uuid='$uuid'";
    
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