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
    $sql = "UPDATE death_records lname='$lname', fname='$fname', mname='$mname', birthday='$birthday', death_date='$death_date', address='$address', gender='$gender', relative='$relative', internment_date='$intermentDate' WHERE uuid='$uuid'";
    
    $result = $db->query($sql);
    
    echo json_encode($result);
}
catch (exception $e) {
    echo json_encode(false);
}

?>