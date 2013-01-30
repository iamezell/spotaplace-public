<?php
include("services/ValidateEmail.php");

if(empty($_POST['email']) || empty($_POST['password'])){
	$name = NULL;
	error_log($_POST['email']);
}else{
	$email = $_POST['email'];
	$password2 = $_POST['past'];
	$password = $_POST['password'];
	$reg = new ValidateEmail();
	$user_array = array();
	$user_array = $reg->checkAndLogin($email,$password);
	$num = count($user_array);
        error_log("we got here");
	if($num > 0){
		
		error_log("this is the dump");
                
                $user = json_encode($user_array[0]);
		$returnObj = array(
    "redirect" => true,
    "message" => "home.html",
    "userInfo" => $user		
);
		echo json_encode($returnObj);
	}else{
		// header("location:index.php");
		$returnObj = array(
    "redirect" => false,
    "message" => "thanks"
);
		echo json_encode($returnObj);
		

	}
	
}




?>