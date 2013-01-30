<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

include_once 'services/Friend.php';
$friend = new Friend();
$friend->
$returnArray = array (
    "message"=>"hello"
);
$email1 = $_POST["email1"];
$id = $_POST["account_id"];
$message = $_POST["textArea"];
echo json_encode($returnArray);

?>
