<!DOCTYPE html>
<html>
	<head>
		<title>HighwayHelp</title>
		<link rel="stylesheet" href="main.css" />
		<style>
			section{
			width:80%;
			margin:0 auto;
			background-color:#e0e0e0;
			height:400px;
			}
			section #homepg{ height:300px;
			margin:3% auto;
			width:75%;
			border:2px double black;
				border-radius:3px;}
			section #homepg p
			{
				
				padding:10px;
				font-size:18px;
				text-align:left;
				float:left;
				color:black;
				
			}
			#homepg img{
			position :absolute;
			height:200px;
			width:200px;
			z-index:2;
			}
			
			
		</style>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js" ></script>
		<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCCv9zAPIGYcVM4Tzgzm173Lhsvh0TPpDA&callback=initMap">
    </script>
	<script>
	 if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(function (p) {
        var LatLng = new google.maps.LatLng(p.coords.latitude, p.coords.longitude);
        var mapOptions = {
            center: LatLng,
            zoom: 17,
            mapTypeId: google.maps.MapTypeId.ROADMAP
        };
        var map = new google.maps.Map(document.getElementById("homepg"), mapOptions);
		var image = {
          url: 'http://maps.google.com/mapfiles/ms/icons/blue-dot.png', 
          size: new google.maps.Size(27, 45),
          origin: new google.maps.Point(0, 0), 
          anchor: new google.maps.Point(0, 40),
		  
        };
        var marker = new google.maps.Marker({
            position: LatLng,
            map: map,
            title: "YOUR LOCATION",
			 icon: image
        });
        google.maps.event.addListener(marker, "click", function (e) {
            var infoWindow = new google.maps.InfoWindow();
     
           
        });
    });
} else {
    alert('Geo Location feature is not supported in this browser.');
}
		$(document).ready(function (){
			$(".ser").click(function(){$(".ser-content").slideDown(400);});
			$(".ser").mouseleave(function(){$(".ser-content").slideUp(400);});
		});
		
	  </script>
	</head>
	<body>
		<header>
				<img src="logo.png" alt="HH" />
				<em>-to help you on highway</em>
				<h2><center>HighwayHelp<i>!</i></center></h2><br>
				
		</header>
			<nav>
					<ul>
						<li><div class="emer"><a href="emer.php">Emergency Contacts</a></div></li>
						<li>
								<div class="ser">Services
									<div class="ser-content">
											<a href="mechanic.php">Mechanic</a><br>
											<a href="hospital.php">Hospital</a><br>
											<a href="medicalstore.php">Medical Store</a><br>
											<a href="othertransport.php">Other Transport</a><br>
											<a href="restaurant.php">Restaurant</a><br>
											<a href="cottage.php">Cottages</a><br>
									</div>
								</div>
						</li>
						<li><div class="fa"><a href="fa.php">First Aid</a></div></li>
					</ul>
			</nav> 

			<section>
			<aside>
				<a href="index.php"><p align="center">HOME</p></a>
				<a href="com_index.php"><p align="center">REVIEW US</p></a>
				<a href="abt_us.php"><p align="center">ABOUT US</p></a>
			</aside>
				<article>
					 <div id="homepg"><p></p></div>
				</article>
			</section>
			<footer>	
			Terms & Conditions &nbsp;&nbsp;|&nbsp;&nbsp;Privacy Policy&nbsp;&nbsp;|&nbsp;&nbsp;Refund & Cancellation Policy<br>
			&copy;copyrights 2017,HighwayHelp!&nbsp;&nbsp;|&nbsp;&nbsp;All rights reserved
			</footer>
	</body>
</html>