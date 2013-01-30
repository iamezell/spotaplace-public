<?php
include_once("../../com/spotaplace/Bizz.php");
	class Send{
		public function __construct()
		{
			$server = mysql_connect("localhost", "root", "root");
			if (!$server) die("Unable to connect to MySQL: " . mysql_error());
			mysql_select_db("spotaplaceDB") or die("something went wrong" .mysql_error());
		}
		
		public function productMessage($profile_id, $message_body, $product_id )
		{
			$query = "INSERT INTO productmessage(account_id, message_body, product_id)VALUES('". mysql_escape_string($profile_id)."','".mysql_escape_string($message_body)."','".mysql_escape_string($product_id)."')";
			 $result = @mysql_query($query) or die(mysql_error());
			
		}
		
		public function serviceMessage($profile_id, $service_id, $message_body, $product_id )
		{
			$query = "INSERT INTO servicemessage(account_id, message_body, product_id,service_id)VALUES('". mysql_escape_string($profile_id)."','".mysql_escape_string($message_body)."','".mysql_escape_string($product_id)."','".mysql_escape_string($service_id)."')";
			 $result = @mysql_query($query) or die(mysql_error());
			
		}
		
		public function updateInfo($account_id,$name,$lastName,$city,$state,$email)
		{
			
			$query = "UPDATE accounts SET name='". mysql_escape_string($name)."', LastName='". mysql_escape_string($lastName)."', city='". mysql_escape_string($city)."', state='". mysql_escape_string($state)."', email='". mysql_escape_string($email)."' WHERE account_id='". mysql_escape_string($account_id)."'";
			 $result = @mysql_query($query) or die(mysql_error());
		}
		
		public function GetAllBizz()
		{$num1 = 0;
		$num2 = 1;
		$startRow = ($page * 5)-5;
		$numRows = 5;
		$t = array();
		$search = mysql_query("SELECT * FROM businesses ") or die(mysql_error());  
    				$match  = mysql_num_rows($search);
					//$match = 0;
					if($match > 0)
					{  
					 		//ok if there is a match now we need to get all the info from the table

							while($row = mysql_fetch_assoc($search))
							{
								$myBizz = new Bizz();
								$myBizz->service_id = $row["service_id"];
								$myBizz->product_id = $row["product_id"];
								$myBizz->industry_id = $row["industry_id"];
								$myBizz->zip = $row["zip"];
								$myBizz->state = $row["state"];
								$myBizz->city = $row["city"];
								$myBizz->ein = $row["ein"];
								$myBizz->name = $row["name_of_business"];
								$myBizz->account = $row["account_id"];
								$myBizz->id = $row["business_id"];
								
								array_push($t, $myBizz);
							}
					
								return $t;
					} else 
					{
							//array_push($t, $num2);
							 $t[0] = $num1;
							return $t;
					} 
		
			
		}
		
		public function registerBizz($industry_id,$account_id,$name,$city,$state,$email,$phone1,$phone2,$fax,$website,$product_id,$service_id)
		{
			
			$query = "INSERT INTO businesses(industry_id, account_id, name_of_business, state, email_1, phone_1, phone_2, fax, website, product_id,service_id)VALUES('". mysql_escape_string($industry_id)."','". mysql_escape_string($account_id)."','".mysql_escape_string($name)."','".mysql_escape_string($state)."','".mysql_escape_string($email)."','".mysql_escape_string($phone1)."','".mysql_escape_string($phone2)."','".mysql_escape_string($fax)."','".mysql_escape_string($website)."','".mysql_escape_string($product_id)."','".mysql_escape_string($service_id)."')"; 
				$result = @mysql_query($query) or die(mysql_error());
			
		}
		
		
		public function productRequest($account_id, $message_body, $product_id)
		{
			//xreate the timestamp
			$test = 4;
			$timeStamp = time();
			$business_id_array = array();
			//first we need to get all the accounts
			$query = "SELECT business_id FROM businesses WHERE product_id='".$product_id."'";
			$result = @mysql_query($query) or die(mysql_error());
			while($row = mysql_fetch_array($result))
			{
				array_push($business_id_array, $row);
			}
			//return $business_id_array; 
			 //now lets loop through the array
			 for($i = 0; $i < sizeof($business_id_array); $i++)
			 {
				$query = "INSERT INTO requests(account_id, business_id,product_id,message_body,avatar_path,time_committed)VALUES('". mysql_escape_string($account_id)."','".$business_id_array[$i][0]."','".mysql_escape_string($product_id)."','".mysql_escape_string($message_body)."','".mysql_escape_string($avatar_path)."',NOW())"; 
				$result = @mysql_query($query) or die(mysql_error()); 
			 }
			 //mysql_close();
			 
		}
		
		public function serviceRequest($profile_id, $message_body, $service_id, $avatar_path)
		{
			//xreate the timestamp
			$timeStamp = time();
			$business_id_array = array();
			//first we need to get all the accounts
			$query = "SELECT business_profile_id FROM businessprofile";
			$result = @mysql_query($query) or die(mysql_error());
			while($row = mysql_fetch_array($result))
			{
				array_push($business_id_array, $row);
			}
			//return $business_id_array; 
			 //now lets loop through the array
			 for($i = 0; $i < sizeof($business_id_array); $i++)
			 {
				$query = "INSERT INTO requests(profile_id, business_profile_id,product_id,service_id,message_body,avatar_path)VALUES('". mysql_escape_string($profile_id)."','".mysql_escape_string($business_id_array[$i])."','".mysql_escape_string($product_id)."','".mysql_escape_string($service_id)."','".mysql_escape_string($message_body)."','".mysql_escape_string($avatar_path)."')"; 
				$result = @mysql_query($query) or die(mysql_error()); 
			 }
			 //mysql_close();
			 
		}
		
		
	}