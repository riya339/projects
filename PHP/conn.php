<?php
	$conn = mysqli_connect('localhost', 'root', '', 'test');
 
	if(!$conn){
		die("Error: Failed to connect to database!");
	}
?>