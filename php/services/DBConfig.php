<?php

	class DBConfig
{
	
	public function __construct()
		{
			$server = mysql_connect("localhost", "root", "");
			if (!$server) die("Unable to connect to MySQL: " . mysql_error());
			mysql_select_db("test") or die("something went wrong" .mysql_error());
		}
}
?>