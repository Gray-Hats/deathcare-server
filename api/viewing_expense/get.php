<?php

require_once('../config.php');

$contractNo = $_POST['contractNo'];

try {
    $sql = "SELECT * FROM viewing_expenses WHERE customer='$contractNo'";
    
    $result = $db->query($sql);
    
    echo json_encode($result);
    // $emparray = array();
    // while($row = $result->fetch_assoc()) {
    //     $emparray[] = $row;
    // }
    // echo json_encode($emparray);
}
catch (exception $e) {
    echo json_encode([]);
}
?>