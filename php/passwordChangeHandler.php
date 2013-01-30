<?php
include("services/Setup.php");
$set = new Setup();
$set->changePassword($_POST['old_password'],$_POST['new_password'],$_POST['password_confirm'],$_POST["id"]);
header("location: ../profile.html");
?>