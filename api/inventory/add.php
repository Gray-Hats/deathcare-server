<?php

require_once('../config.php');

if(!isset($_POST['uuid'])) {
    echo json_encode(false);
    return;
}

$uuid = $_POST['uuid'];
$name = $_POST['name'];
$qty = $_POST['qty'];
$dateAdded = $_POST['dateAdded'];

try {
    $sql = "INSERT INTO inventory VALUES('$uuid','$name','$qty','$dateAdded')";
    
    $result = $db->query($sql);
}
catch (exception $e) {
    $result = false;
}

echo json_encode($result);

?>