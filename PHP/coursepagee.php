<?php

include('conn.php');
include('f.php');

/*if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !==true)
{
    header("location: trial.php");
}*/
$cour=$_SESSION['cou'];
$logg =mysqli_query($con,"SELECT * From upload where coursename='$cour'");
$row=mysqli_fetch_array($logg,MYSQLI_ASSOC);
$loggedin_session= $row['coursename'];
$log =mysqli_query($con,"SELECT * From addcourse where coursename='$cour'");
$row1=mysqli_fetch_array($log,MYSQLI_ASSOC);
$loog_session= $row1['faculty'];
if(!isset($loggedin_session) || $loggedin_session==NULL) {
  echo "Go back";
  header("Location: index.php");
 }
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Videos</title>
	<link rel="stylesheet" href="coursepage.css">
	<script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
	<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>

</head>
<body>

<div class="wrapper">
  <div class="top_navbar">
    <div class="value">
       <div class="one"></div>
       <div class="two"></div>
       <div class="three"></div>
    </div>
    <div class="top_menu">
      <div class="logo">Value Added Courses</div>
      <ul>
        <li><a href="logout.php">
          <i class="fas fa-sign-out-alt"  title="Log out"></i>
          </a></li>
      </ul>
    </div>
  </div>
  
  <div class="sidebar">
      <ul>
        <li><a href="#intro">
          <span class="icon"><i class="fas fa-video"></i></span>
          <span class="title">Video</span></a></li>
        <li><a href="#video">
          <span class="icon"><i class="fas fa-video"></i></span>
          <span class="title">Study Material</span>
          </a></li>
          <li><a href="https://www.msrcasc.edu.in/contact">
            <span class="icon"><i class="fas fa-video"></i></span>
            <span class="title">Contact us</span>
            </a></li>
            <div class="menu-area"> 
                <ul>
                 <li><a href="#"><span class="icon"><i class="fas fa-pen"></i></span>
                 <span class="title">Test Link</span></a>
                    
              </div>
          </ul>
  </div>
   <div class="main_container">
    <div class="header" id="intro"><h2><?php echo $loggedin_session; ?><br/><h3>By: <?php echo $loog_session; ?></h3></h2></div> 
    <h1>Course Videos</h1>
    <div class="item">
      <h3>Videos</h3>
      <br>
      <p>
        <a href="veiwss.php?file_coursename=<?php echo $row['coursename'] ?>">Click Here to veiw</a>

     </p>
    </div>
    <div class="item">
      <h3>Study Material </h3>
      <br>
      <h4><b>Download Study Material: </b></h4>
      <br>
      <a href="download1.php?file_coursename=<?php echo $row['coursename'] ?>" class="test"><h4 style="font-size: 25px;">Download <img src="http://sulaimonandco.com/wp-content/uploads/2019/11/new-gif-icon-14.gif" height="30px" width="70px" ></h4></a>
        </div> 
    <div class="item">
     <h4>You have Successfully completed the Value Added Course. To test your efforts in learning something new...... 
     Coming soon</h4>
     <br>
     <a href="#"  class="test"><h4 style="font-size: 20px;">Give Test   <img src="https://www.pngitem.com/pimgs/m/516-5168700_coming-soon-transparent-blue-hd-png-download.png" height="30px" width="70px" ></h4></a>
    </div>
  </div>
</div>
	
</body>
</html>