<?php
include_once "DBConfig.php";
include_once 'Utilities.php';
class Friend
{
	
	public function __construct()
	{
		$DB = new DBConfig();
	}

	public function addFriendFromEmail($memberAccount, $friendEmail, $note){
                       //ok first we need to add this email and a made up password for the friend
		$tempPassword = 0;
                                    $util = new Utilities();
                                    $password = $util->generatePassword(5, 4);
		
		$user_passwordMD5 = md5($user_password);
			 $hash = md5( rand(0,1000) ); // Generate random 32 character hash and assign it to a local variable.  
			 $user_email2 = mysql_escape_string($user_email);  
			 $password = mysql_escape_string($user_passwordMD5);  
			// $query = "INSERT INTO spotUsers(email,password,hash)VALUES('". mysql_escape_string($user_email)."','".mysql_escape_string($user_passwordMD5)."','".mysql_escape_string($hash)."')";
			 $search = mysql_query("SELECT * FROM accounts WHERE Email='".$user_email2."' AND active='1'") or die(mysql_error());   
			 $match  = mysql_num_rows($search); 
			 if($match > 0){  
					 	//ok if there is a match now we need to get all the info from the table
			 	return "This email is being used, if there is yours please go to the forgot email link.";
			 	
			 } else {
						//echo "There is no match";
			 	$query = "INSERT INTO accounts(Email,password,hash)VALUES('". mysql_escape_string($user_email2)."','".mysql_escape_string($user_passwordMD5)."','".mysql_escape_string($hash)."')";
			 	$result = @mysql_query($query) or die(mysql_error());
			 	
			 	$to = $user_email2;
			 $subject = 'Signup | Verification'; //Give the email a subject
			 $message = ' Thanks for signing up! 
			 Your account has been created, you can login with the following credentials after you have activated your account by pressing the url below. 
			 
			 ------------------------ 
			 Username: '.$user_email2.' 
			 Password: '.$user_password.' 
			 ------------------------ 
			 -----------------------------------------------------------------------------------------------------------------------------------
			 NONDISCLOSURE AGREEMENT
			 -----------------------------------------------------------------------------------------------------------------------------------  
			 
			 NONDISCLOSURE<br />
			 AGREEMENT<br />
			 This Agreement is entered into effective as of The Date of this email. Ever Virtually Persistent Development and the recepient<br />
			 Recipient is acting as an expert advising the Company, and for that purpose the Company may make certain Confidential<br />
			 Information (as defined below) available to the Recipient (the &quot;Purpose&quot;). As a condition to,<br />
			 and in consideration of, the Company\'s furnishing of Confidential Information to the Recipient,<br />
			 the Recipient agrees to the restrictions and undertakings contained in this Agreement.<br />
			 Recipient agrees that all information disclosed by the Company to Recipient, including<br />
			 any such information disclosed prior to the date of this Agreement, and including without<br />
			 limitation information acquired by Recipient in writing, orally or by inspection of the<br />
			 Company\'s property, relating to (without limitation) the Company\'s prototypes, samples,<br />
			 technical data, trade secrets, knowhow,<br />
			 actual and anticipated research, developments or<br />
			 products, product plans, services, software, inventions, processes, discoveries, formulas,<br />
			 architectures, concepts, ideas, designs, drawings, personnel, customers, markets, marketing<br />
			 plans, distribution methods, financial information, sales or programming matter, compositions,<br />
			 drawings, diagrams, computer programs, studies, work in process, visual demonstrations,<br />
			 manufacturing plans, confidential information disclosed to the Company by third parties, and<br />
			 other data, whether oral, written, graphic, or electronic form shall be considered &quot;Confidential<br />
			 Information&quot;. However, Confidential Information shall not include information which, as<br />
			 Recipient can prove in written evidence, (i) is now or subsequently becomes generally known or<br />
			 available by publication, commercial use or otherwise, through no fault of Recipient, (ii) is<br />
			 known by Recipient at the time of disclosure, or (iii) is lawfully obtained by Recipient without<br />
			 violation of a confidentiality obligation.<br />
			 Recipient agrees (i) to use Confidential Information solely for the Purpose; (ii) to use<br />
			 all possible means to maintain the Confidential Information in strict confidence, and at<br />
			 least those measures that it employs for the protection of its own confidential<br />
			 information, but in any event not less than a reasonable degree of care, (iii) to disclose<br />
			 Confidential Information only to Recipient\'s employees who are required to have the<br />
			 information for the Purpose and have previously signed an agreement in content similar to the<br />
			 provisions hereof; and (iv) to immediately notify in writing the Company in the event of any<br />
			 unauthorized use or disclosure of the Confidential Information. Recipient shall not reverse<br />
			 engineer, disassemble, decompile or copy any software or other tangible objects which embody<br />
			 the Confidential Information, nor export or reexport<br />
			 or otherwise transmit, directly or<br />
			 indirectly, any Confidential Information, or the direct product of Confidential Information,<br />
			 except with the applicable government export approvals or export permits.<br />
			 All Confidential Information and all of the Company\'s trademarks remain the property<br />
			 of the Company and no license or other rights in the Confidential Information or such<br />
			 trademarks are granted hereby, except as expressly provided above. This Agreement does not<br />
			 constitute a joint venture or other such business agreement. All information is provided &quot;as is&quot;<br />
			 and without any warranty, express, implied, or otherwise, regarding its accuracy or<br />
			 performance.<br />
			 Recipient agrees to return to the Company immediately upon the Company\'s written<br />
			 request all documents and other tangible objects containing or representing the Confidential<br />
			 Information and all copies thereof which are in the possession of Recipient, including but not<br />
			 limited to all computer programs, documentation, notes, plans and drawings, and any reports,<br />
			 presentations, memorandums and other similar work made by Recipient in connection with or<br />
			 relating to the Company or the Confidential Information. With respect to Confidential<br />
			 Information stored in electronic form, Recipient shall delete all such Confidential Information<br />
			 from its systems and shall confirm in a writing signed by an authorized representative of<br />
			 Recipient, that all Confidential Information has been deleted.<br />
			 Recipient hereby acknowledges that unauthorized disclosure or use of Confidential<br />
			 Information could cause irreparable harm and significant injury, which may be difficult to<br />
			 ascertain. Accordingly, Recipient agrees that the Company shall have the right to seek and<br />
			 obtain immediate injunctive relief from breaches of this Agreement, in addition to any other<br />
			 rights and remedies it may have.<br />
			 Recipient\'s obligations hereunder shall survive termination or expiration of this<br />
			 agreement until such time as all Confidential Information disclosed hereunder becomes publicly<br />
			 known and made generally available through no action or inaction of Recipient.<br />
			 This Agreement shall bind and inure to the benefit of the parties hereto and their<br />
			 successors and assigns, except that Confidential Information and the rights and obligations<br />
			 under this Agreement may not be assigned by Recipient without prior written consent of the<br />
			 Company. This document contains the entire agreement between the parties with respect to the<br />
			 subject matter hereof, and may not be amended, nor any obligation waived, except by a writing<br />
			 signed by both parties hereto. Any failure to enforce any provision of this Agreement shall not<br />
			 constitute a waiver thereof or of any other provision. This Agreement shall be governed by and<br />
			 construed and enforced in accordance with the laws of any US States or territories excluding that<br />
			 body of law pertaining to conflict of law, and the parties hereto agree to submit to the exclusive<br />
			 jurisdiction of the courts ofany US States or territories any disputes arising out of the subject matter.<br />
			 UNDERSTOOD AND AGREED:<br />
			 By Clicking on the link below you the Recipient agrees to these terms.
			 Please click this link to activate your account: 
			 http://www.spotaplace.com/verify.php?email='.$user_email.'&hash='.$hash.' 
			 
			 '; // Our message above including the link  
			 
			 $headers = 'From:noreply@spotaplace.com' . "\r\n"; // Set from headers  
			 mail($to, $subject, $message, $headers); // Send our email  
			 
			}		
			
			return "Please click this link to activate your account: 
			http://www.spotaplace.com/verify.php?email='.$user_email.'&hash='.$hash.'";
			$query = "INSERT INTO friends(account_id,thefriend_id)VALUES('". mysql_escape_string($memberAccount)."','".mysql_escape_string($friendAccount)."')";
			$result = @mysql_query($query) or die(mysql_error());
			return "thank you, your friend has been added";
			
			

		}
		
		public function listFriends($account_id){
            //so we will do a simple search for all the friends of a certain account.
			$t = array();
			$search = mysql_query("SELECT * FROM friends WHERE account_id='".$account_id."'") or die(mysql_error());
			$match  = mysql_num_rows($search); 
			
			if($match > 0){  
					 	//ok if there is a match now we need to get all the info from the table
				error_log("fiund match");
				while($row = mysql_fetch_assoc($search))
				{
					array_push($t, $row);
				}
				return $t;
				
			} else {
				error_log("there is no spoon!");
				$t = "boy are we in trouble!";
			}
                                        //retun list
			

		}
	}
	?>