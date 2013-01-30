<?php
$mysqli = new mysqli("localhost", "root", "","spotaplaceDB");
$t = array();
if ($mysqli->connect_errno) {
    echo "Connect failed: %s\n", $mysqli->connect_error;
    exit();
	}

$request_id = $_POST['id'];
error_log("the request number is".$request_id);
//$request_id = 130;

  	if ($search = $mysqli->query("SELECT * FROM bids LEFT JOIN businesses ON bids.business_id=businesses.business_id WHERE bids.request_id='".$request_id."' ORDER BY bids.bid_time DESC")) {
   		/* determine number of rows result set */
		 $row_cnt = $search->num_rows;
		if($row_cnt > 0){  
			//ok if there is a match now we need to get all the info from the table
				while($row = $search->fetch_assoc())
				{
					array_push($t, $row);
				}
				echo json_encode($t);
		}else{
			$message = "there is no match";
			$t = array($message);
			echo json_encode($t);
		}

					    /* close result set */
					    $search->close();

	}else{
		$error = "Errormessage:".$mysqli->error;
		$t = array($error);
		echo json_encode($t);
						 					
	}
	/* close connection */
	$mysqli->close();
