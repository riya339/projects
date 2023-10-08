<?php 
include('conn.php');
include('f.php');
session_start();
$cour= $_SESSION['cou'];
?>
<html>
   
   <head>
      <title>Login Page</title>
      
      <style type = "text/css">
         body {
            font-family:Arial, Helvetica, sans-serif;
            font-size:14px;
         }
         label {
            font-weight:bold;
            width:100px;
            font-size:14px;
         }
         .box {
            border:#666666 solid 1px;
         }
      </style>
      
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Videos</title>
	<link rel="stylesheet" href="cssv.css">
	<script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
	<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
	<script language="javascript" type="text/javascript">
        function preventBack()
        {
            window.history.forward();
        }
        setTimeout("preventBack()",0);
        window.onunload = function(){null;}
  </script>
    <script>
		$(document).ready(function(){
			$(".hamburger").click(function(){
			   $(".wrapper").toggleClass("collapse");
			});
		});
	</script>
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
          <i class="fas fa-sign-out-alt" title="Log out"></i>
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
        <li><a href="#item">
          <span class="icon"><i class="fas fa-video"></i></span>
          <span class="title">More Courses</span>
          </a></li>
          <li><a href="https://www.msrcasc.edu.in/contact">
            <span class="icon"><i class="fas fa-video"></i></span>
            <span class="title">Home</span>
            </a></li>
            <div class="menu-area"> 
                <ul>
                 <li><a href="#"><span class="icon"><i class="fas fa-pen"></i></span>
                 <span class="title">Test Link</span></a>
                    
              </div>  
    </ul>
  </div>

    <div class="main_container">
    <div class="header" id="intro"></div> 
    <h1>Course Videos</h1>
    <div class="item">
      <h3>Videos</h3>
      <br>
      <!--<iframe width="400" height="335" src="https://player.vimeo.com/external/463002448.sd.mp4?s=df9a51e810e8e1035200cb071f237e6537704693&profile_id=139&oauth2_token_id=57447761">
          </iframe>-->
      <p><br><?php    
   /*  $sql="SELECT * FROM upload where coursename=$cour";
     $rs=mysqli_query($conn,$sql);
     if (!$rs) {
      printf("Error: %s\n", mysqli_error($conn));
      exit();
  }else{
  
     
?>
<?php
/*while($rows=mysqli_fetch_array($rs)){
?>
<h2>
<a href="adm1/<?php echo $rows['myfile']; ?>" target="_blank">View</a></h2>
<?php
}
  }*/
?>     
        </div>    
    </div>
    <div class="item">
      <h3>Study Material </h3>
      <br>
      Download Study material:
      <a href="#"  class="test">Download</a>
        </div> 
    <div class="item">
     You have Successfully completed the Value Added Course. To test your efforts in learning something new...... 
     Coming soon
      <br>
      <br>
     <a href="#"  class="test">Give Test</a>
    </div>
  </div>
</div>
	
</body>
</html>