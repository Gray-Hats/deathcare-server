<?php

require_once('../config.php');


try {
    $sql = "SELECT * FROM life_plan_customers  ORDER BY customer_no DESC";
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