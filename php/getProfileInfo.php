<?php
	include("services/ValidateEmail.php");
	$id = $_POST["id"];
	//$id = 95;
	$profile = new ValidateEmail();
	$t = array();

	$t = $profile->getProfileInfo($id);

	$user = json_encode($t[0]);

	$returnObj = array(
    "profile" => $user
);
echo json_encode($returnObj);

?>