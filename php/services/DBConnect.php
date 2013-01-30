<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
class DBConnect{

public function __construct()
		{
			$server = mysql_connect("localhost", "root", "");
			if (!$server) die("Unable to connect to MySQL: " . mysql_error());
			mysql_select_db("test") or die("something went wrong" .mysql_error());
		}
		

}


?>
