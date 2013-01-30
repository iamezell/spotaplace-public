<?php 
$now = new DateTime(); 
$now->add(new DateInterval('P3D'));
echo $now->format("M j, Y H:i:s O")."\n";

?>