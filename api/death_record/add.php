<?php

require_once('../config.php');

$uuid = $_POST['uuid'];
$record_no = $_POST['record_no'];
$lname = $_POST['lname'];
$fname = $_POST['fname'];
$mname = $_POST['mname'];
$birthday = $_POST['birthday'];
$death_date = $_POST['death_date'];
$address = $_POST['address'];
$gender = $_POST['gender'];
$relative = $_POST['relative'];
$intermentDate = $_POST['intermentDate'];

try {
    $sql = "INSERT INTO death_records VALUES('$uuid','$record_no','$lname','$fname','$mname','$birthday','$death_date','$address','$gender','$relative','$intermentDate')";
    
    $result = $db->query($sql);
    
    echo json_encode($result);
}
catch (exception $e) {
    echo json_encode(false);
}

?>