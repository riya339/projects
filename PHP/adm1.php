<?php
// connect to the database
session_start();
$conn = mysqli_connect('localhost', 'root', '', 'test');

// Uploads files
if (isset($_POST['submit'])) 
    // name of the uploaded file
    $coursename = $_POST['coursename'];
    $duration = $_POST['duration'];
    $myfile = $_FILES['myfile'];
    


    $filename=$myfile['name'];
    $filepath = $myfile['tmp_name'];
    $filesize = $myfile["size"];
    $fileerror = $myfile['error'];

    if($fileerror == 0){
        $maxsize = 10 * 1024 * 1024;
        if($filesize > $maxsize) 
        $_SESSION['status']= "Error: File size is larger than the allowed limit.";
        header('location: admin.php');
        
        $destfile = 'upload/'. $filename;
        move_uploaded_file($filepath, $destfile);

        $sql = "INSERT INTO upload (coursename, duration, myfile) VALUES ('$coursename', '$duration', '$destfile')";

        $query= mysqli_query($conn, $sql);

        if ($query) {
            
            $_SESSION['status']= "File uploaded successfully";
            header('location: admin.php');
            
        }
        else if(file_exists($destfile))
        {
            $_SESSION['status']= "Failed to upload file. COURSE already exist";
            header('location: admin.php');
        }
       
        else {
           
            $_SESSION['status']= "Failed to upload file.";
            header('location: admin.php');
        }
    }  
   else{
      echo "No button pressed";

   }

    