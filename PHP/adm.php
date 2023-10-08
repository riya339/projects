<?php
// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');
session_start();
$con = mysqli_connect('localhost', 'root', '','test');

// get the post records
$coursename = $_POST['coursename'];
$faculty = $_POST['faculty'];


// database insert SQL code
$sql = "INSERT INTO addcourse (`coursename`, `faculty`) VALUES ('$coursename', '$faculty')";

// insert in database 
$rs = mysqli_query($con, $sql);

if($rs)
{
	$_SESSION['status']= "Course Inserted Successfully";
   header('location: admin.php');
}

?>