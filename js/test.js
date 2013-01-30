var test = test || {};

(function(){
	$(document).ready(function(){
		
		
		$($("#loginFooter a")[1]).click(function(){
		//we need to check if the proper information was entered
		//todo checkInfoFunction();

		$.post("php/login.php", $("#login").serialize(), function(data){ 
			console.log("hi"); 
			var obj = jQuery.parseJSON(data); 

			if(obj.redirect === true)
			{
											//the message is true we now need to put
											var user = jQuery.parseJSON(obj.userInfo);

											if(typeof(Storage)!=="undefined")
											{
													// Yes! localStorage and sessionStorage support!
													// Some code.....
													localStorage.id = user.account_id;
													localStorage.name = user.name;
													localStorage.email = user.Email;



												}
												else
												{
											// Sorry! No web storage support..
										}
										window.location.href = obj.message;
									}else{



									}




								});  
	});

		$(".signupBtn").click(function(){
			if(validateForm() === false)
			{

			}else{
				$.post("php/reg_user.php", $(".users").serialize(), function(data){ 
					var obj = jQuery.parseJSON(data); 
		// is the email being used now
		if(obj.message == "This email is being used, if there is yours please go to the forgot email link.")
		{

			
			if($(".loginAlert").css("display") == "none")
			{

				$(".loginAlert").toggle();
				$(".loginAlert").html(obj.message);

			}
			$(".loginAlert").html(obj.message);
		}else{
			if($(".loginAlert").css("display") == "none")
			{

				$(".loginAlert").toggle();
				$(".loginAlert").html(obj.message);

			}
		}


	});



		 //function for validating forms
		 function validateForm()
		 {
		 	if(($(".users input").val() ===  null ) || ($(".users input").val() === "")){
		 		if($(".loginAlert").css("display") == "none")
		 		{


		 			$(".loginAlert").toggle();	

		 		}
		 		$(".loginAlert").html("Please enter Valid information");
		 		return false;
		 	}else{
				//ok there is something in the controls now we need to make sure the the passwords match
				if($(".users input:nth-child(2)").val() === $(".users input:nth-child(3)").val() )
				{
					//passwords match good return true
					return true;
				}else{
					//passwords do not match
					if($(".loginAlert").css("display") == "none")
					{

						$(".loginAlert").toggle();

					}
					
					$(".loginAlert").html("Passwords do not match try again.");
					return false;
				}
			}
			
		 }//end Validate form
		}


	});

window.fbAsyncInit = function() {
	FB.init({
						appId      : '256636014447459', // App ID
						channelUrl : '//localhost/channel.html', // Channel File
						status     : true, // check login status
						cookie     : true, // enable cookies to allow the server to access the session
						xfbml      : true  // parse XFBML
					});
					// Additional initialization code here
					


					$('.faceSignUp').click(function(){
						FB.login(function(response) {
							if (response.authResponse) {
								console.log('Welcome!  Fetching your information.... ');
								FB.api('/me', function(response) {
									console.log('Good to see you, ' + response.name + ' '+'your email is '+response.email);
									//here is where we make the call
									$.post("php/loginFacebook.php", {name:response.name, email:response.email}, function(data2){

										var obj = jQuery.parseJSON(data2);
										console.log(data2);

										if(obj.redirect === true)
										{
											//the message is true we now need to put
											var user = jQuery.parseJSON(obj.userInfo);

											if(typeof(Storage)!=="undefined")
											{
													// Yes! localStorage and sessionStorage support!
													// Some code.....
													localStorage.id = user.account_id;
													localStorage.name = user.name;
													localStorage.email = user.Email;



												}
												else
												{
											// Sorry! No web storage support..
										}
										window.location.href = obj.message;
									}else{



									}


								});
								});
} else {
	console.log('User cancelled login or did not fully authorize.');
}
						},{scope: 'email'});//end FB login

					});//end faceSignIn click handler
$('.faceSignIn').click(function(){
	FB.login(function(response) {
		if (response.authResponse) {
			console.log('Welcome!  Fetching your information.... ');
			FB.api('/me', function(response) {
				console.log('Good to see you, ' + response.name + ' '+'your email is '+response.email);
									//here is where we make the call
									$.post("php/loginFacebook.php", {name:response.name, email:response.email}, function(data2){

										var obj = jQuery.parseJSON(data2);
										console.log("got here");
										console.log(data2);

										if(obj.redirect === true)
										{
											//the message is true we now need to put
											var user = jQuery.parseJSON(obj.userInfo);

											if(typeof(Storage)!=="undefined")
											{
													// Yes! localStorage and sessionStorage support!
													// Some code.....
													localStorage.id = user.account_id;
													localStorage.name = user.name;
													localStorage.email = user.Email;



												}
												else
												{
											// Sorry! No web storage support..
										}
										window.location.href = obj.message;
									}else{



									}


								});
								});
} else {
	console.log('User cancelled login or did not fully authorize.');
}
						},{scope: 'email'});//end FB login

					});//end faceSignIn click handler
};
				// Load the SDK Asynchronously
				(function(d){
					var js, id = 'facebook-jssdk', ref = d.getElementsByTagName('script')[0];
					if (d.getElementById(id)) {return;}
					js = d.createElement('script'); js.id = id; js.async = true;
					js.src = "//connect.facebook.net/en_US/all.js";
					ref.parentNode.insertBefore(js, ref);
				}(document));
});//end document ready


})();