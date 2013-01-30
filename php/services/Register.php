<?php

	class Register

	{

		public function __construct()

		{

			$server = mysql_connect("localhost", "root", "");

			if (!$server) die("Unable to connect to MySQL: " . mysql_error());

			mysql_select_db("test1") or die("something went wrong" .mysql_error());

		}

		

		public function registerBusiness($name, $ein, $city, $state, $zip, $industry, $niche, $account_id )

		{

			 $query = "INSERT INTO businesses(name_of_business, ein, city, state, zip, industry, niche, account_id)VALUES('". mysql_escape_string($name)."','".mysql_escape_string($ein)."','".mysql_escape_string($city)."','".mysql_escape_string($state)."','".mysql_escape_string($zip)."','".mysql_escape_string($industry)."','".mysql_escape_string($niche)."','".mysql_escape_string($account_id)."')";

			 $result = @mysql_query($query) or die(mysql_error());

		}

		

	}