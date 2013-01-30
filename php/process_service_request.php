<?php
session_start(); //start the session
include("services/Request.php");

//make the query
$industry = $_POST['industry'];
$industry_id =  $_POST['selectcontrol'];
$city = $_POST['city'];
$state = $_POST['state'];
$message_body = $_POST['textarea'];
$account_id = $_POST['id'];
$business_array = array();
$emailListArray = array();

// lets make the chanel

$chanel = md5("$message_body".strval(rand(0, 100)));
$request = new Request();

$ret = $request->sendRequests($industry_id, $industry, $account_id, $city, $state, $message_body, $chanel);


// ok lets send back a requst for them peeps
//check if request went through

	$returnObj = array(
    "redirect" => true
    );
	echo json_encode($returnObj);


//ok now lets redirect
//$URL = "../auctions.html";
//header ("Location: $URL");

/*$q = "INSERT INTO requests(industry_id,account_id,city,state,message_body)VALUES ('$industry_id','$profile_id','$city','$state','$desc')" or die(mysql_error());
$r = mysqli_query($dbc,$q);
if($r)
{
	echo"it worked";
	$URL="http://spotaplace.com/loggedin.php"; 
	//we need to send an email to all the businessess on the list if they opt-in for email
	$getAllBusinesses = "SELECT business_id FROM bizztoindustry WHERE industry_id=".mysql_real_escape_string($industry_id);
	$result = mysql_query($getAllBusinesses) or die("something went wrong".mysql_error());	
	while($row = mysql_fetch_assoc($result))
	{
		array_push($business_array,$row);
	}
	//next we need to go back ointo the database to pick out the email address of the businesses
	for($i=0; $i < count($business_array); $i++){
		
	
		$getemailquery = "SELECT email FROM businesses WHERE business_id=".mysql_real_escape_string($business_array[$i]);
		// now we need to mail the requests out to the businesses
		$result2 = mysql_query($getemailquery) or die("there was a problem getting the email addresses of the business".mysql_error());
		while($row2 = mysql_fetch_assoc($result2))
		{
			array_push($emailListArray, $row2);
		}
	}
	
	for ($j=0; $j < count($emailListArray); $j++) { 
		error_log('works');
	}
	//mail($to, $subject, $message)

header ("Location: $URL"); 
}else{
	echo mysqli_error($dbc);
}
*/

?>
