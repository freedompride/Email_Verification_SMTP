<?php
error_reporting(0);
require_once ('smtp_validateEmail.class.php');

$email = $_POST['email'];
if(isset($_POST['email'])){
$sender = 'user@mydomain.com';
$SMTP_Validator = new SMTP_validateEmail();
$SMTP_Validator->debug = true;
$results = $SMTP_Validator->validate(array($email), $sender);
if ($results[$email]) {
    $status = 'success';
} else {
    $status = 'failed';
}
}
echo json_encode(array('status' => $status));
die();
?>