<!DOCTYPE html>
<html>
	<head>
		<title>Emergency Contacts</title>
		<link rel="stylesheet" href="main.css" />
		<style>
		section{height:550px;}
		section p {margin:0;
		padding:5%;}
			article{
				font-family: Verdana;
			}
			table{
				border-collapse: collapse;
				text-align: center;
				float:left;
				margin:10px 25px;
			}
			th{
				background: #bdbdbd;
			}
			th,tr,td{
				text-align: center;
			}

			tr:nth-child(odd){
				background: #e0e0e0;
			}
			.normal th,td,tr{
				padding: 10px;
			}
			
			.all th,td{
				padding: 10px;
			}
			#contacts{clear:both;}
	
			#contacts p{
				display: none;
			}
			#contacts p{
				padding: 1% 3%;
				border-bottom: 2px solid linen;
				width:50%;
				border-radius: 10%;
				border-color: #3d3d3d;
			}
			button{
				padding: 0.5%;
				background: #e0e0e0;
				border-radius: 2px;
				font-size: 105%;
			}
			article p{
				color: black;
				text-align: left;
			}	
		</style>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js" ></script>
		<script>
		$(document).ready(function (){
			$(".ser").click(function(){$(".ser-content").slideDown(400);});
			$(".ser").mouseleave(function(){$(".ser-content").slideUp(400);});
			$("#goal").mouseover(function(){$("#goal").css("color","#004466");});
			$("#goal").mouseleave(function(){$("#goal").css("color","black");});
			$("#obj").mouseover(function(){$("#obj").css("color","#004466");});
			$("#obj").mouseleave(function(){$("#obj").css("color","black");});
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
				<input type="button" value="Track ME!" id="track">
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
			
				<p>Toll Free Numbers that can help you on highway</p> 
				<br>
				<table class="normal" border="1">
					<tr>
						<th colspan = "3"> Emergency Contacts Numbers </th>
					</tr>
					<tr>
						<td>1</td>
						<td>Police</td>
						<td>100</td>
					</tr>
					<tr>
						<td>2</td>
						<td>Fire</td>
						<td>101</td>
					</tr>
					<tr>
						<td>3</td>
						<td>Ambulance</td>
						<td>102/108</td>
					</tr>
				</table>
				
				
				<table class="all" border="1">
					<tr>
						<th colspan = "3"> All in one Emergency Contacts </th>
					</tr>
					<tr>
						<td>1</td>
						<td>India's all in one helpline number</td>
						<td>112</td>
					</tr>
					<tr>
						<td>2</td>
						<td>Common for Police, Fire, Ambulance</td>
						<td>112</td>
					</tr>
					<tr>
						<td>3</td>
						<td>Emergency Relief Center on NH’s</td>
						<td>1033</td>
					</tr>
				</table>
			
				
				<table class="all" border="1">
					<tr>
						<th colspan = "3">Women and child safety</th>
					</tr>
					<tr>
						<td>1</td>
						<td>Women crisis response</td>
						<td>1091</td>
					</tr>
					<tr>
						<td>2</td>
						<td>Helpline for women</td>
						<td>181</td>
					</tr>
					<tr>
						<td>3</td>
						<td>Call cops within 3-7 min</td>
						<td>103</td>
					</tr>
				</table>
				
				<br>
				<table class="all" border="1">
					<tr>
						<th colspan = "3"> Medical Emergency </th>
					</tr>
					<tr>
						<td>1</td>
						<td>Dial a doctor</td>
						<td>1911</td>
					</tr>
					
					<tr>
						<td>2</td>
						<td>Blood Requirement</td>
						<td>104</td>
					</tr>
					<tr>
						<td>3</td>
						<td>Blood bank information Service</td>
						<td>1910</td>
					</tr>
				</table>
				
				<div id="contacts">
				
					<br><p "style=clear:both">Other number on highway based on Highway</p> 
					
					<br><button onclick=$("#4").slideToggle()>NH 4</button>
					<br><p id="4">
					Kagal – Nippani ​ 833 826 9887<br><br>

					Nippani – Belgaum ​ 833 327 6644<br><br>

					Belgaum – Kittur 974 323 3070<br><br>

					Chitradurga – Hiriyur ​ 944 984 1610<br><br>
					
					</p>
					
					<br><button onclick=$("#6").slideToggle()>NH8</button>
					<br><p id="6">

					Ghodbhunder-Manor-Charoti-Talasari 18001216000/9925026000<br><br>

					Talasari-Vapi-Surat 18001216000/9925026000<br><br>

					Surat-Bharuch 9427113030<br><br>

					Baroda – Bharuch 997 989 7638<br><br>
					</p>
					
					<br><button onclick=$("#1").slideToggle()>Yamuna Express way</button>
					<br><p id="1">	
					Emergency Helpline : 1800-102-7777
					</p>
					
					
					<br><button onclick=$("#2").slideToggle()>Bhopal Bypass</button>
					<br><p id="2">Emergency Helpline : 0755-2727018</p>
					
					<br><button onclick=$("#3").slideToggle()>Mumbai – Pune Express way</button>
					<br><p id= "3">
					Ghat Section 989 003 6083<br><br>

					Panvel Section 982 249 8224<br><br>

					Pune Section 989 003 6085<br><br>

					Unknown section 989 003 6090<br><br>
					</p>

					<br><button onclick=$("#5").slideToggle()>Mumbai – Dhule</button>
					<br><p id="5">
					Kalyan-Ghoti-Nashik 02553-220001<br><br>

					Nashik-Dhule 02562-239923<br><br>
					</p>
				
					<br><button onclick=$("#7").slideToggle()>Ahmedbad – Baroda expressway</button>
					<br><p id="7">
					
					NE1 987 962 6000<br><br>
					
					Jaipur-Manoharpura – Manesar 930 936 6001 / 0142-2231999<br><br>

					Gurgaon – Delhi expressway 971 789 0100 / 0124-4787809<br><br>
					</p>
					
					<br><button onclick=$("#8").slideToggle()>Ahmedabad – Udaipur</button>
					<br><p id="8">

					Ratanpur – Kherwara, NH8 992 999 2272<br><br>

					Kherwara – Udaipur 992 999 2271<br><br>
					</p>

					<br><button onclick=$("#9").slideToggle()>Udaipur – Jaipur</button>
					<br><p id="9">

					Chittorgarh – Udaipur 992 999 2273<br><br>

					Chittorgarh – Bhilwara 982 979 0100/200<br><br>

					Nasirabad – Bhilwara ​ 800 309 5617 / 978 211 3709<br><br>

					Kishangarh – Jaipur 0141-3257370<br><br>
					</p>
					
					<br><button onclick=$("#10").slideToggle()>Kerala state free-emergency-helpline-number</button>
					<br><p id="10">

					Thiruvananthapuram City 0471-2331843<br><br>

					Thiruvananthapuram Rural 0471-2316995<br><br>

					Kollam 0474-2746000<br><br>

					Pathanamthitta 0468-2222226<br><br>

					Alappuzha 0477-2251166<br><br>

					Kottayam 0481-5550400<br><br>

					Idukki 04862-221100<br><br>

					Ernakulam City 0484-2359200<br><br>

					Ernakulam Rural 0484-2621100<br><br>

					Thrissur 0487-2424193<br><br>

					Palakkad 0491-2522340<br><br>

					Malappuram 0483-2734966<br><br>

					Kozhikode City 0495-2721831<br><br>

					Kozhikode Rural 0496-2523091<br><br>

					Wayanad 04936-205808<br><br>

					Kannur 0497-2763337<br><br>

					Kasargod 04994-222960<br><br>

					Angamaly 0484-2452328<br><br>

					Kerala Highway Police Helpline Numbers (Ernakulam District)

					Angamaly 9946500123/9846100100<br><br>

					Paravoor 9946500124<br><br>

					Moovattupuzha 9946500125<br><br>

					Panagad 9946500126<br><br>

					Devikulam 9946500127<br><br>
					</p><br><br>
				</div>
			</article>
		
			</section>
			<footer>	
			Terms & Conditions &nbsp;&nbsp;|&nbsp;&nbsp;Privacy Policy&nbsp;&nbsp;|&nbsp;&nbsp;Refund & Cancellation Policy<br>
			&copy;copyrights 2017,HighwayHelp!&nbsp;&nbsp;|&nbsp;&nbsp;All rights reserved
			</footer>
	</body>	
</html>