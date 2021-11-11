<?php

require_once('../config.php');

try {
    $sql = "SELECT COUNT(uuid) as count, date_registered from life_plan_customers GROUP BY date_registered ORDER BY date_registered";
    
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