<?php
include('conn.php');
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
if(!$conn)
 {
	 die("Connection Failed : ". mysqli_connect_error());
 } 
else{  
if (isset($_GET['file_coursename'])) {
    //echo "Hello World";
    $coursename = $_GET['file_coursename'];
    //echo "Hello world";
    // fetch file to download from database
    $sql = "SELECT * FROM uploadstudy WHERE coursename= '$coursename'";
    //echo $sql;
    $result = mysqli_query($conn, $sql);
    //echo "Hello World";
    //$result=$conn->query($sql);
    $file = mysqli_fetch_assoc($result);
    //$file = mysqli_fetch_all($result, MYSQLI_ASSOC);
    //echo 'Hello World';

    //$file = $result -> fetch_assoc();
    $filepath =   $file['myfile'];

    //echo "$filepath";

    if (file_exists($filepath)) {
        header('Content-Description: File Transfer');
        //header('Cache-Control: public')
        header('Content-Type: application/pdf');
        echo $filepath;
        header('Content-Disposition:attachment; filename="downloaded.pdf"');
        header('Expires: 0');
        header('Cache-Control: must-revalidate');
        header('Pragma: public');
        header('Content-Length: ' . filesize($file['myfile']));
        readfile($file['myfile']);

        // Now update downloads count
        $newCount = $file['downloads'] + 1;
        $updateQuery = "UPDATE uploadstudy SET downloads=$newCount WHERE coursename=$coursename";
        mysqli_query($conn, $updateQuery);
        exit;
    }

}}
?>