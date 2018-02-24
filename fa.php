<!DOCTYPE html>
<html>
	<head>
		<title>HighwayHelp</title>
		<link rel="stylesheet" href="main.css" />
		<style>
			section{
				height:1000px;
			}
			section article
			{
				margin-left:10%;
				float:left;
			}
			section article p
			{
				border: 1px solid white;
				border-radius:8%;
				background-color:white;
				font-size:20px;
				text-align:left;
				color:#5e646d;
				padding:15px ;
				opacity:0.5;
				line-height:25px;
			}
			
			
		</style>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js" ></script>
		<script>
		$(document).ready(function (){
			$(".ser").click(function(){$(".ser-content").slideDown(400);});
			$(".ser").mouseleave(function(){$(".ser-content").slideUp(400);});
			$("#frac").mouseover(function(){$("#frac").css("color","red");});
			$("#frac").mouseleave(function(){$("#frac").css("color","#5e646d");});
			$("#uncon").mouseover(function(){$("#uncon").css("color","red");});
			$("#uncon").mouseleave(function(){$("#uncon").css("color","#5e646d");});
			$("#bp").mouseover(function(){$("#bp").css("color","red");});
			$("#bp").mouseleave(function(){$("#bp").css("color","#5e646d");});
			$("#blee").mouseover(function(){$("#blee").css("color","red");});
			$("#blee").mouseleave(function(){$("#blee").css("color","#5e646d");});
			$("#ha").mouseover(function(){$("#ha").css("color","red");});
			$("#ha").mouseleave(function(){$("#ha").css("color","#5e646d");});
			
		});
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
			
				<article>
					
					<h2>Fracture</h2>
					<p id="frac">
						Don't move the person except if necessary to avoid further injury. <br>
						Apply pressure to the wound with a sterile bandage, a clean cloth or a clean piece of clothing.<br>
						Do not attempt to force a fracture or dislocation back into place,this could cause further injuries.<br>
						Support the injured body part to stop it from moving.( Apply a splint to support the limb)<br>
						Stop the person from eating or drinking anything.
					</p>
					<h2 >Unconcious</h2>
					<p id="uncon">
						Keep the person warm until medical help arrives.<br>
						Lay the person flat on the floor and raise their feet about 30 cm.<br>
						IF LOW BLOOD PRESSURE--give the person something sweet to eat or drink<br>
						IF CHOCKING-- Begin CPR. Chest compressions may help dislodge the object.<br>
						<strong>Do NOT</strong> slap an unconscious person's face or splash water on their face to try to revive them.<br>

					</p>
					<h2>Head Injury</h2>
					<p id="ha">
					Stop any bleeding by firmly pressing a clean cloth on the wound. <br>
					If you suspect a skull fracture, do not apply direct pressure to the bleeding site.<br>
					<strong>Do NOT</strong> wash a head wound that is deep or bleeding a lot.<br>
					<strong>Do NOT</strong>remove any object sticking out of a wound.<br>
					<strong>Do NOT</strong> remove any debris from the wound. <br>
					<strong>Do NOT</strong> shake the person if he or she seems dazed.
					</p>
					<h2>Breathing Problem</h2>
					<p id="bp">
							Loosen any tight clothing.<br>
							Help the person use any prescribed medicine (an asthma inhaler )<br>
							Continue to monitor the person's breathing and pulse until medical help arrives.<br>
							If there are open wounds in the neck or chest, they must be closed immediately, <br>
							especially if air bubbles appear in the wound. Bandage such wounds at once.

					</p>
					<h2>Bleeding</h2>
					<p id="blee">
					Remove any obvious dirt or debris from the wound. <br>
					 <strong>Do NOT</strong>remove large or deeply embedded objects. <br>
					 Stop the bleeding<br>
					 Help the injured person lie down, preferably on a rug or blanket to prevent loss of body heat. <br>
					 Immobilize the injured body part once the bleeding has stopped. <br>
					
					</p>
				</article>
			</section>
			<footer>	
			Terms & Conditions &nbsp;&nbsp;|&nbsp;&nbsp;Privacy Policy&nbsp;&nbsp;|&nbsp;&nbsp;Refund & Cancellation Policy<br>
			&copy;copyrights 2017,HighwayHelp!&nbsp;&nbsp;|&nbsp;&nbsp;All rights reserved
			</footer>
	</body>
</html>