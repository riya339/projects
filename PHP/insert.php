<?php
session_start();
if (isset($_POST['submit'])) {
    if (isset($_POST['username']) && isset($_POST['email']) &&
        isset($_POST['password']) && isset($_POST['institute'])
        && isset($_POST['course'])) {
         
            
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $institute = $_POST['institute'];
        $course = $_POST['course'];
        
          
        

        $host = "localhost";
        $dbUsername = "root";
        $dbPassword = "";
        $dbName = "test";

        $conn = new mysqli($host, $dbUsername, $dbPassword, $dbName);

        if ($conn->connect_error) {
            die('Could not connect to the database.');
        }
        else {
            $Select = "SELECT email FROM register WHERE email = ? LIMIT 1";
            $Insert = "INSERT INTO register(username, email, password, institute, course) values(?, ?, ?, ?, ?)";

            $stmt = $conn->prepare($Select);
            $stmt->bind_param("s", $email);
            $stmt->execute();
            $stmt->bind_result($resultEmail);
            $stmt->store_result();
            $stmt->fetch();
            $rnum = $stmt->num_rows;

            if ($rnum == 0) {
                $stmt->close();

                $stmt = $conn->prepare($Insert);
                $stmt->bind_param("sssss",$username,  $email, $password, $institute, $course);
                if ($stmt->execute()) {
                    $_SESSION ['status'] = "New record inserted sucessfully.";
                   
                    header("Location: trial.php");
                }
                else {
                    $_SESSION ['status'] = $stmt->error;
                    header("Location: trial.php");
                }
            }
            else {
                $_SESSION ['status'] ="Someone already registers using this email.";
                header("Location: trial.php");
            }
            $stmt->close();
            $conn->close();
        }
    }
    else {
        $_SESSION ['status'] ="All field are required.";
        header("Location: trial.php");
        die();
    }
}
else {
    $_SESSION ['status'] ="Submit button is not set";
    header("Location: trial.php");
}
?>