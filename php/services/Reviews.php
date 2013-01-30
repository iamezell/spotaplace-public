<?php
include "services/request.html";

class Reviews
{
    
    public function __construct() {
        $server = mysql_connect("localhost", "root", "root");
	if (!$server) die("Unable to connect to MySQL: " . mysql_error());
	mysql_select_db("spotaplaceDB") or die("something went wrong" .mysql_error());
    }
    
    public function getReviewsFromBizzIds($account_id)
    {
        
        $businessIds = array();
        $req = new Request();
        $businessIds = $req->getBusinessesFromRequests($account_id);
        //lets first make sure we can get the lists of businesses
        return $businessIds;
    }
    
    
}

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
