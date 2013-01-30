<?php
	include("services/Setup.php");
	$id = $_POST["id"];
	$setup = new Setup();
	$bizzArray = $setup->getUserBizz($id);
	echo json_encode($bizzArray);
?>