<?php

require_once('../config.php');

try {
    $sql = "SELECT payments.*, funeral_customers.lname, funeral_customers.fname, funeral_customers.mname FROM payments INNER JOIN funeral_customers ON payments.customer=funeral_customers.contract_no";
    
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