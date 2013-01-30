<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

//here we are just testing the friend functionality
include_once 'services/Friend.php';
$_POST["account_id"];
$myfriend = new Friend();

//$myfriend->addFriend(100, 100);

 $thelist = $myfriend->listFriends(100);
 var_dump($thelist);
?>
