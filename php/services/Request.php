<?php

include_once("DBConfig.php");

class Request
{
  

	public function __construct()
		{
			$DB = new DBConfig();
		}
		
				
	public function makeReply($business_id, $request_id, $price, $message)
	{
		$t = array();
		$request_reply = "INSERT INTO requestreplies(business_id, request_id, reply_message,price)Values('".$business_id."','".$request_id."','".$message."','".$price."')";
	
		$result = mysql_query($request_reply) or die(mysql_error());
		
		//now we take the request id and update the request table
		$result2 = mysql_query("UPDATE requests SET has_replied='1' WHERE request_id='$request_id'") or die(mysql_error());
		
		if(result2){
      return 1;
		}else{
      return 0;
    }
		
	}
	
	public function getUserRequests($account_id)
	{
		$t = array();
		$search = mysql_query("SELECT * FROM requests WHERE account_id='".$account_id."' AND active=1") or die(mysql_error());   
    				$match  = mysql_num_rows($search);
					 
					//$match = 0;
					if($match > 0){  
					 	//ok if there is a match now we need to get all the info from the table

					while($row = mysql_fetch_assoc($search))
					{
						array_push($t, $row);
					}
     					return $t;
  		 			} else {
			 		//array_push($t, $num2);
					 $t[0] = $num1;
     				return $t;
					}
		
	}
        
        public function checkIfActiveRequest($request_id)
        {
            $t = array();
                error_log("the request id is ".$request_id);
		$search = mysql_query("SELECT active FROM requests WHERE request_id='".$request_id."'") or die(mysql_error());   
    				$match  = mysql_num_rows($search);
                                    
					//$match = 0;
					if($match > 0){  
					 	//ok if there is a match now we need to get all the info from the table
                                                 error_log("match is ".$match);
                                            while($row = mysql_fetch_assoc($search))
                                            {
                                                    array_push($t, $row);
                                            }
                                            error_log("the active field is populated by a ".$t[0]['active']);
                                             if($t[0]['active'] == 0)
                                             {
                                                 
                                                 return FALSE;
                                                 error_log("it is false");
                                                
                                             }else{
                                                 error_log("it is true");
                                                 return TRUE;
                                                 

                                                 
                                             }
  		 			} else {
			 		//array_push($t, $num2);
					 $t[0] = $num1;
                                         error_log("should not be here");
     				//return $t;
					}
        }
	
	public function getRequestReplies($request_id)
	{
		$t = array();
                
		$search = mysql_query("SELECT * FROM requestreplies WHERE request_id='".$request_id."'") or die(mysql_error());   
    				$match  = mysql_num_rows($search);
					 
					//$match = 0;
					if($match > 0){  
					 	//ok if there is a match now we need to get all the info from the table

					while($row = mysql_fetch_assoc($search))
					{
						array_push($t, $row);
					}
     					return $t;
  		 			} else {
			 		//array_push($t, $num2);
                                           // $t[0] = $num1;
                                           // return $t;
					}
	}
        
        public function getBusinessesFromRequests($user_id)
        {
            $t = array();
            
            $search = mysql_query("SELECT winner_id FROM requests WHERE account_id='".$user_id."'");
            $match = mysql_num_rows($search);
            
            if($match > 0)
            {
                while($row = mysql_fetch_array($search))
                {
                    array_push($t, $row);
                }
                //this should be full of business id's
                return $t;
            }else{
                return 0;
            }
            
        }
        
        
        
        
        public function activateRequest($request_id)
        {
            $on=1;
            //PDATE  `spotaplaceDB`.`requests` SET  `active` =  '1' WHERE  `requests`.`request_id` =130;
            error_log("these are not the droids you are looking for ".$request_id);
            mysql_query("UPDATE requests SET active='1' WHERE request_id='".$request_id."'") or die("there was an error". mysql_error());
            error_log("got here");
            
        }
        
        public function deactivateRequest($request_id)
        {
            $on=1;
            //PDATE  `spotaplaceDB`.`requests` SET  `active` =  '1' WHERE  `requests`.`request_id` =130;
            error_log("these are not the droids you are looking for ".$request_id);
            mysql_query("UPDATE requests SET active='0' WHERE request_id='".$request_id."'") or die("there was an error". mysql_error());
            error_log("got here");
            
        }
        
         public function chooseWinner($request_id, $bizz_id)
        {
            $on=1;
            //PDATE  `spotaplaceDB`.`requests` SET  `active` =  '1' WHERE  `requests`.`request_id` =130;
            error_log("these are not the droids you are looking for ".$request_id);
            mysql_query("UPDATE requests SET winner_id='".$bizz_id."' WHERE request_id='".$request_id."'") or die("there was an error". mysql_error());
            
            
        }
        
        
        
        
        
	
	public function sendRequests($industry_id, $industry,$account_id,$city,$state,$message_body, $chanel){
		$t = array();
                $business_array = array();
                $emailListArray = array();
                //so instead of sending the mysql now reques we will use php date time
                $now = new DateTime();
                //lets add 3 days to this variable
                $now->add(new DateInterval('P3D'));
                $dateVar = $now->format("M j, Y H:i:s O");
		
		            $query1 = "INSERT INTO requests(industry_id,industry,account_id,city,state,message_body,chanel,active, time_committed)VALUES ('$industry_id','$industry','$account_id','$city','$state','$message_body','$chanel','1', '$dateVar')";
		            $result1 = mysql_query($query1) or die(mysql_error());
		
                
                //we need to send an email to all the businessess on the list if they opt-in for email
                $getAllBusinesses = "SELECT business_id FROM bizztoindustry WHERE industry_id=".mysql_real_escape_string($industry_id);
                $result = mysql_query($getAllBusinesses) or die("something went wrong".mysql_error());	
                
                while($row = mysql_fetch_assoc($result))
                {
                    array_push($business_array,$row);
                
                }
                
                
        
                error_log("".var_export($business_array,true));
                //next we need to go back ointo the database to pick out the email address of the businesses
               for($i=0; $i < count($business_array); $i++){

                        //error_log($business_array[$i]['business_id']);
                        $getemailquery = "SELECT email_1 FROM businesses WHERE business_id=".$business_array[$i]['business_id'];
                        // now we need to mail the requests out to the businesses
                        $result2 = mysql_query($getemailquery) or die("there was a problem getting the email addresses of the business".mysql_error());
                        while($row2 = mysql_fetch_assoc($result2))
                        {
                                array_push($emailListArray, $row2);
                        }
                }

                for ($j=0; $j < count($emailListArray); $j++) { 
                       //send mail out
                }
		            
		
               //error_log("it worked so far in this mo fo!");
		
	}
}

?>