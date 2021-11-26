<?php

require_once('../config.php');

try {
    $sql = "SELECT * from user_log ORDER BY time_in";
    
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