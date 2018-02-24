<?php
	require('connect.php');
	$name = isset($_GET['name']) ? $_GET['name'] : '';
	//$name=$_GET['name'];
	$comment = isset($_GET['comment']) ? $_GET['comment'] : '';
	$submit= isset($_GET['submit']) ? $_GET['submit'] : '';
	
	
	if($submit)
	{
		if($name && $comment)
		{
			$insert=mysql_query("INSERT INTO comment(name,comment) VALUES ('$name','$comment')");
			header("location:success.php");
		}
		else
		{
			echo "please fillout the details!";
		}
	}
	
	
	
	
?>
<!doctype html>
<html>
<head>
	<title>Comments</title>
	<link rel="stylesheet" href="main.css" />
	<style>
	#delete a{color:blue;
	text-decoration:none;
	margin:0 5%;}
	#text{
		margin:1px 0;
		background:#fff;
		padding:5px;
	}
	section{
		height:500px;
		width:70%;
		margin:0 auto;
	}
	section form {
		float:left;
		width:30%;
		margin:2%;
		border-right:1px solid #151515;}
	#commentbox {
		border:1px solid lightgrey;
		width:54%;
		margin:2%;
		float : left;
		height:450px;
		overflow:auto;
		
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
		<form action="com_index.php" method="get">
		
		<table>
			<tr>
				<td>Name:</td>
				<td><input type=" text" name="name"/></td>
			</tr>
			<tr>
				<td colspan="2">Comment:</td>
			</tr>
			<tr>
				<td colspan="2"><textarea name="comment"></textarea></td>
			</tr>
			<tr>
				<td colspan="2"><input type="submit" name="submit"value="Comment"/></td>
			</tr>
		
		</table>
		</form>
	
<?php
$getquery=mysql_query("SELECT * FROM comment ORDER BY id DESC");
echo "<div id=commentbox>";
while($rows=mysql_fetch_array($getquery))
{
	$id=$rows['id'];
	$name=$rows['name'];
	$comment=$rows['comment'];
	$dellink="<a href= 	\"delete.php?id=" .$id."\">Delete</a>";
	
	echo "<strong>".$name."</strong>".'<br/>'."<div id='text'>".$comment."</div>"."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"."<div id='delete'>".$dellink."</div>".'<br/>'.'<hr widht="500px">';
	
																														
}
echo "</div>";


?>
</section>
	<footer>	
			Terms & Conditions &nbsp;&nbsp;|&nbsp;&nbsp;Privacy Policy&nbsp;&nbsp;|&nbsp;&nbsp;Refund & Cancellation Policy<br>
			&copy;copyrights 2017,HighwayHelp!&nbsp;&nbsp;|&nbsp;&nbsp;All rights reserved
			</footer>
</body>
</html>