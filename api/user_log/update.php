<?php

require_once('../config.php');

if(!isset($_POST['uuid'])) {
    echo json_encode(false);
    return;
}

$uuid = $_POST['uuid'];
$timeOut = $_POST['timeOut'];

try {
    $sql = "UPDATE user_log SET time_out='$timeOut' WHERE uuid='$uuid' ";
    
    $result = $db->query($sql);
    
    echo json_encode($result);
}
catch (exception $e) {
    echo json_encode(false);
}

?>