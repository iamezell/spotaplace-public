(function(){
	$(document).ready(function(){

		$(".userName").html(localStorage.name);
		$.post("php/sendrequest.html",{"id":localStorage.id}, function(data){

			var obj = jQuery.parseJSON(data);
			var user = jQuery.parseJSON(obj.profile);



		});

	});
	if(localStorage.hasBusiness == 1){
		$(".nav-list").append('<li><a href="business_dashboard.php"><i class="icon-tags"></i>business dashboard</a></li>');

	}
	$(".submitIt").click(function(){
		$.post("php/inviteFriends.php",$(".inviteForm"),serialize(), function(data){
			alert(data);
		});
	});
	 
})();