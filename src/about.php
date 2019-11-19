<?php /*
	require('config/config.php');
	require('config/db.php');
	if(isset($_POST['submit'])){
		//Get form data
		$id = mysqli_real_escape_string($conn,$_GET['roomno']);

	}
	
	
	//create query
	$query = 'SELECT * FROM customers database WHERE id ='.$id;

	//get result
	$result = mysqli_query($conn,$query);

	//fetch data
	$posts = mysqli_fetch_assoc($result);
	var_dump($posts);
	//free result


	mysqli_free_result($result);

	//close connection
	mysqli_close($conn); */
 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width">
	<meta name="description" content="Affordable and easy conference room booking system">
	<meta name="keywords" content="conference,conference booking,meeting rooms, book meetings room">
	<meta name="author" content="Lakshya Gupta">
	<title> Welcome to About</title>
	<link rel="stylesheet" type="text/css" href="./css/style.css">
</head>
<body>
	<header>
		<div class="container">
			<div id="branding">
				<h1><span class="highlight">Conference</span> Management System</h1>
			</div>
			<nav>
				<ul>
					<li>
						<a href="index.php"> Home</a>
					</li>
					<li>
						<a href="booking.php">Book Rooms</a>
					</li>
					<li class="current">
						<a href="about.php">About</a>
					</li>
					<li>
						<a href="login.php">Log In</a>
					</li>
				</ul>
			</nav>
		</div>
	</header>


	<section id="newsletter">
		<div class="container">
			<h1>
				Get Room Details
			</h1>
			<form>
				<input type="search" placeholder="Enter Room number..." name="q">
				<button class="button-1" type="submit">
					Submit
				</button>
			</form>
		</div>
	</section>

	<section id="main">
		<div class="container">
			<article id="main-col">
				<h1 class="page-title"> About Us</h1>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
				<br>
				<p class="dark">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
			</article>

			<aside id="sidebar">
				<div class="dark">
					<h3>What We Do</h3>
					<p>
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						consequat.
					</p>
				</div>
			</aside>
		</div>
	</section>

	<footer>
		<p>Conference Room Booking and Management, Copyright &copy; 2019 </p>
	</footer>
</body>
</html>