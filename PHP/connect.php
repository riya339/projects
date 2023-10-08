<?php
$servername="localhost8080";
$username="root";
$password="";
$database_name="register";
 

 //Database connection
 $conn = mysqli_connect($servername,$username,$password,$database_name);

 if(!$conn)
 {
	 die("Connection Failed : ". mysqli_connect_error());
 } 
 if(isset($_POST['submit'])) {
	 $firstname=$_POST['firstname'];
	 $lastname=$_POST['lastname'];
	 $gender=$_POST['gender'];
	 $Program=$_POST['Program'];
	 $courses=$_POST['courses'];
	 $age=$_POST['age'];
	 $pword=$_POST['password'];
	 $cpassword=$_POST['cpassword'];
	 $email=$_POST['email'];

	 $sql_query="INSERT INTO registeration(firstname,lastname,gender,age,Program,courses,pword,cpassword,email)
	 VALUES ('$firstname,$lastname,$gender,$age,$Program,$courses,$pword,$cpassword,$email')";

	 if (mysqli_query($conn, $sql_query))
	 {
		 echo"New details Entery inserted";
	 }
	 else
	 {
		 echo"Error: ". $sql ."". mysqli_error($conn);
	 }
	 mysqli_close($conn);
?>