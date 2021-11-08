<?php

require_once('../config.php');

try {
    $sql = "SELECT COUNT(uuid) as count from life_plan_customers";
    
    $result = $db->query($sql);

    $emparray = array();
    while($row = $result->fetch_assoc()) {
        $emparray[] = $row;
    }
    echo json_encode($emparray);
}
catch (exception $e) {
   echo json_encode(false);
}

?>