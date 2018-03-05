<?php include 'header.php';?>
	 <form action="actionsignup.php" method="post">
	 	<div class="imgcontainer">
			<img src="images/logo.png" alt="Avatar" width="200">
		</div>

		<div class="container">
			<label>Name</label>
			<input type="text" placeholder="Enter your name" name="uname" required>
			<br>
			<label>NIC</label>
			<input type="text" placeholder="Enter NIC" name="nic" required>
			<br>
			<label>Contact number</label>
			<input type="text" placeholder="Enter Contact number" name="cnumber" required>
			<br>
			<label>Password</label>
			<input type="password" placeholder="Enter Password" name="psw1" required>
			<br>
			<label>Confirm Password</label>
			<input type="password" placeholder="Confirm Password" name="psw2" required>
			<br>
			<button type="submit" class="signupbtn">Sign Up</button>	
		</div>
	</form> 
<?php include 'footer.php';?>