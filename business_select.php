<?php 
include("header.php");

?>
<script type="text/javascript">
  $(document).ready(function() {
  	 $.post("getUserBizz.php",{id:localStorage.id},function(data){
  		alert(data.business_id);

  	});
  });

  </script>
  <div id="HomeContentIntro" class="grid_8">
  <!-- lets make an ajax call to get the stuff -->
  <h1>Your Businesses</h1>
	<ul id=\"bizzlist\">
  		<li>
  			<div id="BusinessSelectContent" class="grid_3"><img src="/img/avatars/default.jpg" height="100" width="100"><p>Name : </p>
            	<?php 
				
				
				$setup = new Setup();
				$bizzArray = array();
				$bizzArray = $setup->getUserBizz($id);
				
				$num = count($bizzArray);
				
				echo "<h1>Your Businesses</h1>";
				echo"<ul id=\"bizzlist\">";
				for($i=0;$i < $num; $i++)
				{
					//check of there is an avatar for the business if there is not one give the default avatar
					if($bizzArray[$i]["avatar_path"] == "")
					{
                                                
						echo "<li><div id=\"BusinessSelectContent\" class=\"grid_3  \"><img src=\"/img/avatars/default.jpg\" height=\"100\" width=\"100\"><p>Name : ".$bizzArray[$i]["name_of_business"]."</p>";
						
						
					}
					else
					{
                                           
						echo "<li><div id=\"BusinessSelectContent\" class=\"grid_3\"><img src=".$bizzArray[$i]["avatar_path"]." height=\"100\" width=\"100\"><p>Name : ".$bizzArray[$i]["name_of_business"]."</p>";
					}
                           ?>             
						<p><a href="edit_business_profile.html?bizz_id="<?php echo $bizzArray[$i]["business_id"] ?> \>Edit Profile</a></p>
							
						<p><a href="checkbizzrequest.html?bizz_id="<?php echo $bizzArray[$i]["business_id"]."&bizz_product=".$bizzArray[$i]["industry_id"]; ?>\>Check for Requests</a></p></div>

						</li>

						
               <?php                         
					
				}
				echo "</ul>";
				?>
  </div>
            

       





</body>

</html>

