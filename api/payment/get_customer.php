<?php

require_once('../config.php');

$customerNo = $_POST['customerNo'];

try {
    $sql = "SELECT * FROM payments WHERE customer='$customerNo'";
    
    $result = $db->query($sql);
    
    $emparray = array();
    while($row = result->fetch_assoc()) {
        $emparray[] = $row;
    }
    echo json_encode($emparray);
}
catch (exception $e) {
    echo json_encode([]);
}

?>