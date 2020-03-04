<?php

session_start();
if(!isset($_SESSION['username'])){
header('location:login.php');
}

//$con = mysqli_connect('localhost','root');

//mysqli_select_db($con, 'quizdbase');

?>


<!DOCTYPE html>
<html lang="en-US">
<head>
	<title> WikiAndBio-Number 1 Biography Website in World</title>
	<link rel="stylesheet" type="text/css" href="mystyle.css">
 	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

</head>



<body>
	<header class="headerpart1">
		<nav>
			 <ul id="ul1">
				<li><a class="about_us" href="about_us.php">ABOUT US</a></li>
				<li><a class="advertise" href="advertise.php">ADVERTISE</a></li>
				<li><a class="career_with_us" href="career_with_us.php">CAREER WITH US</a></li>
				<li><a class="submit_your_bio" href="submit_your_bio.php">SUBMIT YOUR WIKIANDBIO</a></li>
				<li><a class="logout" href="logout.php">LOGOUT</a></li>
			</ul>
		</nav>
	</header>
	
	<div class="divider"><span style="color: blue">Wiki</span><span style="color: black;">and</span><span style="color: red;">Bio</span></div>
	
	<header class="headerpart2">
		<nav>
			<ul id="ul2">
				<li><a class="home" href="home.php">HOME</a></li>
				<li><a class="film" href="film.php">FILM</a></li>
				<li><a class="television" href="television.php">TELEVISION</a></li>
				<li><a class="bigboss" href="bigboss.php">BIGBOSS</a></li>
				<li><a class="businessman" href="businessman.php">BUSINESSMAN</a></li>
				<li><a class="sports" href="sports.php"> SPORTS</a></li>
				<li><a class="politician" href="politician.php">POLITICIAN</a></li>
				<li><a class="singer" href="singer.php">SINGER</a></li>
				<li><a class="model" href="model.php">MODEL</a></li>
				<li><a class="others" href="others.php">OTHERS</a></li>
			</ul>
		</nav>
	</header>

</body>
</html>