<?php session_start();?>
<!DOCTYPE html>
<html>
<head>
	<title>Taxi</title>
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500" rel="stylesheet"/>
	<link rel = "stylesheet" type = "text/css" href = "signup.css" />
<head>
<body>
<?php if( isset($_SESSION['name'])) {
	?>
	<div class="head">Hi <?php echo $_SESSION['name'];?> <a href="logout.php">Logout</a></div>
	<?php
}


