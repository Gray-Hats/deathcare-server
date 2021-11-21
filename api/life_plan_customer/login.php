<?php

require_once('../config.php');

if(!isset($_POST['contactNo'])) {
    echo json_encode(false);
    return;
}

$contactNo = $_POST['contactNo'];
$password = $_POST['password'];

try {
    $sql = "SELECT * FROM life_plan_customers WHERE contact_no='$contactNo' AND password='$password'";

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