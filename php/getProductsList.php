<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
  
	include("services/IndustryConfig.php");

	$ind = new IndustryConfig();
	$list = $ind->getProductList();
	echo $list;

  
  
?>