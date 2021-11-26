<?php

require_once('../config.php');

try {
    $sql = "SELECT COUNT(uuid) as count, death_date from death_records GROUP BY death_date ORDER BY death_date";
    
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