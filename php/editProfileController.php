<?php
	include("services/Setup.php");
	$set = new Setup();
	
	$name = $_POST["name"];
	$city = $_POST["city"];
	$state = $_POST["state"];
	
	$age = $_POST["age"];
	$gender = $_POST["gender"];
	$id = $_POST["id"];

	//echo $gender;
	//echo $id;

	$set->editProfile($name, $city, $state, $age, $gender, $id);
	header("location: ../profile.html");
	echo "hi";
?>