<?php
session_start();
$con = mysqli_connect('localhost','root','','test');

if(!$con){
    die("Error: Failed to connect to database!");
    
} 

if(isset($_POST['delete']))
{
    $coursename = $_POST['coursename'];

     $query= "DELETE * FROM addcourse LEFT JOIN upload ON addcourse.coursename= upload.coursename WHERE coursename='$coursename'";
     $result =mysqli_query($con,$query);
    //$query = "DELETE * FROM ad6dcourse WHERE coursename='$coursename'";
    //$result =mysqli_query($con,$query);
    
    


    if($result)
    {
        $_SESSION['status'] = "Course has been Deleted Successfully";
        header("location: admin.php");
    }
    else
    {
        $_SESSION['status'] = "Course Not Deleted";
        header("location: admin.php");
    }
}


/*$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
   
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    
    $sql = "DELETE FROM addcourse WHERE coursename='" . $_GET["coursename"] . "'";

    
    $conn->exec($sql);
    echo "Record deleted successfully";
    }
catch(PDOException $e)
    {
    echo $sql . "
" . $e->getMessage();
    }

$conn = null;*/
?>
