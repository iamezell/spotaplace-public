<?php
    class BidService{
    	public function __construct()
		{
			$server = mysql_connect("localhost", "root", "");
			if (!$server) die("Unable to connect to MySQL: " . mysql_error());
			mysql_select_db("spotaplaceDB") or die("something went wrong" .mysql_error());
		}
                
       public function getBids($request_id)
       {
           //array to hold the bids
           $bids = array();
          
           $search = mysql_query("SELECT * FROM bids WHERE request_id='".$request_id."'") or die(mysql_error());
           $match  = mysql_num_rows($search);
           // error_log("made it this far?");
           if($match > 0)
	   {  
               error_log("made it this far");
			//ok if there is a match now we need to get all the info from the table

			while($row = mysql_fetch_assoc($search))
			{
				array_push($bids, $row);
			}
					
				return $bids;
	    } else {
				//array_push($t, $num2);
				
				return NULL;
	    } 
                      
           
       }

       public function getBidsNew()
       {

       }
       
       public function getSingleBid($bid_id)
       {
           $bids = array();  
           $search = mysql_query("SELECT * FROM bids WHERE bid_id='".$bid_id."'") or die(mysql_error());
           $match  = mysql_num_rows($search);
           // error_log("made it this far?");
           if($match > 0)
	   {  
               error_log("made it this far");
			//ok if there is a match now we need to get all the info from the table

			while($row = mysql_fetch_assoc($search))
			{
				array_push($bids, $row);
			}
					
				return $bids;
	    } else {
				//array_push($t, $num2);
				
				return NULL;
	    } 
                      
           
       }
       
       
       public function makeBid($request_id, $bidPrice, $bidProposal, $businessID){
       		//lets error log these just to make sure
       	error_log("request is: ".$request_id);
       		error_log("bidPrice is: ".$bidPrice);
       			error_log("bidProposal is: ".$bidProposal);
       				error_log("businessID is: ".$businessID);
          $query = "INSERT INTO bids(bid_proposal,bid_price, business_id, request_id)VALUES('". mysql_real_escape_string($bidProposal)."','".mysql_real_escape_string($bidPrice)."','".mysql_real_escape_string($businessID)."','".mysql_real_escape_string($request_id)."')";
          $result = @mysql_query($query) or die(mysql_error());
           
       }
       
      
		
		
    }
?>