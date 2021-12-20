<?php

require_once('../config.php');

if(!isset($_POST['uuid'])) {
    echo json_encode(false);
    return;
}

$uuid = $_POST['uuid'];
$verified = $_POST['verified'];

try {
    $sql = "UPDATE life_plan_customers set is_verified=$verified WHERE uuid='$uuid'";
    
    $result = $db->query($sql);
}
catch (exception $e) {
    $result = false;
}

echo json_encode($result);

?>