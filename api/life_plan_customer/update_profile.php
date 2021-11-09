<?php

require_once('../config.php');
require('../helper.php');

if(!isset($_POST['uuid'])) {
    echo json_encode(false);
    return;
}

$uuid = $_POST['uuid'];
$bucketName = $_POST['bucketName'];

if($_FILES['file']) {
    echo json_encode(false);
    return;
}

if($bucketName) {
    $result = deleteFile($bucketName);
}

$uploadRes = uploadFile($_FILES, 'life_plan_customer/profile');

if($uploadRes) {

    try {
        $sql = "UPDATE life_plan_customer SET profile_url='$result->url', profile_bucket_name='$result->bucket_name' WHERE uuid='$uuid'";
        
        $result = $db->query($sql);
        
        if($result) {
            echo json_encode($uploadRes);
        }
        else {
            echo json_encode(false);
        }
    }
    catch (exception $e) {
        echo json_encode(false);
    }
}
else {
    echo json_encode(false);
}

?>