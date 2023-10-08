<?php

/* connect to the database
$conn = mysqli_connect('localhost', 'root', '', 'test');

// Uploads files
if (isset($_POST['submit'])) { // if save button on the form is clicked
    // name of the uploaded file
    $filename = $_FILES['myfile']['name'];

    // destination of the file on the server
    $destination = 'uploads/' . $filename;

    // get the file extension
    $extension = pathinfo($filename, PATHINFO_EXTENSION);
    $coursename = $_POST['coursename'];
    // the physical file on a temporary uploads directory on the server
    $file = $_FILES['myfile']['tmp_name'];
    $size = $_FILES['myfile']['size'];
    $downloads = $_POST['downloads'];

    if (!in_array($extension, ['zip', 'pdf', 'docx', 'ppt'])) {
        echo "You file extension must be .zip, .pdf, .ppt or .docx";
    } elseif ($_FILES['myfile']['size'] > 1000000) { // file shouldn't be larger than 1Megabyte
        echo "File too large!";
    } else {
        // move the uploaded (temporary) file to the specified destination
        if (move_uploaded_file($file, $destination)) {
            $sql = "INSERT INTO files (couresname, size, downloads) VALUES ('$filename', $size, 0)";
            if (mysqli_query($conn, $sql)) {
                echo "File uploaded successfully";
            }
        } else {
            echo "Failed to upload file.";
        }
    }
}*/
//connect to the database
session_start();
$conn = mysqli_connect('localhost', 'root', '', 'test');
$sql = "SELECT * FROM uploadstudy";
$result = mysqli_query($conn, $sql);

$files = mysqli_fetch_all($result, MYSQLI_ASSOC);

// Uploads files
if (isset($_POST['submit'])) 
    // name of the uploaded file
    $coursename = $_POST['coursename'];
    $myfile = $_FILES['myfile'];
    $downloads = $_POST['downloads'];
    

    $filename=$myfile['name'];
    $filepath = $myfile['tmp_name'];
    $fileerror = $myfile['error'];

    if($fileerror == 0){
        $destfile = 'study/'. $filename;
        move_uploaded_file($filepath, $destfile);

        $sql = "INSERT INTO uploadstudy (coursename, myfile) VALUES ('$coursename', '$destfile')";

        $query= mysqli_query($conn, $sql);

        if ($query) {
            
            $_SESSION['status']= "File uploaded successfully";
            header('location: admin.php');
            
        }
        else if(file_exists($destfile))
        {
            $_SESSION['status']= "Failed to upload file. already exist";
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

?>    