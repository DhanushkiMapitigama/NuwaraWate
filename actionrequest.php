<?php
include 'header.php';

	require "database.php";

	if (isset($_POST['date'])){		
		$date=$_POST['date'];
	}
	if (isset($_POST['vehicle_id'])){		
		$vehicle_id=$_POST['vehicle_id'];
	}
	if (isset($_POST['pickup'])){		
		$pickup=$_POST['pickup'];
	}
	if (isset($_POST['destination'])){		
		$destination=$_POST['destination'];
	}
	if (isset($_SESSION['id'])){		
		$rider_id=$_SESSION['id'];
	}
	 
		$theQuery = "INSERT INTO rides(rider_id,vehicle_id,date,pickup,destination) VALUES('$rider_id','$vehicle_id','$date','$pickup','$destination')";
		
		if (mysqli_query($connect, $theQuery)) {
		    echo "New request added successfully!";
		} else {
		    echo "Error: " . $theQuery . "<br>" . mysqli_error($connect);
		}
		

include 'footer.php';
	?>