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

  <link rel="stylesheet/less" href="less/style.less">
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
        <a class="brand" href="#">Spot-a-place</a>
        <div class="btn-group pull-right">
          <a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
            <i class="icon-user"></i> <span class="userName"></span>
            <span class="caret"></span>
          </a>
          <ul class="dropdown-menu">
            <li><a href="#">Sign Out</a></li>
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
      <h1>Welcome to the Revolution!</h1>
    </div>
    <div class="row-fluid">
      <div class="span3 well">
        <ul class="nav nav-list">
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
          <liclass="active">
          <a href="#">
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
            <a href="businessInfo.html">
              <i class="icon-tags"></i>
                  register a business
            </a>
          </li>
      </ul>

    </div>

    <div class="span9 contents">
      <h1>These are your active requests</h1>
      <hr>

      <ul class="thumbnails">
      </ul>
    </div>    

  </div>
  <hr>

  <footer>
    <p>&copy; spotaplace.com 2012</p>
  </footer>


</div> <!-- /container -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="js/libs/jquery-1.7.2.min.js"><\/script>')</script>
<script type="text/javascript"> 

$(document).ready(function(){
  var id = localStorage.id;
  localStorage.id;
  $(".userName").html(localStorage.name);

  $.post("php/getAuctions.php", {"id":id},function(data){

    obj = jQuery.parseJSON(data);
    user = jQuery.parseJSON(obj);
    for(var i=0; i < obj.length; i++){
      console.log(obj[i]["request_id"]);
      var myDiv = $("<div>hi"+i+"</div>");
      console.log(myDiv);
      myDiv.addClass = "well";
      var requestsDiv = [
      '<li class="span3">',
        '<div class="thumbnail">',
          '<img src="http://placehold.it/260x180" alt="">',
          '<div class="caption">',
            '<p>"'+obj[i]["message_body"]+'"</p>',
            '<p>',
              '<form class="well" action="openauction.php" method="POST">',
                '<input type="hidden" class="span14 id" name="request_id" value="'+obj[i]["request_id"]+'" />',
                '<input type="hidden" class="span14 id" name="chanel" value="'+obj[i]["chanel"]+'" />',
                '<input type="hidden" class="span14 id" name="active" value="'+obj[i]["active"]+'" />',
                '<input type="hidden" class="span14 id" name="commingFrom" value="'+obj[i]["comingFrom"]+'" />',
                '<button type="submit" class="btn btn-info">Go to Auction</button>',
              '</form>',
            '</p>',
          '</div>',
        '</div>',
      '</li>'
      ].join('');
      $(".contents ul")[0].innerHTML += requestsDiv;
    }

  })




});

</script>

<!-- scripts concatenated and minified via ant build script-->
<script src="js/libs/bootstrap/bootstrap.min.js"></script>

<script src="js/script.js"></script>
<!-- end scripts-->

<script>
var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
(function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
  g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
  s.parentNode.insertBefore(g,s)}(document,'script'));
</script>

</body>
</html>
