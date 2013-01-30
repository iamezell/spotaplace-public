<?php
include("services/ValidateEmail.php");

// if(empty($_POST['email']) || empty($_POST['name'])){
// 	$name = NULL;
// 	error_log($_POST['email']);
// }else{
	$email = $_POST['email'];
	$name = $_POST['name'];
error_log("this is the email ".$email); 
	// $email = "iamnotezell@gmail.com";
	// $name = "ezell";
	$reg = new ValidateEmail(); -m
	$user_array = array();
	$user_array = $reg->add_user_from_facebook($email, $name);
	$num = count($user_array);
        //error_log("we got here");
	//var_dump("this is the array ".$user_array);
	if($num > 0){
			//lets set the session();
		error_log("this is the num".$num);        
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
	
//} //end else




?>