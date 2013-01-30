<?php
include("services/ValidateEmail.php");

$email = $_POST['email'];
$password = $_POST['password'];
$passwordConfirm = $_POST['passwordConfirm'];

error_log($email);
error_log($password);
error_log($passwordConfirm);
	
if(!empty($_POST['email']) && !empty($_POST['password']) && !empty($_POST['passwordConfirm']))
{  
	
	error_log("went through");
	$reg = new ValidateEmail();
	$message = $reg->add_user($email,$password);
	$returnObj = array(
    "redirect" => true,
    "message" => $message
);
		echo json_encode($returnObj);
	
}else{
	error_log("should not see both");
	$message = "Please fill out all information correctly.";	
	$returnObj = array(
    "redirect" => false,
    "message" => $message
	);
	echo json_encode($returnObj);
}
?>