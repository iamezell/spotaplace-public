<?php
include("services/IndustryConfig.php");

	$ind = new IndustryConfig();
	$list = $ind->getServiceList();
	echo $list;
?>