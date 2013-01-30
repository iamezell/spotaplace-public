<?php
	
	class SendPic
	{
		public function __construct()
		{
			$server = mysql_connect("h50mysql83.secureserver.net", "spotaplace", "Robbins9@");
			if (!$server) die("Unable to connect to MySQL: " . mysql_error());
			mysql_select_db("spotaplace") or die("something went wrong" .mysql_error());
		}
		
		public function sendData($name,$path,$eventDate,$eventTime,$eventName,$eventState,$eventCity)
		{
			
			//$name = "Ezell";
			//$path = "http://www.spotaplace.com/img/";
			//$eventDate = "11/11/2009";
			//$eventTime = "9:00";
			//$eventName = "dougyFresh!!!";
			$query = "INSERT INTO imagesDB (name,path,eventDate,eventTime,eventName,city,state)VALUES('$name','$path','$eventDate','$eventTime','$eventName','$eventState','$eventCity')";
			$result = @mysql_query($query);
		
		}
	
	
	}
	


?>