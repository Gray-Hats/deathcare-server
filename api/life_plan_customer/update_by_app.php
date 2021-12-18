<?php

require_once('../config.php');

if(!isset($_POST['uuid'])) {
    echo json_encode(false);
    return;
}

$uuid = $_POST['uuid'];

$lname = $_POST['lname'];
$fname = $_POST['fname'];
$mname = $_POST['mname'];
$dateOfBirth = $_POST['dateOfBirth'];
$contactNo = $_POST['contactNo'];
$gender = $_POST['gender'];
$address = $_POST['address'];

$email = $_POST['email'];
$landlineNo = $_POST['landlineNo'];
$birthplace = $_POST['birthplace'];
$lotNo = $_POST['lotNo'];
$street = $_POST['street'];
$province = $_POST['province'];
$city = $_POST['city'];
$barangay = $_POST['barangay'];
$zipcode = $_POST['zipcode'];
$occupation = $_POST['occupation'];
$employmentStatus = $_POST['employmentStatus'];
$taxNo = $_POST['taxNo'];
$sourceOfFund = $_POST['sourceOfFund'];

try {
    $sql = "UPDATE life_plan_customers SET lname='$lname', fname='$fname', mname='$mname', date_of_birth='$dateOfBirth', contact_no='$contactNo', gender='$gender', address='$address', email='$email', landline_no='$landlineNo', birthplace='$birthplace', lot_no='$lotNo', street='$street', province='$province', city='$city', barangay='$barangay', zipcode='$zipcode', occupation='$occupation', employment_status='$employmentStatus', tax_no='$taxNo', source_of_fund='$sourceOfFund'  WHERE uuid='$uuid'";
    
    $result = $db->query($sql);
}
catch (exception $e) {
    $result = false;
}

echo json_encode($result);

?>