<?php

class SendImageInfo
{	
	/**
	 * This service sends an email
	 * @returns true or false
	 */
	 
	 public function __construct()
		{
			$server = mysql_connect("h50mysql83.secureserver.net", "spotaplace", "Robbins9@");
			if (!$server) die("Unable to connect to MySQL: " . mysql_error());
			mysql_select_db("spotaplace") or die("something went wrong" .mysql_error());
		}
	function send($, $subject, $message)
	{
		return mail($to, $subject, $message);
		$result = mysql_query("INSERT INTO * imagesDB(");
	}
}

?>