<?php

	$emailid = 'your email id';
	$emailpwd = 'your email password';
	$rcvemail = 'receiver email';

   class MyDB extends SQLite3
   {
      function __construct()
      {
         $this->open('test.db');
      }
   }
   $db = new MyDB();
   if(!$db){
      echo $db->lastErrorMsg();
   } else {
      echo "Opened database successfully\n";
   }

   	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\SMTP;
	use PHPMailer\PHPMailer\Exception;

	// Load Composer's autoloader
	if (array_key_exists('name', $_POST)) {
		require 'vendor/autoload.php';

		// Instantiation and passing `true` enables exceptions


	    $mail = new PHPMailer(true);

	    try {
	    //Server settings
	    $mail->SMTPOptions = array(
		'ssl' => array(
		'verify_peer' => false,
		'verify_peer_name' => false,
		'allow_self_signed' => true) );
	    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      
	    $mail->isSMTP();                                            
	    $mail->Host       = 'smtp.gmail.com';                    
	    $mail->SMTPAuth   = true;
	    $mail->SMTPSecure = "tsl";  
		$mail->SMTPDebug = 2;                                   
	    $mail->Username   = $emailid;                     
	    $mail->Password   = $emailpwd;                            
	    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         
	    $mail->Port       = 587;                                    
	    $mail->setFrom($emailid, 'Mailer');
	    $mail->addAddress( $rcvemail, 'Joe User');     

	    // Content
	    $mail->isHTML(true);                                  
	    $mail->Subject = 'The Following Room is Booked!';
	    $mail->Body    = <<<EOT
			NAME: {$_POST['name']}
			ROOM NO: {$_POST['room']}
			DATE: {$_POST['date']}
			CONTACT: {$_POST['email']}
		EOT;
	  //  $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

	    $mail->send();
	    echo 'Message has been sent';
	} catch (Exception $e) {
	    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
	}
}


  
 
 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width">
	<meta name="description" content="Affordable and easy conference room booking system">
	<meta name="keywords" content="conference,conference booking,meeting rooms, book meetings room">
	<meta name="author" content="Lakshya Gupta">
	<title> Welcome to Booking Portal</title>
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
					<li class="current">
						<a href="booking.php">Book Rooms</a>
					</li>
					<li>
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
				<h1 class="page-title"> Book Rooms</h1>
				<form class="rooms" action="" method="POST" enctype="multipart/form-data">
					<div class="form-group">
						<label>Enter Full Name</label>
						<input class="form-input"  type="text" name="name" placeholder="Enter Full Name...">
					</div>
					<br>
					<div class="form-group">
						<label>Enter Email ID</label>
						<input class="form-input"  type="text" name="email" placeholder="Enter Email ID...">
					</div>
					<br>
					<div class="form-group">
						<label>Enter Date</label>
						<input class="form-input" type="text" name="date" placeholder="Enter Date..">
					</div>
					<br>
					<div>
						<label>Enter Room Number</label>
						<input class="form-input" type="number" name="room" placeholder="Enter Room No.">
					</div>
					<br>
					<div>
						<br>
						<button class="button-1" type="submit">Submit
						</button>
					</div>
				</form>
			</article>

			<aside id="sidebar">
				<div class="dark">
					<h3>ADVERT</h3>
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

<?php 

    $email=$_REQUEST['email']; 
    $date=$_REQUEST['date']; 
    $room=$_REQUEST['room'];
    $name=$_REQUEST['name']; 
	$sql1 = <<<EOF
   		SELECT * from BOOKING;
EOF;

	$ret1 = $db->query($sql1);
   while($row = $ret1->fetchArray(SQLITE3_ASSOC) ){
      echo "<br>";
      if($row['ROOM'] == $room){
      	$num = 1;
      }
      else {
      	$num = 0;
      }

   }
   if($num == 0){
   	$sql =<<<EOF
      INSERT INTO BOOKING (FULL,EMAIL,DATE,ROOM)
      VALUES ('$name', '$email', '$date', '$room');
EOF;
   $ret = $db->exec($sql);
   if(!$ret){
    echo $db->lastErrorMsg();
   	} else {
     echo "Records created successfully\n";
   	}
   }
   else {
   	echo "Please Choose Another Room!!!";
   } 

   $db->close();
?>