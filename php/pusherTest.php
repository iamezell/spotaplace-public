<?php

 
//include the pusher publisher library
include_once 'Pusher.php';
include 'services/ValidateEmail.php';
include 'services/Setup.php';
include 'services/bidService.php';
include 'services/Request.php';
//inlcude 'services/';
 


$thing1 = $_POST['request_id'];
$thing2 = $_POST['bizz_id'];
$thing3 = $_POST['description'];
$thing4 = $_POST['price'];
$thing5 = $_POST['chanel_id'];


error_log($thing1);
error_log($thing2);
error_log($thing3);
error_log($thing4);
error_log($thing5);



$bizz = new Setup();
$bidServ = new BidService();
//activate the request
$activateIt = new Request();



$bidServ->makeBid($thing1, $thing4, $thing3, $thing2);
$bizData = array();
$bizData = $bizz->getBizzByBizzId($thing2);
error_log($bizData[0]['name_of_business']);
//$pusherArray = array("request"=> $thing1, "bizzId"=>$thing2);
$thing6 = $activateIt->checkIfActiveRequest($thing1);
//$activateIt->activateRequest($thing1);
error_log("return a  ".$thing6);





error_log("the request id is: ". $thing1." the bid id is: ".$thing2."the description is: ".$thing3." the price is: ".$thing4);
if($thing1) {
    //error_log("here also");
  $pusher = new Pusher("ae1f5dcd397b352ab651", "2faf46c6c4c024a65c78", "13898");
  $pusher->trigger($thing5, 'thing_create', '{"request":"'.$thing1.'","bizz_id":"'.$thing2.'","nob":"'.$bizData[0]['name_of_business'].'","email":"'.$bizData[0]['email_1'].'","website":"'.$bizData[0]['website'].'","phone":"'.$bizData[0]['phone_1'].'","description":"'.$thing3.'","price":"'.$thing4.'","isActive":"'.$thing6.'"}' );
  
}
?>
