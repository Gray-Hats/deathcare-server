<?php

require_once('../config.php');

$uuid = $_POST['uuid'];
$password = $_POST['password'];

try {
    $sql = "UPDATE life_plan_customers SET password='$password' WHERE uuid='$uuid'";
    
    $result = $db->query($sql);
}
catch (exception $e) {
    $result = false;
}

echo json_encode($result);

?>