<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */



include('services/BidService.php');
include('services/request.html');
include('services/Setup.php');
$Setup = new Setup();   
?>
<div id="HomeContentIntro" >
    <h1>Congratulations</h1>
    <p>You have Chosen <?php echo "$_POST['']; ?> as the winner of you auction. Thank you for using spotaplace for handeling your request</p>
    <p>Spotaplace: The best Deals because they are based on the value you dictate! Power To the Consumer!</p>
    
    <?php  
    $businessArray = array();
    $businessArray = $Setup->getBizzByBizzId($_POST['bizz_id']);
    error_log("the winner's id is".$_POST['bizz_id']."and the request id = ".$_POST['request_id']);
    $bidInfo = new BidService();
    $bid = $bidInfo->getSingleBid($_POST['bid_id']);
    //error_log("this is the bid".$bid[0]["bid_price"]);
    //deactivate request
    $req = new Request();
    $req->deactivateRequest($_POST['request_id']);
    
    //var_dump($_POST['request_id']);
    $req->chooseWinner($_POST['request_id'], $_POST['bizz_id']);
    
    
    
    ?>
    <div id="Bizzdiv" class="grid_8">
        <div id="nob" class="grid_7"> <?php echo $businessArray[0]['name_of_business'] ?></div>
        <div id="thumb_container" class="grid_3">
            <div id="thumb">
                <img src="img/testpic.jpeg" height="117" width="210"/>
                     
            </div>   
            
        </div>
        <div id="company_info" class="grid_4">
            <ul>
                <li>

                	<a href="#">Email : <?php echo $businessArray[0]['email_1'] ?></a>

                </li>
                <li>

                	<a href="#">Website : <?php echo $businessArray[0]['website'] ?></a>

                </li>
                <li>

                	<a href="#">Phone Number :<?php echo $businessArray[0]['website'] ?> </a>

                </li>
                <li>

                	<a href="#">Price :<?php echo $bid[0]["bid_price"] ?> </a>

                </li>
            </ul>
        </div>
        <div id="description" class="grid_7">
            <?php echo " The request you made was: ".$bid[0]["bid_proposal"] ?>
        </div>
        
    </div>
</div>


