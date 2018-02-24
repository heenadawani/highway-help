<!DOCTYPE html>
<html>
	<head>
		<title>HighwayHelp</title>
		<link rel="stylesheet" href="main.css" />
		<style>			
		body{
 
  
}
section {height:800px;}
section ul{margin-left:15%;}
.goals{
margin-left:10%;
margin-top:3%;
}
.talk-bubble {
	padding:2%;
	margin: 40px;
	font-size:20px;
  display: inline-block;
  position: relative;
	width: 400px;
	height: auto;
	background:#f1f1f1;
	margin-left:30%;
}
.tri-right.border.left-top:before {
	content: ' ';
	position: absolute;
	width: 0;
	height: 0;
  left: -40px;
	right: auto;
  top: -8px;
	bottom: auto;
	border: 32px solid;
	border-color: #666 transparent transparent transparent;
}
.tri-right.left-top:after{
	content: ' ';
	position: absolute;
	width: 0;
	height: 0;
  left: -20px;
	right: auto;
  top: 0px;
	bottom: auto;
	border: 22px solid;
	border-color: #f1f1f1 transparent transparent transparent;
	
}
			
		</style>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js" ></script>
		<script>
		$(document).ready(function (){
			$(".ser").click(function(){$(".ser-content").slideDown(400);});
			$(".ser").mouseleave(function(){$(".ser-content").slideUp(400);});
			
			
		});
		</script>
	</head>
	
	<body>
		<header>
				<a href="index.php">
				<a href="index.php"><img src="logo.png" alt="HH"  /></a>
				</a>
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
				<br>
				<h2 class="goals">Goals</h2>
				<div class="talk-bubble tri-right left-top">
  <div class="talktext">
   <b>&nbsp;&nbsp;Highway Help<em>!</em></b> <br>
						 &nbsp;&nbsp;is an application that provides highway &nbsp;&nbsp;users solutions in emergencies.<br>
  </div>
</div>
				
				
					
		
					<h2 class="goals">Objectives</h2>
					<div class="talk-bubble tri-right left-top">
					<div class="talktext">
					
						<b>&nbsp;&nbsp;Highway Help<em>!</em></b> is one stop &nbsp;&nbsp;destination for all the info regarding &nbsp;&nbsp;necessary services on highway...
						<b>&nbsp;&nbsp;Highway Help<em>!</em></b> provides details of &nbsp;&nbsp;essential services which are a must on &nbsp;&nbsp;any highway
					</div>
					</div>
						<ul>
						<li>Location of available mechanics nearby.</li></br>
						<li>Details of Hospitals nd medical services for accidents or any case of emergency.</li></br>
						<li>Restaurants and cottages for the travellers to take rest nd get charged up to continue 
						  their journey.</li></br>
						<li>Other transport facilities available on their route.</li>
					</p>

			</section>
			<footer>	
			Terms & Conditions &nbsp;&nbsp;|&nbsp;&nbsp;Privacy Policy&nbsp;&nbsp;|&nbsp;&nbsp;Refund & Cancellation Policy<br>
			&copy;copyrights 2017,HighwayHelp!&nbsp;&nbsp;|&nbsp;&nbsp;All rights reserved
			</footer>
	</body>	
</html>