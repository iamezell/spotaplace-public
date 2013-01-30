<?php

include "services/Setup.php";
$set = new Setup();

$bizz_id = $_POST['bizz_id'];
error_log("this is the user id from upload ".$user_id);
$allowedExts = array("jpg", "jpeg", "gif", "png");
$extension = end(explode(".", $_FILES["file"]["name"]));
if ((($_FILES["file"]["type"] == "image/gif") 
	|| ($_FILES["file"]["type"] == "image/jpeg")
	|| ($_FILES["file"]["type"] == "image/jpg")
  || ($_FILES["file"]["type"] == "image/png")
	|| ($_FILES["file"]["type"] == "image/pjpeg"))
	&& ($_FILES["file"]["size"] < 200000) && in_array($extension, $allowedExts))
  {
  if ($_FILES["file"]["error"] > 0)
    {
    error_log( "Return Code: " . $_FILES["file"]["error"] . "<br />");
    }
  else
    {
    error_log("Upload: " . $_FILES["file"]["name"] . "<br />");
    error_log("Type: " . $_FILES["file"]["type"] . "<br />");
    error_log("Size: " . ($_FILES["file"]["size"] / 1024) . " Kb<br />");
    error_log("Temp file: " . $_FILES["file"]["tmp_name"] . "<br />");

    if (file_exists("business_accounts/business_id_".$bizz_id."/avatar_img/".$_FILES["file"]["name"]))
      {
      		error_log($_FILES["file"]["name"]." already exists. ");
      }
    else
      {
          move_uploaded_file($_FILES["file"]["tmp_name"],
          "../business_accounts/business_id_".$bizz_id."/avatar_img/".$_FILES["file"]["name"]);
          error_log("Stored in: " ."business_accounts/business_id_".$bizz_id."/avatar_img/".$_FILES["file"]["name"]);
          $set->setAvatarPathForBusiness($bizz_id,$_FILES["file"]["name"]);
          //ok lets go back to the first
         // header("location:../business.php");
          
      }
    }
  }
else
  {
  error_log("Invalid file for file:".$_FILES["file"]["type"]." image size is ".$_FILES["file"]["size"]);
  
  }
?>
