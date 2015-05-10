<?php include 'php/curlscraper.php'; ?>
<!DOCTYPE HTML>
<!--[if lt IE 7]><html class="no-js lt-ie9 lt-ie8 lt-ie7"><![endif]-->
<!--[if IE 7]><html class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if IE 8]><html class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--><html class="no-js"><!--<![endif]-->
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale = 1.0, user-scalable = no">
	<title>Beijing Inn: Chinese Restaurant & Takeaway</title>
	<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700,600' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="css/normalize.css" type="text/css" media="screen">
	<link rel="stylesheet" href="css/grid.css" type="text/css" media="screen">
	<link rel="stylesheet" href="css/lightbox.css" type="text/css" media="screen">
	<link rel="stylesheet" href="css/style.css" type="text/css" media="screen">
	<!-- <link rel="stylesheet" href="css/style.min.css" type="text/css" media="screen"> -->
	<!--[if IE]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
</head>
<body onLoad='init()'>
	<div class="menu">
		<div class="container clearfix">

			<div id="logo" class="grid_3">
				<img src="images/logo.png">
			</div>

			<div id="nav" class="grid_9 omega">
				<ul class="navigation">
					<li data-slide="1">Home</li>
					<li data-slide="2">Intro</li>
					<li data-slide="3">Menu</li>
					<li data-slide="4">Location</li>
					<li data-slide="5">Pictures</li>
					<!--<li data-slide="6">Reviews</li>-->
				</ul>
			</div>

		</div>
	</div>
    
    <!-- promotional tag -->
    <!--<div id="promotionTag">
        <img src="images/offer.png" border="0">
    </div>
    
    <div id="promotionBanner">
        Mon-Thurs: All you can eat <b>£13.95</b>
    </div>-->

    
	<div class="slide indexslidepadding" id="slide1" data-slide="1" data-stellar-background-ratio="0.5">
		<div class="container clearfix">

			<div id="content" class="grid_7">
				<h1>Best Chinese in town.</h1>
				<h2>Eat in restaurant and takeaway.</h2>
				<p class="phonenumber">01634 570 633</p>
				<p class="phonenumber">01634 851 221</p>
				<h3>Opening Times:</h3>
				<div id="openingTimes" class="grid_12">
					<div class="grid_3" align="right">
						Mon - Thurs:<br>Fri - Sat:<br>Sun:
					</div>
					<div class="grid_9 omega">
						12:00 - 14:30, 17:30 - 23:00<br>
						12:00 - 14:30, 17:30 - 00:00<br> 
						12:00 - 16:00, 17:30 - 23:00
					</div>
				</div>
                <div id="openingTimesTablet" class="grid_12">
					<div class="grid_12">
						Mon - Thurs: 12:00 - 14:30, 17:30 - 23:00<br>
                        Fri - Sat: 12:00 - 14:30, 17:30 - 00:00<br>
                        Sun: 12:00 - 16:00, 17:30 - 23:00
					</div>
				</div>
			</div>
			<div id="decorative" class="grid_5 omega">
				<img src="images/decorative.png">
			</div>

		</div>
	</div>



	<div class="slide introslidepadding" id="slide2" data-slide="2" data-stellar-background-ratio="0.5">
		<div class="container clearfix">
			<!--div id="firstslideoverflow" class="grid_12">
				<div id ="content" class="grid_7">
				</div>
				<div id="decorative" class="grid_5 omega">
					<img src="images/decorative.png">
				</div>
			</div>-->

			<div id="decorative" class="grid_6">
				<img src="images/noodlebowl.png">
			</div>
			<div id="content" class="grid_6 omega">
				<h1>Introduction</h1>
				<h2>A brief overview</h2>
				<p>With over 20 years experience in the Chinese restaurant trade, Tony is really making a difference at the Beijing Inn, in Gillingham. Tony took over the Beijing Inn five years ago, having moved down from the Miu Vally Takeaway. Backed by an equally experienced panel of chefs, we are able to offer Thai and Malaysian dishes, as well as some of the best Chinese cooking around.</p>
				<p>The menu includes more than 150 dishes, which you can mix and match for a unique delicious experience. The restaurant can accomadate over 100 people, and is an ideal location for special night with friends, a date or a party for groups upto 30. If you dont fancy a night out, then why not try our takeaway service?</p>
			</div>

		</div>
	</div>

	<div class="slide" id="slide3" data-slide="3" data-stellar-background-ratio="0.5">
		<div class="container clearfix">
			<div id="content" class="grid_12">
				<h1>Menus</h1>
				<a href="menus/beijinginn_takeaway.pdf">
					<div id="menu" class="grid_6">
						<p><img src="images/takeawayicon.png"></p>
						<h2>Take Away</h2>
						<p>Select from a large range of dishes or set meals from our takeaway menu. We do delivery within the Medway area</p>
					</div>
				</a>
				<a href="menus/beijinginn_setmeal.pdf">
					<div id="menu" class="grid_6 omega">
						<p><img src="images/setmealicon.png"></p>
						<h2>Set Meal</h2>
						<p>This is our classic eat in menu. This includes, starters, first course, second course and the main course. Desserts are optional.</p>
					</div>
				</a>
				<!--<a href="menus/beijinginn_sundayspecial.pdf">
					<div id="menu" class="grid_4 omega">
						<p><img src="images/sundayspecialicon.png"></p>
						<h2>Special Set Lunch</h2>
						<p>Lunches should be special and because of this, we do a special 'mix and match' meal. Select a rice/noodle, a meat choice, a sauce from our selection, and (optional) a soup!</p>
					</div>
				</a>-->
				<!--<a href="menus/beijinginn_valentines.pdf">
					<div id="menu" class="grid_3 omega">
						<p><img src="images/valentinesmenuicon.png"></p>
						<h3>Valentines Menu</h3>
						<p>A limited valentines menu will be avaliable from the restaurant for a limited time. Bring your loved ones over for a great evening.</p>
					</div>
				</a>-->
				<div id="menu" class="grid_12">
					<p>Free delivery for orders above £15. Otherwise a £1.50 delivery charge.</p>
				</div>
			</div>
		</div>
	</div>

	<div class="slide mappadding" id="slide4" data-slide="4" data-stellar-background-ratio="0.5">
		<div id="googleMap"></div>
	</div>



	<div class="slide" id="slide5" data-slide="5" data-stellar-background-ratio="0.5">
		<div class="container clearfix">

			<div id="content" class="grid_12">
				<div id="gallery">
					<h1>Pictures</h1>
				</div>
			</div>
		</div>
	</div>

	<!--<div class="slide" id="slide6" data-slide="6" data-stellar-background-ratio="0.5">
		<div class="container clearfix">

			<div id="content" class="grid_12">
				<h1>Recent Reviews</h1>
				<div id="reviews">
					<?php
						//$reviews = getReviews();
						//echo $reviews;
					    
					    for ($i = 0; $i <= 5; $i++) {
					    	//echo '<p>' + $review->starRating + '<br>' + $review->textRating + '</p>';
					    	echo "\"" . $reviews[$i]->textRating . "\"";
					    	//echo "<br>";
					    	echo "<h2><p align=\"right\">";
					    	for ($j = 0; $j < $reviews[$i]->starRating; $j++) {
					    		echo("&#9733;");
					    	}
					    	for ($k = 0; $k < (5 - $j); $k++) {
					    		echo("&#9734;");
					    	}
					    	echo ("</p></h2>");
					    	//print_r($review);
					    }
					?>
				</div>
			</div>

		</div>
	</div>-->

	<div class="slide nopadding" id="slide7" data-slide="7" data-stellar-background-ratio="0.5">
		<div class="container clearfix">

			<div id="content" class="grid_12">
				<div id="logo" class="grid_2">
					<img src="images/footerlogo.png">
				</div>
				<div id="footerpane" class="grid_2">
					<div id="footerlogo">
						<p>3 KING STREET<br>
						GILLINGHAM, KENT<br>
						ME7 1EY</p>
						<p>01634 570 633<br>
						01634 851 221</p>
					</div>
				</div>
				<div id="footerpane" class="grid_7">
					<a href="https://www.tripadvisor.co.uk/Restaurant_Review-g503904-d789989-Reviews-Beijing_Inn-Gillingham_Kent_England.html"><h2>Please leave a review on Trip Advisor to tell us on what we're doing right and wrong!</h2></a>
					<p>Opening Times:<br>
                        <div id="openingTimes" class="grid_12">
                            <div class="grid_3">
                                Mon - Thurs:<br>Fri - Sat:<br>Sun:
                            </div>
                            <div class="grid_9 omega">
                                12:00 - 14:30, 17:30 - 23:00<br>
                                12:00 - 14:30, 17:30 - 00:00<br> 
                                12:00 - 16:00, 17:30 - 23:00
                            </div>
                        </div>
                        <div id="openingTimesTablet" class="grid_12">
                            <div class="grid_12">
                                Mon - Thurs: 12:00 - 14:30, 17:30 - 23:00<br>
                                Fri - Sat: 12:00 - 14:30, 17:30 - 00:00<br>
                                Sun: 12:00 - 16:00, 17:30 - 23:00
                            </div>
				        </div>
						<div class="grid_12">
							<p>Website designed by <a href="http://www.linkedin.com/pub/dolan-miu/66/a98/343">Dolan Miu<a/>. Copyright © Beijing Inn. All rights reserved.</p>
						</div>
				</div>
				<div id="footerpane" class="grid_1 omega">
					<a href="https://www.tripadvisor.co.uk/Restaurant_Review-g503904-d789989-Reviews-Beijing_Inn-Gillingham_Kent_England.html"><img src="images/tripadvisoricon.png"></a>
					<a href="https://www.facebook.com/Beijinginn"><img src="images/facebookicon.png"></a>
					<a href="https://maps.google.co.uk/maps?q=beijing+inn+gillingham"><img src="images/googlemapsicon.png"></a>
					<a href="https://www.linkedin.com/pub/dolan-miu/66/a98/343"><img src="images/linkedinlogo.png"></a>
				</div>
			</div>
		</div>
	</div>
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA03sMDyRUq9gwVwq-4Glmb6pfUoR4xOaQ&sensor=false"></script>
	<script>
        var map;
		function initialize()
		{
			var myCenter = new google.maps.LatLng(51.387155, 0.548719);
			var mapProp = {
				center:myCenter,
				zoom:16,
				mapTypeId:google.maps.MapTypeId.ROADMAP,
				scrollwheel: false
			};

			map = new google.maps.Map(document.getElementById("googleMap"), mapProp);

			var marker=new google.maps.Marker({
	  			position:myCenter,
	  		});

			marker.setMap(map);

			var infowindow = new google.maps.InfoWindow({
				content:"<div id=\"googlemapsinfowindow\">3 King Street" + "<br />" + "Gillingham" + "<br />" + "ME7 1EY</div>",
			});

			infowindow.open(map,marker);
		}

		google.maps.event.addDomListener(window, 'load', initialize);
        

	</script>
    
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
	<script type="text/javascript" src="js/jquery.stellar.min.js"></script>
	<script type="text/javascript" src="js/waypoints.min.js"></script>
	<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
	<!--<script type="text/javascript" src="js/jquery.nicescroll.min.js"></script>-->
	<script type="text/javascript" src="js/jarallax-0.2.2.js"></script>
	<!--<script type="text/javascript" src="js/jquery.nailthumb.1.1.min.js"></script>-->
	<script type="text/javascript" src="js/lightbox-2.6.min.js"></script>
	<script type="text/javascript" src="js/scripts.js"></script>
	<!-- <script type="text/javascript" src="js/scripts.min.js"></script> -->
    <script>        
        
        fixMap = function() {
            var mapOptions;
            var myCenter = new google.maps.LatLng(51.387155, 0.548719);
            var mapHeight = $( window ).height();

            $( "#googleMap" ).height(mapHeight + 100);
            if ($( window ).width() < 1024) {
                mapOptions = {
                    draggable: false,
                    center:myCenter,
                    disableDoubleClickZoom: true,
                    streetViewControl: false
                };
            } else {
                mapOptions = {
                    draggable: true,
                    center:myCenter,
                    disableDoubleClickZoom: false,
                    streetViewControl: false
                };
            }
            map.setOptions(mapOptions);
        }
        
        
        $( window ).resize(function() {
            fixMap();
        });
        
        $( window ).load(function() {
            fixMap();
        });
    </script>
</body>
</html>
