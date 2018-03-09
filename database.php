<?php
	$connect=mysqli_connect('localhost','root','','project');
	 
	if(mysqli_connect_errno($connect))
	{
			echo 'Failed to connect';
	}
	 
