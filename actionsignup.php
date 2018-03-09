<html>
<head>
	<title>Sign Up</title>
	<style type="text/css">
	</style>	
</head>
<body>
	<?php
		require "database.php";
		if (isset($_POST['unname'])){		
			$uname=$_POST['uname'];
		}
		if (isset($_POST['nic'])){		
			$nic=$_POST['nic'];
		}
		if (isset($_POST['cnumber'])){		
			$cnumber=$_POST['cnumber'];
		}
		if (isset($_POST['psw1'])){		
			$psw1=$_POST['psw1'];
		}
		if (isset($_POST['psw2'])){		
			$psw2=$_POST['psw2'];
		}
		
		$uname=$_POST['uname'];
		$nic=$_POST['nic'];
		$cnumber=$_POST['cnumber'];
		$psw1=$_POST['psw1'];
		$psw2=$_POST['psw2'];
		$role= "rider";
		if($psw1 == $psw2){
			$theQuery = "INSERT INTO user(name,nic,contactno,role, password) VALUES('$uname','$nic','$cnumber','$role','$psw1')";
			mysqli_query($connect, $theQuery);
			header("Location: login.php");
		} else{
			echo "<h1>Password didn't match try again!</h1>";
		}	
	?>
</body>
</html>