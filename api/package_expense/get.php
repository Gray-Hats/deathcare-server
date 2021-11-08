<?php

require_once('../config.php');

$customerUuid = $_POST['customerUuid'];

try {
    $sql = "SELECT * FROM package_expenses WHERE customer='$customerUuid'";
    
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