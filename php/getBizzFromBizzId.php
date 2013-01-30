<?php
$mysqli = new mysqli("localhost", "root", "root","spotaplaceDB");
$t = array();
if ($mysqli->connect_errno) {
	exit();
}

//$request_id = $_POST['request_id'];
$id2 = $_POST['id'];
//$id2 = 107;


// $limit = 105;
if ($search = $mysqli->query("SELECT businesses.name_of_business,businesses.street,businesses.city,businesses.state,businesses.email_1,businesses.website, businesses.phone_1, review.content, review.votesup, review.votesdown, accounts.name, accounts.nov FROM review LEFT JOIN businesses ON review.business_id=businesses.business_id LEFT JOIN accounts ON review.user_id=accounts.account_id")) {
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
