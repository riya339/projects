<html>
<head>
<title> Delete Data</title>
</head>
<body>
<center>
<h1> Delete Data From DataBase using PHP Mysql </h1>
<form action="" method="POST">
<input type="text" name="coursename" placeholder="Enter Course" />
<input type="submit" name="delete" value="Delete Data"/>
</form>
</center>
</body>
</html>

<?php
$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection, 'test');
if(isset($_POST['delete']))
{
$coursename = $_POST['coursename'];

$query= "DELETE * FROM addcourse LEFT JOIN upload ON addcourse.coursename= upload.coursename WHERE coursename='$coursename'";
$query_run =mysqli_query($connection,$query);

if($query_run)
{
echo '<script type="text/javascript"> alert("Data Delete") </script>';
}
else
{ 
echo '<script type="text/javascript"> alert("Data Not Delete") </script>';

}

}
?>
