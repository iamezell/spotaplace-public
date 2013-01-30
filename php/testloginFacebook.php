<?php
	include "services/ValidateEmail.php";

	$val = new ValidateEmail();
	$ret = $val->add_user_from_facebook("iamnotezell.com", "Ezell");
	var_dump($ret);
?>