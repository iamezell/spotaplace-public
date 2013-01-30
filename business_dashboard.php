<!doctype html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

  <title></title>
  <meta name="description" content="">
  <meta name="author" content="">

  <meta name="viewport" content="width=device-width">

  <link rel="text/stylesheet" href="css/jquery.countdown.css">
  <link rel="stylesheet/less" href="less/style.less">
  <script src="http://js.pusher.com/1.11/pusher.min.js"></script>
  <script src="js/libs/less-1.3.0.min.js"></script>
  
  <!-- Use SimpLESS (Win/Linux/Mac) or LESS.app (Mac) to compile your .less files
  to style.css, and replace the 2 lines above by this one:

  <link rel="stylesheet" href="less/style.css">
-->

<script src="js/libs/modernizr-2.5.3-respond-1.1.0.min.js"></script>


</head>
<body>
  <!--[if lt IE 7]><p class=chromeframe>Your browser is <em>ancient!</em> <a href="http://browsehappy.com/">Upgrade to a different browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to experience this site.</p><![endif]-->

  <div class="navbar navbar-fixed-top">
    <div class="navbar-inner">
      <div class="container">

        <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </a>
        <a class="brand" href="#">Spot<span style="color:#ff8500;">a</span>place</a>
        <div class="btn-group pull-right">
          <a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
            <i class="icon-user"></i> <span class="userName"></span>
            <span class="caret"></span>
          </a>
          <ul class="dropdown-menu">
            <li><a class="signout" href="index.html">Sign Out</a></li>
          </ul>
        </div>  
        <div class="nav-collapse">
          <ul class="nav">
            <li class="active"><a href="#">Home</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="contact.php">Contact</a></li>


          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>
  </div>

  <div class="container-fluid">

    <!-- Main hero unit for a primary marketing message or call to action -->
    <div class="hero-unit">
       <div class="active item">
            <img src="img/SiteHeader.jpg">
          </div>
    </div>
    <div class="row-fluid">
      <div class="span3 well">
        <ul class="nav nav-list ori">
          <li class="nav-header"></li>
          <li>
            <a href="home.html">
              <i class="icon-home"></i>
              home
            </a>
          </li>
          <li>
            <a href="request.html">
              <i class="icon-comment"></i>
              request
            </a>
          </li>
          <li>
          <a href="auctions.html">
            <i class="icon-gift"></i>
            auctions
          </a>
        </li>
        <li>
          <a href="profile.html">
            <i class="icon-user"></i>
            profile
          </a>
        </li>
        <li>
            <a href="invite.html">
              <i class="icon-star"></i>
              invite friends
            </a>
          </li>
        <li>
          <a href="businessInfo.html">
            <i class="icon-tags"></i>
            register a business
          </a>
        </li>
      </ul>
      <hr>
      <p>Your Business List</p>
      <hr>
      <ul class="nav bizzNav">

      </ul>

    </div>

    <div class="span9 contents">
      <div class="remContents" >
       <div class="hero-unit">
        <h4>Welcome to the Revolution!</h4>
      </div>
      <div>
       <form class="well span5 first" action="php/signup.php" method="post">
          <fieldset>
            <legend>
              Register a Business  
            </legend> 
            <lable>Name of Business</lable>
            <input type="text" class="span10" name="name_of_bizz" value="" placeHolder="business name"></input>
            <hr>
            <lable>Products</lable>
            
            <hr>
            <input type="checkbox" name="industry[]" value="1">appliances<br>
            <input type="checkbox" name="industry[]" value="2">auto parts<br>
            <input type="checkbox" name="industry[]" value="3">babies_kids<br>
            <input type="checkbox" name="industry[]" value="4">books<br>
            <input type="checkbox" name="industry[]" value="5">Cameras<br>
            <input type="checkbox" name="industry[]" value="6">clothings<br>
            <input type="checkbox" name="industry[]" value="7">computers<br>
            <input type="checkbox" name="industry[]" value="8">electronics<br>
            <input type="checkbox" name="industry[]" value="9">flowers angifts<br>
            <input type="checkbox" name="industry[]" value="10">furniture<br>
            <input type="checkbox" name="industry[]" value="11">grocery or gourmet<br>
            <input type="checkbox" name="industry[]" value="12">health and beauty<br>
            <input type="checkbox" name="industry[]" value="13">indoor living<br>
            <input type="checkbox" name="industry[]" value="14">software<br>
            <input type="checkbox" name="industry[]" value="15">sporting goods<br>
            <input type="checkbox" name="industry[]" value="16">toys<br>
            <input type="checkbox" name="industry[]" value="17">video games<br>
            <hr>
            Services
            <hr>
            <input type="checkbox" name="industry[]" value="18">Love Services<br>
            <input type="checkbox" name="industry[]" value="19">Repair Services<br>
            <input type="checkbox" name="industry[]" value="20">Children Services<br>
            <input type="checkbox" name="industry[]" value="21">Medical Services<br>
            <input type="checkbox" name="industry[]" value="22">Food Services<br>
            <input type="checkbox" name="industry[]" value="23">Rental Services<br>
            <hr>
            <lable>State</lable>
            <input type="text" name="state" class="span10" value="" placeHolder=""></input>
            <lable>City</lable>
            <input type="text" name"city" class="span10" value="" placeHolder=""></input>
            <lable>Street Number</lable>
            <input type="text" name="streetNum" class="span10" value="" placeHolder=""></input>
            <lable>Street</lable>
            <input type="text" name="street" class="span10" value="" placeHolder=""></input> 
            <lable>Zip</lable>
            <input type="text" name="zip" class="span10" value="" placeHolder=""></input>
            <lable>Email</lable>
            <input type="text" name="email" class="span10" value="" placeHolder=""></input>
            <lable>Fax</lable>
            <input type="text" name="fax" class="span10" value="" placeHolder=""></input>
            <lable>Phone</lable>
            <input type="text" name="phone" class="span10" value="" placeHolder=""></input>
            <lable>Website</lable>
            <input type="text" name="website" class="span10" value="" placeHolder=""></input>
             <input type="hidden" class="span14 id" name="id" value="" />
            <lable>Describe Your Business</label>
              <textarea name="textarea" class="span14 state" id="textarea" cols="45" rows="5"></textarea>
              <button type="submit" class="btn btn-primary">Submit</button>
            </fieldset>
          </form>
      </div>
      <div class="nav-list well span3 peace" style="margin-right:10px;">
        <ul class="nav Something">
         <li class="nav-header">Active Auctions</li>

       </ul>
     </div>  
<!-- <div>
  <ul class="thumbnails">
    <li class="span3">
      <div class="thumbnail">
        <img class="avatar_img" src="http://placehold.it/260x180" alt="">
        <div class="caption">
          <h5>Avatar Picture</h5>
          <p>This is the avatar picture that will be seen.</p>
          <div>
  <form action="php/upload_bizz_avatar.php" method="post"
  enctype="multipart/form-data">
  <fieldset>
    <legend>Upload a Avatar Pic </legend>
    <input type="file" name="file" id="file" /> 
    <br />
    <input type="hidden" class="span14 bizz_id" name="id" value="" />
    <input type="submit" class="btn btn-primary" name="submit" value="Submit" />
  </form>
</div> -->
</div>
</div>
</div>
</li>
</ul>
</div>

</div>





<hr>

<footer>
  <p>&copy; spotaplace.com 2012</p>
</footer>


</div> <!-- /container -->
<div class="modal hide" id="myModal">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal">×</button>
    <h3>Make a Bid</h3>
  </div>
  <div class="modal-body">
   <div id="bizzForm" class="grid_8">
     <form class="placeBid" action="javascript:void(0);">
      <label>Price</label>
      <input class="price_in" type="text" name="price"/>
      <label>Description</label>
      <textarea class="descrip_in" name="description"></textarea>
      <input class="request_id_in" type="hidden" name="request_id" value="" />
      <input class="biz_id_in" type="hidden" name="bizz_id" value="" />
      <input class="chanel_in" type="hidden" name="chanel_id" value="" />
      <a href="#" class="btn bidBtn" data-dismiss="modal">Submit Bid!</a>

    </form>
  </div>
</div>
<div class="modal-footer">
  <a href="#" class="btn" data-dismiss="modal">Close</a>
</div>
</div>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="js/libs/jquery-1.7.2.min.js"><\/script>')</script>
<script type="text/javascript"> 

$(document).ready(function(){
  $(".signout").click(function(){
     localStorage.in=0;
  });
  if(localStorage.hasBusiness == 1){
    $(".ori").append('<li><a href="business_dashboard.php"><i class="icon-tags"></i>business dashboard</a></li>');

  }
  var myObjArray = new Array();
  var pushObj = {};
  var timing;

  var id = localStorage.id;
  localStorage.id;
  $(".userName").html(localStorage.name);

  $.post("php/getUserBizz.php", {"id":id},function(data){

    obj = jQuery.parseJSON(data);
    user = jQuery.parseJSON(obj);
    for(var i=0; i < obj.length; i++){
      console.log(obj[i]["request_id"]);
      var myDiv = $("<div>hi"+i+"</div>");
      //interesting turn of events lets save the objects
      myObjArray.push(obj[i]);
      console.log(myDiv);
      myDiv.addClass = "well";
      var requestsDiv = [
      '<li>',
      '<form class="fo" action="javascript:void(0);">',
      '<input type="hidden" class="span14 id" name="biz_id" value="'+obj[i]["business_id"]+'" />',
      '<p><span class="label label-success">'+obj[i]["name_of_business"]+'</span></p>',
      '<button type="submit" class="btn btn-primary viewBtn">view</button>',
      '</form>',
      '<hr>',
      '</li>'
      ].join('');
      $(".bizzNav")[0].innerHTML += requestsDiv;
    }//end for loop
    $("form").on("click",function(event){
      var form = $(this);
      var bizz_id = $(form[0].firstChild).attr("value");
      
    
    for (var i = 0; i < myObjArray.length; i++) {
      if(myObjArray[i]["business_id"] ==  bizz_id)
      {
             // now that we have the right object we can now go and do thedamn thing
             $(".name_of_bizz").attr("placeHolder",myObjArray[i]["name_of_business"]);
             $(".state").attr("placeHolder",myObjArray[i]["state"]);
             $(".city").attr("placeHolder",myObjArray[i]["city"]);
             $(".streetNum").attr("placeHolder",myObjArray[i]["streetNum"]);
             $(".Street").attr("placeHolder",myObjArray[i]["street"]);
             $(".zip").attr("placeHolder",myObjArray[i]["zip"]);
             $(".email").attr("placeHolder",myObjArray[i]["email"]);
             $(".fax").attr("placeHolder",myObjArray[i]["fax"]);
             $(".phone").attr("placeHolder",myObjArray[i]["phone"]);
             $(".website").attr("placeHolder",myObjArray[i]["website"]);
             $(".bizz_id").attr("value",myObjArray[i]["business_id"]);
             $(".avatar_img").attr("src",myObjArray[i]["avatar_path"]);
             
             
             

           }
         };

    //now we have to make a call to the database and get the requests by business
    $.post("php/getRequestsFromBizzId.php", {"id":bizz_id},function(data){
      obj1 = jQuery.parseJSON(data);
      
      
      //ok so now we need to loop through all the requests and build forms for them
      $(".Something")[0].innerHTML = "";
      //$(".Something")[0].innerHTML = '<li class="nav-header">Active Auctions</li>';
      for (var i = 0; i < obj1.length; i++) {
        var requestsList = [
        '<li>',
        '<form class="requestsForm" action="javascript:void(0);">',
        '<input type="hidden" class="span14 req_id" name="req_id" value="'+obj1[i]["request_id"]+'" />',
        '<input type="hidden" class="span14 chanel" value="'+obj1[i]["chanel"]+'" />',
        '<input type="hidden" class="span14 bizz_id_req" name="biz_id" value="'+bizz_id+'" />',
        '<p><span class="">'+obj1[i]["message_body"]+'</span></p>',
        '<p>Auction Closes at:<span class="timeer">',obj1[i]["time_committed"],'</span></p>',
        '<button type="submit" class="btn btn-success viewBtn">Go to Auction!!</button>',
        '</form>',
        '<hr>',
        '</li>'
        ].join('');
      //clear first than add
     
      $(".Something")[0].innerHTML += requestsList;

    };
    $(".requestsForm").on("click",function(event){
      var form = $(this);

      var request_id = $(form[0].firstChild).attr("value");
      var chanel = $(form[0].firstChild.nextSibling).attr("value");
      var bizz_id_in = $(form[0].firstChild.nextSibling.nextSibling).attr("value");


      timing = $(form[0].firstChild.nextSibling.nextSibling.nextSibling.nextSibling.firstChild.nextSibling).html();
      //nextSibling.nextSibling.nextSibling.firstChild.nextSibling.firstChild
      

      //jjjjjjjj
      $(".request_id_in").attr("value",request_id);

      //we need to fill an object upon choice so that we can fill in info that will
      //go to the pusher script
      //ok we need to get the requests from the actual form
      var request = 
      $(".request_id_in").attr("value",request_id );
      $(".chanel_in").attr("value", chanel);
      $(".biz_id_in").attr("value",bizz_id_in);



      $(".remContents").toggle();
      $(".bizzNav").toggle();

      //lets make a call to get the actual data
      $.post("php/getBids.php", {"id":request_id},function(data){
        obj2 = jQuery.parseJSON(data);
        if(obj1 == "there is no match")
        {
          alert("there are no bids yet");
        }else{
          //ok let get rid of the div
          //alert(obj1[0]["bid_proposal"]);
          $(".remContent").toggle();
          for(var i=0; i < obj2.length; i++){
            var divComp = [ 
            '<div class="well span8">',
            '<div class="row">',
            '<div class="span4" style="margin-left:25px;  margin-right:25px;">',
            '<img src="/img/avatars/default.jpg" height="117" width="210">',
            '</div>',
            '<div class="span6">',
            '<p>Name: ',obj2[i]["name_of_business"],'<p>',
            '<p>Email: ',obj2[i]["email_1"],'<p>',
            '<p>Website: ',obj2[i]["website"],'<p>',
            '<p>Phone Number : ',obj2[i]["phone"],'<p>',
            '<p>Email: ',obj2[i]["price"],'<p>',
            '<form>',
            // '<button type="submit" class="vendorInfoBtn btn btn-info" rel="popover" data-content="Find out more about this vendor" data-original-title="Make an informed descision">Vendor Info</button>',
            // '<button type="submit" class="soldBtn btn btn-success" rel="popover" data-content="If you like the deal thats being made, press this button to choose the winner" data-original-title="Choose This Vendor">Sold!!</button>',
            
            '</form>',

            '</div>',
            '</div>',
            '<hr>',
            '<p>',obj2[i]["bid_proposal"],'</p>',
            '</div>'
            ].join('');
            $(".contents")[0].innerHTML += divComp;
          }//end for

        }
        $("body").append('<span class="label label-important timer" style="position:fixed; top:150px; "></span>');
        $("body").append('<a class="btn" data-toggle="modal" style="position:fixed; top:100px;" href="#myModal" >Bid!</a>');
        // $('.soldBtn').popover();
        // $('.vendorInfoBtn ').popover();
        //we need to get the Value from the 
        var time = new Date(timing);
         $('.timer').countdown({
          until:time,
          compact: true
          });

        var pusher = new Pusher('ae1f5dcd397b352ab651');

        var thingChannel = pusher.subscribe($(".chanel_in").attr("value"));
        console.log('this is the chanel'+ $(".chanel_in").attr("value"));

       thingChannel.bind('thing_create', function(data) {
        
        if(JSON.parse(data).isActive == false){
            alert("Auction is closed");
        }else{
              var divComp1 = [ 
            '<div class="well span8">',
            '<div class="row">',
            '<div class="span4" style="margin-left:25px;  margin-right:25px;">',
            '<img src="/img/avatars/default.jpg" height="117" width="210">',
            '</div>',
            '<div class="span6">',
            '<p>Name: ',JSON.parse(data).name_of_business,'<p>',
            '<p>Email: ',JSON.parse(data).email_1,'<p>',
            '<p>Website: ',JSON.parse(data).website,'<p>',
            '<p>Phone Number : ',JSON.parse(data).phone,'<p>',
            '<p>Email: ',JSON.parse(data).price,'<p>',
            '<form>',
            // '<button type="submit" class="vendorInfoBtn btn btn-info" rel="popover" data-content="Find out more about this vendor" data-original-title="Make an informed descision">Vendor Info</button>',
            // '<button type="submit" class="soldBtn btn btn-success" rel="popover" data-content="If you like the deal thats being made, press this button to choose the winner" data-original-title="Choose This Vendor">Sold!!</button>',
            
            '</form>',

            '</div>',
            '</div>',
            '<hr>',
            '<p>',JSON.parse(data).description,'</p>',
            '</div>'
            ].join('');
            $($(".contents")[0]).prepend(divComp1);
       }
   });

      });

});

});

});




})

 

$(".bidBtn").click(function(){
  //lets get all the info that was in the form and send it
   $.post("php/pusherTest.php", $(".placeBid").serialize(), function(data){

   })//end post
})//end click




});

</script>

<!-- scripts concatenated and minified via ant build script-->
<script src="js/libs/bootstrap/bootstrap.min.js"></script>

<script src="js/script.js"></script>
<script type="text/javascript" src="js/jquery.countdown.js"></script>
<!-- end scripts-->

<script>
var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
(function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
  g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
  s.parentNode.insertBefore(g,s)}(document,'script'));
</script>

</body>
</html>
