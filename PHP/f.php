<?php
session_start(); 
$email = $_POST['email'];
$password = $_POST['password'];


$con = mysqli_connect("localhost","root","","test");

if ($con->connect_error) {
  die('Could not connect to the database.');
}

else {
       
          $stmt = $con->prepare("SELECT * FROM register WHERE email = ? ");
            $stmt->bind_param("s", $email);
            $stmt->execute();
            $stmt_result = $stmt->get_result();
            if($stmt_result->num_rows > 0)
            {
              $data = $stmt_result->fetch_assoc();
              
              if($data['password'] == $password)
              { 
                      $_SESSION['cou']=$data['course'];
                      
                      $_SESSION ['status'] = "Login successfull";
                      header("location:coursepagee.php");
                }
                else{
                        $_SESSION ['status'] = "Invalid Email or password"; 
                        header("location:trial.php");
             }
            }
               
              
            /*else{
                echo"<h2>Invalid Email or password</h2>";
                } */   
   }                
  
?>