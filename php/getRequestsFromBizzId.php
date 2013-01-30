<?php
	include("services/Setup.php");
	include("services/Request.php");


	$setup = new Setup(); 
	$requestArray = array();
	$id = $_POST["id"];
	//$id = 118;
	$auctions = array();
	$aucs = new Request();
	// so first we need to get the array of industrues from the business
	$requests = $setup->getAllRequests($id);
	error_log("thia ".$id);
   	echo json_encode($requests);
	
?>