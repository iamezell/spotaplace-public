<?php
	include('BidService.php');
	$bidsArray = $bids->getBids($request_id);

    error_log("there are ".count($bidsArray)." bids in the database and the business_id = ".$_POST["request_id"]);
     $numOfBids = count($bidsArray);
     $returnObj = array("message"=>false);
      if($numOfBids < 1)
      {   
          error_log("umm");
          	$returnObj["message"] = "nobids";
      }else{
      		$returnObj["message"] = "bids";
      }
      //return the bids
      echo json_encode($returnObj)
?>