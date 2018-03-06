<?php include 'header.php';?>
	 <form action="actionlogin.php" method="post">
	 	<div class="imgcontainer">
			<img src="images/logo.png" alt="Avatar" width="200">
		</div>

		<div class="container">
			<label>NIC</label>
			<input type="text" placeholder="Enter NIC" name="nic" required>
			<br>
			<label>Password</label>
			<input type="password" placeholder="Enter Password" name="psw" required>
			<br>
			<?php
			if(isset($_GET['error'])){
				echo "Invalid username or password!";
			}
			?>
			<button type="submit" class="signupbtn">Login</button>	

			<a href="signup.php">Don't have an accoount? Sign Up!</a>
		</div>
	</form> 
<?php include 'footer.php';?>