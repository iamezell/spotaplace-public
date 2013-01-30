<?php
	include("services/Setup.php");
	include("services/Request.php");


	$setup = new Setup(); 
	$requestArray = array();
	$id = $_POST["id"];
	//$id = 95;
	$auctions = array();
	$aucs = new Request();
	$auctions = $aucs->getUserRequests($id);
    $auctionsRev = array_reverse($auctions);
    $num = count($auctions);

   	echo json_encode($auctionsRev);
	
?>