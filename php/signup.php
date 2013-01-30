<?php

include("services/ValidateEmail.php");

	



//check city
if(empty($_POST['city'])){
	$city = NULL;
}
else
{
	$city = $_POST['city'];
}
//check street
if(empty($_POST['street'])){
	$street = NULL;
}
else
{
	$street = $_POST['street'];
}
//check street Number
if(empty($_POST['streetNum'])){
	$street = NULL;
}
else
{
	$street = $_POST['streetNum'];
}
//check state
if(empty($_POST['state'])){
	$state = NULL;
}
else
{
	$state = $_POST['state'];
}
//check email
if(empty($_POST['email'])){
	$email = NULL;
}
else
{
	$email = $_POST['email'];
}

//check name
if(empty($_POST['name_of_bizz'])){
	$bizzName = NULL;
}
else
{
	$bizzName = $_POST['name_of_bizz'];
}
//check fax
if(empty($_POST['fax'])){
	$fax = NULL;
}
else
{
	$fax = $_POST['fax'];
}

//check fax
if(empty($_POST['phone'])){
	$phone = NULL;
}
else
{
	$phone = $_POST['phone'];
}

//check website
if(empty($_POST['website'])){
	$website = NULL;
}
else
{
	$website = $_POST['website'];
}

//check zip
if(empty($_POST['zip'])){
	$zip = NULL;
}
else
{
	$zip = $_POST['zip'];
}

//check descripton
if(empty($_POST['desc'])){
	$descrip = NULL;
}
else
{
	$descrip = $_POST['desc'];
}

//check industry
if(empty($_POST['industry'])){
	$industry = NULL;
	//echo 'nothing in there';
}
else
{
	$industry = $_POST['industry'];
	//echo 'some of the things'.$industry;
}



	
     
	//session_start();
	$id=$_POST['id'];
	$reg = new ValidateEmail();
	$reg->add_bizz($id,$bizzName,$street,$city,$state,$zip,$phone,$fax,$website,$email,$industry,$descrip);
	header("location: businessDashboard.php");