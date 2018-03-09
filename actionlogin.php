<html>
<head>
	<title>Log in</title>
	<style type="text/css">
	</style>	
</head>
<body>
	<?php
		session_start();
		if (isset($_POST['nic'])){		
			$nic=$_POST['nic'];
		}
		if (isset($_POST['psw'])){		
			$psw=$_POST['psw'];
		}
		$nic=$_POST['nic'];
		$psw=$_POST['psw'];

		require 'database.php';
		if(isset($_POST["nic"], $_POST["psw"])) 
		    {     

		        $sql = "SELECT * FROM user WHERE nic = '".$nic."' AND  password = '".$psw."'";
		        $result1 = mysqli_query($connect,$sql);

		        if(mysqli_num_rows($result1) > 0 )
		        { 
		        	  while($row = $result1->fetch_assoc()) {
		        	  $_SESSION["id"] = $row['id'];
		        	  $_SESSION["name"] = $row['name'];
		        	  }
		            $_SESSION["logged_in"] = true;  
		            $_SESSION["nic"] = $nic; 
		           header("Location: request.php");
		        }
		        else
		        {
		            header('Location: login.php?error=notmatch');
		        }
		}
	   
	   mysqli_close($connect);

	?>
</body>
</html>