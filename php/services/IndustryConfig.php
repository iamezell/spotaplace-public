<?php
	include_once("DBConfig.php");

	class IndustryConfig
	{
		

	 public function __construct()
		{
			$DB = new DBConfig();
		}

		public function getProductList()
		{
	
					$t = array();                     
    				$search = mysql_query("SELECT * FROM product") or die(mysql_error());   
    				$match  = mysql_num_rows($search); 
					//$match = 0;
					if($match > 0){  
					 	//ok if there is a match now we need to get all the info from the table
					while($row = mysql_fetch_assoc($search))
					{
						array_push($t, $row);
					}
			
     					return json_encode($t);
  		 			} else {
			 		//array_push($t, $num2);
     					return $t;
  	 				}
		}

		public function getServiceList()
		{
	
					$t = array();                     
    				$search = mysql_query("SELECT * FROM services") or die(mysql_error());   
    				$match  = mysql_num_rows($search); 
					//$match = 0;
					if($match > 0){  
					 	//ok if there is a match now we need to get all the info from the table
					while($row = mysql_fetch_assoc($search))
					{
						array_push($t, $row);
					}
			
     					return json_encode($t);
  		 			} else {
			 		//array_push($t, $num2);
     					return $t;
  	 				}
		}
		
	}
?>