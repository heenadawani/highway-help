<!DOCTYPE html>
<html>
	<head>
		<title>HighwayHelp</title>
		<link rel="stylesheet" href="main.css" />
		<style>
		section{
				height:600px;
			}
			article p{color:black;
			padding:2%;}
			table{
				float:left;
				margin:5% 5%;
			border-collapse: collapse;
			text-align: center;
			}
			th{
				background:  	#808080
			}
			th,tr,td{
				text-align: center;
			}

			tr:nth-child(odd){
				background: #d4d7db;
			}
			.normal th,td,tr{
				padding: 10px;
			}
			
			.all th,td{
				padding: 10px;
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
				<a href="index.php"><img src="logo.png" alt="HH"  /></a>
				<em>-to help you on highway</em>
				<h2><center>HighwayHelp<i>!</i></center></h2><br>
				<input type="button" value="Track ME!" id="track">
		</header>
			<nav>
				<ul>
					<li><div class="emer">Emergency Contacts</div></li>
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
			
				
				<table class="all"border="1">
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
						<td>Cops for help-in 3 to 7min</td>
						<td>103</td>
					</tr>

				</table>
				
				
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
				
					</p></div>
				</article>
			</section>
			<footer>	
			&copy;copyrights AARTI BHAGTANI&nbsp;&nbsp;&nbsp;BHAVIKA ADNANI&nbsp;&nbsp;&nbsp;HEENA DAWANI&nbsp;&nbsp;&nbsp;SIMRAN BHOJWANI
			</footer>
	</body>
</html>