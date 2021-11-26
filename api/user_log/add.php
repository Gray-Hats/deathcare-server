<?php

require_once('../config.php');

if(!isset($_POST['uuid'])) {
    echo json_encode(false);
    return;
}

$uuid = $_POST['uuid'];
$user = $_POST['user'];
$timeIn = $_POST['timeIn'];
$timeOut = $_POST['timeOut'];

try {
    $sql = "INSERT INTO user_log VALUES('$uuid', '$user', '$timeIn', '$timeOut')";
    
    $result = $db->query($sql);
    
    echo json_encode($result);
}
catch (exception $e) {
    echo json_encode(false);
}

?>