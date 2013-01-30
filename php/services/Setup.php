<?php

include_once("User.php");
include_once("NewsFeed.php");
include_once("NewsFeedComment.php");
include_once("Mail.php");
include_once("DBConfig.php");



class Setup
{
	
	
	public function __construct()
		{
			// $server = mysql_connect("localhost", "root", "");
			// if (!$server) die("Unable to connect to MySQL: " . mysql_error());
			// mysql_select_db("spotaplaceDB") or die("something went wrong" .mysql_error());
			$Conf = new DBConfig();
			
		}
		
	public function businessProfile($account_id)
	{
		$num1 = 0;
		$num2 = 1;
		$t = array();
		//first we are going search the business table for the business account attachced to the id
		$search = mysql_query("SELECT * FROM businesses WHERE account_id='".mysql_real_escape_string($account_id)."'") or die(mysql_error());   
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
        
        
        
	public function changePassword($old_password,$new_password,$confirm_password,$id)
	{
		//lets md5 the password
            $id2 = mysql_real_escape_string($id);
            $new_password2 = mysql_real_escape_string($new_password);
            $old_password2 = mysql_real_escape_string($old_password);
            
		$md5Pass = md5($old_password);
		//lets check the database for the old password
		$result = mysql_query("SELECT password FROM accounts WHERE account_id='".$id2."'") or die(mysql_error());
		while($row = mysql_fetch_array($result))
		{
			$defaultpass = $row['password'];
					
		}
		if($md5Pass != $defaultpass)
		{
			return "Cannot Find old password in database please check and try again.";
		}
		
		//now lets check if the new and confirmed passswords match
		if($new_password != $confirm_password)
		{
			return "new password and confirmed password does not match";
		}
		else
		{
			//now lets md5 password
			$password = md5($new_password);
			//the match now lets update the record
			$result2 = mysql_query("UPDATE accounts SET password='$password' WHERE account_id='$id2'") or die(mysql_error());
			return "password has been updated";
		}
		
	}
	public function editProfile($name, $city, $state, $age, $gender, $id)
	{
            
            $name2 = mysql_real_escape_string($name);
           // $lastName2 = mysql_real_escape_string($lastName);
            $city2 = mysql_real_escape_string($city);
            $state2 = mysql_real_escape_string($state);
           
            $age2 =   mysql_real_escape_string($age);
            $gender2 = mysql_real_escape_string($gender);
            $id2 = mysql_real_escape_string($id);
            
			//lets get the default values
			$result = mysql_query("SELECT * FROM accounts WHERE account_id='".$id2."'") or die(mysql_error());
			
		while($row = mysql_fetch_array($result))
		{
			$defaultname = $row['name'];
			//$defaultLastName = $row['LastName'];
			$defaultCity = $row['city'];
			$defaultState = $row['state'];
			$defaultAge = $row['age'];
			$defaultGender = $row['gender'];
					
		}
		//check if the values comming in are legit
		if($name2 != NULL)
		{
			
		}
		else
		{
			$name2 = $defaultname;
		}
		
		// //check if the values comming in are legit
		// if($lastName2 != NULL)
		// {
			
		// }
		// else
		// {
		// 	$lastName2 = $defaultLastName;
		// }
		
		//check if the values comming in are legit
		if($city2 != NULL)
		{
			
		}
		else
		{
			$city2 = $defaultCity;
		}
		
		//check if the values comming in are legit
		if($state2 != NULL)
		{
			
		}
		else
		{
			$state2 = $defaultState;
		}
		
		
		//check if the values comming in are legit
		if($age2 != NULL)
		{
			
		}
		else
		{
			$age2 = $defaultAge;
		}
		
		//check if the values comming in are legit
		if($gender2 != NULL)
		{
			
		}
		else
		{
			$gender2 = $defaultGender;
		}
		
		$result2 = mysql_query("UPDATE accounts SET name='$name2', city='$city2', state='$state2', age='$age2', gender='$gender2' WHERE account_id='$id2'") or die(mysql_error());
		// header("location: loggedin.php");
		
	}
	
	public function editBizzProfile($street,$city, $state, $email,$id,$industry_type,$industry,$phone,$fax,$website,$descrip)
	{
            
            
            $city2 = mysql_real_escape_string($city);
            $state2 = mysql_real_escape_string($state);
            $email2 = mysql_real_escape_string($email);
            $street2 = mysql_real_escape_string($street);
            $id2 = mysql_real_escape_string($id);
            $industry_type2 = mysql_real_escape_string($industry_type);
            $industry2 = mysql_real_escape_string($industry);
            $phone2 = mysql_real_escape_string($phone);
            $fax2 = mysql_real_escape_string($fax);
            $website2 = mysql_real_escape_string($website);
            $descrip2 = mysql_real_escape_string($descrip);
            
			//lets get the default values
			//lets get the default values
			$result = mysql_query("SELECT * FROM businesses WHERE business_id='".$id2."'") or die(mysql_error());
			
		while($row = mysql_fetch_array($result))
		{
			$defaultIndustry_Type = $row['industry_id'];
			if($row['industry_id'] == 1)
			{
				$defaultIndustry = $row['product_id'];
			}
			else
			{
				
				$defaultIndustry = $row['service_id'];
			}
			
			$defaultStreet = $row['street'];
			$defaultCity = $row['city'];
			$defaultState = $row['state'];
			$defaultEmail = $row['email_1'];
			$defaultPhone = $row['phone'];
			$defaultFax = $row['fax'];
			$defaultWebsite = $row['Website'];
			$defaultDesc = $row['descrip'];
			
					
		}
		
		//check if the values comming in are legit
		if($industry_type2 != NULL)
		{
			
		}
		else
		{
			$industry_type2 = $defaultIndustry_Type;
		}
		
		if($industry2 != NULL)
		{
			
		}
		else
		{
			$industry2 = $defaultIndustry;
		}
		//check if the values comming in are legit
		if($street2 != NULL)
		{
			
		}
		else
		{
			$street2 = $defaultStreet;
		}
		
		if($city2 != NULL)
		{
			
		}
		else
		{
			$city2 = $defaultCity;
		}
		
		//check if the values comming in are legit
		if($state2 != NULL)
		{
			
		}
		else
		{
			$state2 = $defaultState;
		}
		
		//check if the values comming in are legit
		if($email2 != NULL)
		{
			
		}
		else
		{
			$email2 = $defaultEmail;
		}
		
		//check if the values comming in are legit
		if($phone2 != NULL)
		{
			
		}
		else
		{
			$phone2 = $defaultPhone;
		}
		//check if the values comming in are legit
		if($fax2 != NULL)
		{
			
		}
		else
		{
			$fax2 = $defaultFax;
		}
		//check if the values comming in are legit
		if($website2 != NULL)
		{
			
		}
		else
		{
			$website2 = $defaultWebsite;
		}
		//check if the values comming in are legit
		if($descrip2 != NULL)
		{
			
		}
		else
		{
			$descrip2 = $defaultDesc;
		}
		
		
		$result2 = mysql_query("UPDATE businesses SET street='$street2', city='$city2', state='$state2',email_1='$email2', phone_1='$phone2', fax='$fax2', website='$website2', descrip='$descrip2' WHERE business_id='$id2'") or die(mysql_error());
		
                //next we need to get the updated industries in there
                
		
		
		
	}
	
	
	public function getBizz()
	{
		$t = array();
		$result = mysql_query("SELECT * FROM businesses") or die(mysql_error());
		while($row = mysql_fetch_assoc($result))
			{
				array_push($t, $row);
			}
		return $t;
			
	}
	
	public function getUserBizz($id)
	{
            $id2 = mysql_real_escape_string($id);
		$t = array();
		$result = mysql_query("SELECT * FROM businesses WHERE account_id='".$id2."'") or die(mysql_error());
		while($row = mysql_fetch_assoc($result))
			{
				array_push($t, $row);
			}
		return $t;
			
	}
	
	public function getBizzByBizzId($id)
	{
            $id2 = mysql_real_escape_string($id);
		$t = array();
		$result = mysql_query("SELECT * FROM businesses WHERE business_id='".$id2."'") or die(mysql_error());
		while($row = mysql_fetch_assoc($result))
			{
				array_push($t, $row);
			}
		return $t;
			
	}
	
	public function getRequestCount($product_id, $business_id)
	{
            
		$num1 = 0;
		$num2 = 1;
		$read = 0;
					$search = mysql_query("SELECT * FROM requests WHERE product_id='".$product_id."' AND business_id='".$business_id."'") or die(mysql_error());
					
					$match  = mysql_num_rows($search);
					if($match > 0)
					{  
					 		//ok if there is a match now we need to get all the info from the table
							$myMail = new Mail();
							$myMail->count = $match; 

							$t[0] = $match;
					
								return $t;
					} else 
					{
							//array_push($t, $num2);
							 $t[0] = $num1;
							return $t;
					} 
	}
	
	public function getRequest($industry_id)
	{
		$num1 = 0;
		$num2 = 1;

		$numRows = 5;
		$t = array();
		$search = mysql_query("SELECT * FROM requests WHERE industry_id='".$industry_id."' AND active=1") or die(mysql_error());  
    				$match  = mysql_num_rows($search);
					//$match = 0;
					if($match > 0)
					{  
					 		//ok if there is a match now we need to get all the info from the table

							while($row = mysql_fetch_assoc($search))
							{
								array_push($t, $row);
							}
					
								return $t;
					} else 
					{
							//array_push($t, $num2);
							 //$t[0] = $num1;
							//return $t;
					} 
	
		
	}
        
        public function getAllRequests($bizz_id)
	{
            
		$num1 = 0;
		$num2 = 1;

		$numRows = 5;
		$t = array();
		$industryArray = array();
		//lets get all
		$industries = mysql_query("SELECT industry_id FROM bizztoindustry WHERE business_id='$bizz_id'") or die(mysql_error());
					$foundMatch = mysql_num_rows($industries);
                                       
					if($foundMatch > 0)
					{
                                            
						while($row = mysql_fetch_assoc($industries))
							{
								array_push($industryArray, $row);
							} 
                                                        
                                                        
							for($i=0; $i < count($industryArray); $i++){
                                                           // error_log("this is the log");
								$search = mysql_query("SELECT * FROM requests WHERE industry_id='".$industryArray[$i]["industry_id"]."'") or die(mysql_error());
                                                                //error_log("SELECT * FROM requests WHERE industry_id='".$industryArray[$i]["industry_id"]."'");
								$match  = mysql_num_rows($search);
                                                               
								if($match > 0)
								{  
					 				//ok if there is a match now we need to get all the info from the table

									while($row1 = mysql_fetch_assoc($search))
									{
										array_push($t, $row1);
									}
                                                                        
                                                                        //error_log("in here");
									//return $t;
								} else {
									//array_push($t, $num2);
							 		//$t[0] = $num1;
									//return $t;
                                                                    //error_log("in there");
								} 
								
							}
                                                        return $t;
                                                        
						

					}else{
						$t[0] = $num1;
						return $t;
					}
		/*$search = mysql_query("SELECT * FROM requests WHERE industry_id='".$product_id."'") or die(mysql_error());  
    				$match  = mysql_num_rows($search);
    				error_log($product_id);
					//$match = 0;
					if($match > 0)
					{  
					 		//ok if there is a match now we need to get all the info from the table

							while($row = mysql_fetch_assoc($search))
							{
								array_push($t, $row);
							}
					
								return $t;
					} else 
					{
							//array_push($t, $num2);
							 $t[0] = $num1;
							return $t;
					} */
	
		
	}
	
	public function getMessage($user_id)
	{
		$num1 = 0;
		$num2 = 1;
		$startRow = ($page * 5)-5;
		$numRows = 5;
		$t = array();
		$search = mysql_query("SELECT * FROM message WHERE account_id='".$user_id."'") or die(mysql_error());  
    				$match  = mysql_num_rows($search);
					//$match = 0;
					if($match > 0)
					{  
					 		//ok if there is a match now we need to get all the info from the table

							while($row = mysql_fetch_assoc($search))
							{
								$myMail = new Mail();
								$myMail->sender_id = $row["sender_id"];
								$myMail->messageBody = $row["message_body"];
								$myMail->name = $row["senders_name"];
								$myMail->account_id = $row["account_id"];
								$myMail->belongs_to = $row["belongs_to"];
								$myMail->token = $row["token"];
								$myMail->id = $row["message_id"];
								
								array_push($t, $myMail);
							}
					
								return $t;
					} else 
					{
							//array_push($t, $num2);
							 $t[0] = $num1;
							return $t;
					} 
		
	}
	
	public function getMessageTrail($message_id)
	{
		$t = array();
		$num1 = 0;
		$num2 = 1;
			$search = mysql_query("SELECT * FROM message WHERE belongs_to='".$message_id."' ORDER BY token") or die(mysql_error());  
    				$match  = mysql_num_rows($search);
					if($match > 0)
					{  
					 		//ok if there is a match  now we need to get all the info from the table

							while($row = mysql_fetch_assoc($search))
							{
								$myMail = new Mail();
								$myMail->sender_id = $row["sender_id"];
								$myMail->messageBody = $row["message_body"];
								$myMail->name = $row["senders_name"];
								$myMail->account_id = $row["account_id"];
								$myMail->belongs_to = $row["belongs_to"];
								$myMail->token = $row["token"];
								$myMail->id = $row["message_id"];
								
								array_push($t, $myMail);
							}
					
								return $t;
					} else 
					{
							//array_push($t, $num2);
							 $t[0] = $num1;
							return $t;
					} 
		
	}
	
	
	public function doReply($account_id,$message_id,$message_body,$name,$sender_id)
	{
		//now we need to find out the token value wich is the value of its place in the message trail
		//so we select all the messages in the table  that have a belongs to of the $message_id and add one to that count
		$search = mysql_query("Select * FROM message WHERE belongs_to='".$message_id."'")or die(mysql_error());
		$match = mysql_num_rows($search);
		$token = $match + 1;
		$reply = 1;
		//now that we have the token we can insert the reply into the $messages table
		
		$insert_reply = "INSERT INTO message(sender_id,account_id,senders_name,message_body,token,reply,belongs_to)Values('".$account_id."','".$sender_id."','".$name."','".$message_body."','".$token."','".$reply."','".$message_id."')" or die(mysql_error()); 
		  				
		$result = mysql_query($insert_reply) or die(mysql_error());
		
	}
	
	public function getMessageCount($user_id)
	{
		$num1 = 0;
		$num2 = 1;
		$read = 0;
		$t = array();
					$search = mysql_query("SELECT * FROM message WHERE account_id='".$user_id."'") or die(mysql_error());
					
					$match  = mysql_num_rows($search);
					if($match > 0)
					{  
					 		//ok if there is a match now we need to get all the info from the table

							
							$myMail = new Mail();
							$myMail->count = $match;
							array_push($t, $myMail);
					
							return $t;
					} else 
					{
							//array_push($t, $num2);
							 $t[0] = $num1;
							return $t;
					} 
	}
	
	public function getServiceMessage($service_id,$product_id)
	{
		
	}
	
	public function getNewsFeed($account_id)
	{
		
		$num1 = 0;
		$num2 = 1;
		$startRow = ($page * 5)-5;
		$numRows = 5;
		$t = array();
		$search = mysql_query("SELECT * FROM newsFeed WHERE account_id='".$account_id."'") or die(mysql_error());  
    				$match  = mysql_num_rows($search);
					//$match = 0;
					if($match > 0)
					{  
					
					 		//ok if there is a match now we need to get all the info from the table

							while($row = mysql_fetch_assoc($search))
							{
								
								$myFeed = new NewsFeed();
								$myFeed->sender_id = $row["sender_id"];
								$myFeed->messageBody = $row["message_body"];
								$myFeed->name = $row["sender_name"];
								$myFeed->newsFeed_id = $row["news_feed_id"];
								
						
								
								array_push($t, $myFeed);
							}
					
								return $t;
					} else 
					{
							//array_push($t, $num2);
							 $t[0] = $num1;
							return $t;
					} 
	}
	
	
	
	public function getComments($newsFeedId)
	{
		$num1 = 0;
		$num2 = 1;
		$t = array();
		$search = mysql_query("SELECT * FROM newsFeedcomments WHERE news_feed_id='".$newsFeedId."'") or die(mysql_error());  
    				$match  = mysql_num_rows($search);
					//$match = 0;
					if($match > 0)
					{  
					
					 		//ok if there is a match now we need to get all the info from the table

							while($row = mysql_fetch_assoc($search))
							{
								
								$myComment = new NewsFeedComment();
								$myComment->senderID = $row["senders_id"];
								$myComment->senderName = $row["senders_name"];
								$myComment->commentBody = $row["comment_message"];
								
						
								
								array_push($t, $myComment);
							}
					
								return $t;
					} else 
					{
							//array_push($t, $num2);
							 $t[0] = $num1;
							return $t;
					} 
		
	}
	
	///////////////////send message////////////////////////////////////
	public function sendMessage($account_id,$message_body,$sender_id)
	{
		
		$query = "INSERT INTO message(account_id,message_body,sender_id)VALUES('". mysql_escape_string($account_id)."','".mysql_escape_string($name)."','".mysql_escape_string($user_id)."','".mysql_escape_string($comment_body)."')";
	$result = @mysql_query($query) or die(mysql_error());
	}
	///////////////////////////////////////////////////////////////////
	
	///////////////////send business message////////////////////////////////////
	public function sendRequestReplyBusinessMail($business_id,$message_body,$account_id)
	{
		//since this is a new message we need to start a new thread
		
		
		$new_thread_query = "INSERT INTO thread(date,owner) VALUES(NOW(),'$business_id')";
		$result = @mysql_query($new_thread_query) or die(mysql_error());
		$number = mysql_insert_id();
		$sead = 1;
		//get name from user account
		$user_name_query = "SELECT username FROM accounts WHERE account_id='".mysql_escape_string($account_id)."'";
		$result3 = @mysql_query($user_name_query) or die(mysql_error());
		while($row = mysql_fetch_assoc($result3))
		{
			$name = $row['username'];
		}
		
		$query = "INSERT INTO businessMail(business_id,message_body,account_id,sead,thread_id,date,sender_name)VALUES('". mysql_escape_string($business_id)."','".mysql_escape_string($message_body)."','".mysql_escape_string($account_id)."','".mysql_escape_string($sead)."','".mysql_escape_string($number)."',NOW(),'".mysql_escape_string($name)."')";
	$result = @mysql_query($query) or die(mysql_error());
		//now we update the thread table and make it active
		$update_thread_query = "UPDATE thread SET active='1' WHERE thread_id='$number'";
		$result = @mysql_query($update_thread_query) or die(mysql_error());
		
		
	}
	///////////////////////////////////////////////////////////////////
	
	///////////////////send business message////////////////////////////////////
	public function getBusinessMail($business_id)
	{
		$t = array();
		//select the active thread id's
		$active_threads = "SELECT thread_id FROM thread WHERE active='1' AND owner='$business_id' ORDER BY date";
		$result2 = @mysql_query($active_threads) or die(mysql_error());
		while($row = mysql_fetch_assoc($result2))
			{
				$business_mail_query = "SELECT * FROM businessMail WHERE business_id='". mysql_escape_string($business_id)."' AND thread_id='".$row['thread_id']."' ORDER BY date";
				$result = @mysql_query($business_mail_query) or die(mysql_error());
				
				while($row = mysql_fetch_assoc($result))
				{
					array_push($t, $row);
				}
			}
			
		//$result = @mysql_query($business_mail_query) or die(mysql_error());
		//$business_mail_query = "SELECT * FROM businessMail WHERE business_mail_id='". mysql_escape_string($business_id)."' AND thread_id='$row' ORDER BY date";
		//$result = @mysql_query($business_mail_query) or die(mysql_error());
		
		
			return $t;
		
		
	}
	///////////////////////////////////////////////////////////////////
	
	public function setComment($user_id,$newsFeed_id,$comment_body,$name)
	{
		$query = "INSERT INTO newsfeedcomments(news_feed_id,senders_name,senders_id,comment_message)VALUES('". mysql_escape_string($newsFeed_id)."','".mysql_escape_string($name)."','".mysql_escape_string($user_id)."','".mysql_escape_string($comment_body)."')";
	$result = @mysql_query($query) or die(mysql_error());
		
	}
	
	public function testMessageService()
	{
		$search = mysql_query("SELECT productMessage.profile_id, productMessage.message_body, productMessage.hasRead, profiles.avatar FROM productMessage LEFT JOIN profiles WHERE productMessage.profile_id = profiles.profile_id AND product_id='6' LIMIT $startRow, $numRows") or die(mysql_error());
	
	
	
	$startRow = ($page * 4)-4;
	$numRows = 4;
			
			$result = mysql_query("SELECT * FROM imagesDB WHERE city = '$city' LIMIT $startRow,$numRows");
			while($row = mysql_fetch_assoc($result))
			{
				array_push($t, $row);
			}
			return $t;
			
	}
        
        public function setAvatarPath($account_id,$string)
        {
            mysql_query("UPDATE accounts SET avatar_path='".$string."'WHERE account_id='".$account_id."'");
            //we need to add the path to the session also
            $_SESSION["avatar_path"] = $string;
        }
        
        public function avatarCheck($account_id)
        {
        	$t = array();
            $search = mysql_query("SELECT avatar_path FROM accounts WHERE account_id='".$account_id."'");
            $match  = mysql_num_rows($search);
            if($match > 0 )
            {
            	while($row = mysql_fetch_assoc($search))
				{
					array_push($t, $row);
				}
				
				if($t[0]["avatar_path"] == NULL)
				{
					return FALSE;
				}else{
					return TRUE;
				}

            }else{
                return FALSE;
            }
            
        }
        
        public function setAvatarPathForBusiness($bizz_id, $string){
        
            mysql_query("UPDATE businesses SET avatar_path='".$string."'WHERE business_id='".$bizz_id."'") or die(mysql_error());
            error_log("we made it this far");
            
         
        }

   
			
}