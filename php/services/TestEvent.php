<?php

	class TestEvent

	{

		public function __construct()

		{

			$server = mysql_connect("h50mysql83.secureserver.net", "spotaplace", "Robbins9@");

			if (!$server) die("Unable to connect to MySQL: " . mysql_error());

			mysql_select_db("spotaplace") or die("something went wrong" .mysql_error());

		}

		

			public function getTutorials2($city)

		{

			//Find out how many rows are  in the table

			//$result = mysql_query("SELECT COUNT(*) FROM imagesDB");

			$t = array();

			//$r = mysql_fetch_row($result);

			//$numRows = $r[0];

		

			//number of rows to show per page

			//$rowsPerPage = 10;

		

			//find out the total number of pages

			//$totalPages = ceil($numRows / $rowsPerPage);

		

		

			//while($row = mysql_fetch_assoc($result))

			//{

			//	array_push($t, $row);

			//}

		

			//return $t;

			

			$result = mysql_query("SELECT * FROM imagesDB WHERE city = '$city'");

			while($row = mysql_fetch_assoc($result))

			{

				array_push($t, $row);

			}

			return $t;

			

			

			

			

		}

		

		public function getTutorials($city, $page)

		{

			//Find out how many rows are  in the table

			//$result = mysql_query("SELECT COUNT(*) FROM imagesDB");

			$t = array();

			//$r = mysql_fetch_row($result);

			//$numRows = $r[0];

		

			//number of rows to show per page

			//$rowsPerPage = 10;

		

			//find out the total number of pages

			//$totalPages = ceil($numRows / $rowsPerPage);

		

		

			//while($row = mysql_fetch_assoc($result))

			//{

			//	array_push($t, $row);

			//}

		

			//return $t;

			//start row

			$startRow = ($page * 4)-4;

			$numRows = 4;

			

			$result = mysql_query("SELECT * FROM imagesDB WHERE city = '$city' LIMIT $startRow,$numRows");

			while($row = mysql_fetch_assoc($result))

			{

				array_push($t, $row);

			}

			return $t;

			

			

			

			

		}

		

		

	

	}

	

?>