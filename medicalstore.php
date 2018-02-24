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
      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
      
      /* Optional: Makes the sample page fill the window. */
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
      table {
        font-size: 12px;
      }
	 
      #homepg {
         height:300px;
			margin:3% auto;
			
			width:75%;
			border:2px double black;
				border-radius:3px;}
				
	  #detail{
	  font-size:15px;
	  padding-top:0px;
	  }
	  #homepg img{
			position :absolute;
			height:200px;
			width:200px;
			z-index:2;
			}
		#listing {
        position: absolute;
        width: 200px;
        height: 470px;
        overflow: auto;
        left: 442px;
        top: 0px;
        cursor: pointer;
        overflow-x: hidden;
      }
      .placeIcon {
        width: 20px;
        height: 34px;
        margin: 4px;
      }
      .hotelIcon {
        width: 24px;
        height: 24px;
      }
      #resultsTable {
        border-collapse: collapse;
        width: 240px;
      }
      #rating {
        font-size: 13px;
        font-family: Arial Unicode MS;
      }
      .iw_table_row {
        height: 18px;
      }
      .iw_attribute_name {
        font-weight: bold;
        text-align: right;
      }
      .iw_table_icon {
        text-align: right;
      }
	  #p
	  {
		  font-size:22px;
	  }
		</style>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js" ></script>
	
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js" ></script>
		<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCCv9zAPIGYcVM4Tzgzm173Lhsvh0TPpDA&callback=initMap">
    </script>
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCCv9zAPIGYcVM4Tzgzm173Lhsvh0TPpDA&libraries=places&callback=initMap" async defer></script>
	 
	<script>
		$(document).ready(function (){
			$(".ser").click(function(){$(".ser-content").slideDown(400);});
			$(".ser").mouseleave(function(){$(".ser-content").slideUp(400);});
		});
		  var marker, i;
		function initMap() {
        var map = new google.maps.Map(document.getElementById('homepg'), {
          center: {lat: -34.397, lng: 150.644},
          zoom: 15
        });
        var infoWindow = new google.maps.InfoWindow({map: map});
		var service = new google.maps.places.PlacesService(map);
     
        if (navigator.geolocation) {
          navigator.geolocation.getCurrentPosition(function(position) {
            var pos = {
              lat: position.coords.latitude,
              lng: position.coords.longitude
            };
			var image = {
          url: 'http://maps.google.com/mapfiles/ms/icons/blue-dot.png', 
          size: new google.maps.Size(27, 45),
          origin: new google.maps.Point(0, 0), 
          anchor: new google.maps.Point(0, 40),
		  
        };
			marker = new google.maps.Marker({
            position: pos,
            map: map,
			title:"YOUR LOCATION",
            icon: image
          });
            
			for (var location in pos) {
          // Add the circle for this city to the map.
          var cityCircle = new google.maps.Circle({
            strokeColor: '#FF0000',
            strokeOpacity: 0.8,
            strokeWeight: 1,
            fillColor: '#FF0000',
            fillOpacity: 0.1,
            map: map,
            center: pos,
            radius:1000
          });
        }
			
            map.setCenter(pos);
			service.nearbySearch({
          location: pos,
          radius: 1000,
          type: ['pharmacy'],
		  
		  
        }, callback);
          }, function() {
            handleLocationError(true, infoWindow, map.getCenter());
          });
		  
		  
      function callback(results, status) {
        if (status === google.maps.places.PlacesServiceStatus.OK) {
          //Google has setup a restriction of maximum 10 queries per second so, I used a timeout function which queries 1 query per 110ms
          for (var i = 0; i < results.length; i++) {
            //Used the getDetails function of service object as it provides more details
            setTimeout((result)=>{
              service.getDetails({
                placeId: result.place_id
              }, function(place, status){
                console.log(status);
                createMarker(place);
              })
            }, i*110, results[i]);


          }
        }
      }

	  var hotel = {
          url: 'http://maps.google.com/mapfiles/ms/icons/pharmacy.png', 
          size: new google.maps.Size(27, 45),
          origin: new google.maps.Point(0, 0), 
          anchor: new google.maps.Point(0, 40)
        };
		
      function createMarker(place) {
        var marker = new google.maps.Marker({
          map: map,
		      //animation: google.maps.Animation.DROP,
          position: place.geometry.location,
		  icon: hotel

        });

        google.maps.event.addListener(marker, 'click', function() {
          //Displays apt message if the property is not defined
          infoWindow.setContent(`<span style="padding: 0px;" text-align:left align="center"><h3> ${place.name}  </h3><p id="detail">Rating: ${place.rating?place.rating:"No rating"} <br/>
        Timing: ${place.opening_hours?(place.opening_hours.open_now?"Open now":"Not open"):"No info about timings"} <br/>Website: ${place.website?place.website:"No website"} <br/>Contact: ${place.formatted_phone_number?place.formatted_phone_number:"No phone number"}<br/>Address: ${place.formatted_address?place.formatted_address:"No address"}`);
          
	
		 infoWindow.open(map,this);
        });
      }
        } 
	
        
      }
		
    </script>
	</head>
	<body>
		<header>
				<a href="index.php"><img src="logo.png" alt="HH"  /></a>
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
			<br>
			<p align="center" id="p">Services&nbsp;&nbsp;> Medical store</p>
			<br>
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