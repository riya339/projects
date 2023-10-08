<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Admin Page</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css'><link rel="stylesheet" href="ad.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<script type="text/javascript">
function redirectIt(obj){
    var goToLink = obj.getAttribute("href");
    window.location.href=goToLink;
}
</script>
</head>
<body>
<div class="container">
  <div class="box">
    <div class="left-bar"><span class="fa fa-cloud-download"></span>
      <div class="menu-group">    <span class="fa fa-television"></span><span class="fa fa-file-video-o"></span>
      <span class="fa fa-cog"></span>
</div><span onclick="redirectIt(this)" href="logout.php" class="fa fa-sign-out"></span>
    </div>
    <div class="wrapper">   
      <div class="top-bar"><span class="cloud">Admin Inventory</span>
        <div class="cta-button"><span>+</span></div></a>
      </div>
      
      <div class="content">
        <div class="menu">
          <div class="search">
            <label> <span class="fa fa-search"></span></label>
            <input placeholder="Search Items"/>
          </div>
          <div class="list-info"><span>Uploaded Videos</span><span class="fa fa-bars"></span><span class="fa fa-th-large"></span></div>
        </div>
      </div>
      <?php 
      if(isset($_SESSION['status']))
      {
       ?>
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
    <strong>New ! </strong><?php echo $_SESSION['status'] ?>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>
          <?php 
          unset($_SESSION['status']);
      }
  
  ?>
      <div class="grid"> 
        <div class="card">
          <div class="number"><span>1</span></div>
          <div class="img"></div>
          <div class="product-name"><span>Add Courses</span></div>
          <div class="overlay">
            <a href="addcourse.php"><div class="detail"><span>Add</span></div></a>
          </div>
        </div>
        <div class="card">
          <div class="number"><span>2</span></div>
          <div class="img"></div>
          <div class="product-name"><span>Add Videos</span></div>
          <div class="overlay">
            <a href="index.php"><div class="detail"><span>Upload</span></div></a>
          </div>
        </div>
        <div class="card">
          <div class="number"><span>3</span></div>
          <div class="img"></div>
          <div class="product-name"><span>Remove Course</span></div>
          <div class="overlay">
          <a href="remove.php"><div class="detail"><span>Remove</span></div></a>
          </div>
        </div>
        <div class="card">
          <div class="number"><span>4</span></div>
          <div class="img"></div>
          <div class="product-name"><span>Study Material</span></div>
          <div class="overlay">
          <a href="studymaterial.php"><div class="detail"><span>Add</span></div></a>
          </div>
        </div>
        <div class="msrcasclogo">
          <img src="logo1.png" style="align: centre;" 
          width="500"
          height="75">
     </div> 
        <div class="card">
          <div class="number"><span>5</span></div>
          <div class="img"></div>
          <div class="product-name"><span>Statistics</span></div>
          <div class="overlay">
          <a href="http://localhost:8080/phpmyadmin/index.php?route=/sql&server=1&db=test&table=register&pos=0"><div class="detail"><span>Manage</span></div></a>
          </div>
        </div>
      
        </div>
      </div>
    </div>
  </div>
</div>
</body>
</html>
