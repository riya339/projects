<?php



// connect to the database
session_start();
$conn = mysqli_connect('localhost', 'root', '', 'test');

$sql = "SELECT * FROM upload1";
$result = mysqli_query($conn, $sql);

$files = mysqli_fetch_all($result, MYSQLI_ASSOC);
// Uploads files
if (isset($_POST['submit'])) { // if save button on the form is clicked
    // name of the uploaded file
    $coursename = $_POST['coursename'];
    $duration = $_POST['duration'];
    $filename = $_FILES['myfile']['name'];

    // destination of the file on the server
    $destination = 'upload/' . $filename;

    // get the file extension
    $extension = pathinfo($filename, PATHINFO_EXTENSION);

    // the physical file on a temporary uploads directory on the server
    $file = $_FILES['myfile']['tmp_name'];
    $size = $_FILES['myfile']['size'];

    if (!in_array($extension, ['zip', 'pdf', 'ppt', 'docx'])) {
        echo "You file extension must be .zip, .pdf , .ppt or .docx";
    } elseif ($_FILES['myfile']['size'] > 10485760) { // file shouldn't be larger than 1Megabyte
        echo "<script>alert('File too large!')</script>";
        header('location: admin.php');
            
    } else {
        // move the uploaded (temporary) file to the specified destination
        if (move_uploaded_file($file, $destination)) {
            $sql = "INSERT INTO upload1 (coursename, duration, name, size, downloads) VALUES ($coursename, $duration, '$filename', $size, 0)";
            if (mysqli_query($conn, $sql)) {
                echo "<script>alert('File uploaded successfully')</script>";
                header('location: admin.php');
            }
        } else if(file_exists($destination))
            echo "<script>alert('Failed to upload file.')</script>";
            header('location: admin.php');
        }
    }

?>