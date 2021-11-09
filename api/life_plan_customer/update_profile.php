<?php

require_once('../config.php');
require('../helper.php');

if(!isset($_POST['uuid'])) {
    echo json_encode(false);
    return;
}

$uuid = $_POST['uuid'];
$bucketName = $_POST['bucketName'];

if(isset($_FILES['file'])) {
    echo json_encode(false);
    return;
}

echo json_encode(true);

// if($bucketName) {
//     deleteFile($bucketName);
// }

// $upload = uploadFile($_FILES, 'life_plan_customer/profile');

// if($upload) {

//     try {
//         $sql = "UPDATE life_plan_customer SET profile_url='$upload->url', profile_bucket_name='$upload->bucket_name' WHERE uuid='$uuid'";
        
//         $result = $db->query($sql);
        
//         if($result) {
//             echo json_encode($result);
//         }
//         else {
//             echo json_encode(false);
//         }
//     }
//     catch (exception $e) {
//         echo json_encode(false);
//     }
// }
// else {
//     echo json_encode(false);
// }

?>