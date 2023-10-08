<?php
include ('conn.php');
session_start();
?>
<!DOCTYPE HTML>
<html>
<head>
  <title>Register Form</title>

  <link rel="stylesheet" type="text/css" href="trial.css">
  
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
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
    <h1 style="font-family: cursive;" ><img src="logo1.png" class=image1  alt="trs" style="width:550px;height:80px;"></h1>   
  <section id="form1">  
  <?php
        if(isset($_SESSION['status']))
        {
         
        ?>
        
        <div class="alert alert-danger alert-dismissible">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong>Success!</strong><?php  echo $_SESSION['status'];?>
  </div>
 
        <?php   
            unset($_SESSION['status']);
        }
        
        ?>   
    <div class="form-box">`

        <div class='button-box'>
            <div id='btn'></div>
                <button type='button'onclick='login()'class='toggle-btn'>Register</button>
                <button type='button'onclick='admin()'class='toggle-btn'>Login</button>
            </div>
 <form id="login"class='input-group-login' action="insert.php" method="POST">

   <input type="text" class='input-field' placeholder="Enter Username" name="username" required>
   <input type="email" class='input-field' placeholder="Enter Email " name="email" required>
   <input type="password" class='input-field' placeholder="Enter password " name="password" required>
  <!--<label>Course :</label>
     <select name="Code" required>
      <option selected hidden value="">Select Code</option>
      <option value="977">977</option>
      <option value="978">978</option>
      <option value="979">979</option>
      <option value="973">973</option>
      <option value="972">972</option>
      <option value="974">974</option>
     </select>-->
     <input type="institute" class='input-field' placeholder="Enter Institute name" name="institute" required>
     <br>
     <label>Courses:  </label>
        
            <?php
             
                 $sql1 =mysqli_query($conn,"SELECT * From addcourse");
                        $rowcount = mysqli_num_rows($sql1);
            ?>
            <select class="form-input" id="level" name="course">
                        <option value="None">None</option>
                <?php
                            for($i=1;$i<=$rowcount;$i++)
                            { $row= mysqli_fetch_array($sql1);
                ?>                
                                <option value="<?php echo $row["coursename"] ?>"><?php echo $row["coursename"] ?> </option>
                <?php
                            }
                ?>
        </select>
     <br>                      
     <button type="submit" class='submit-btn' value="Submit" name="submit" >Register</button>
     <br>
     <a href="index.html" class='btn1'>Home</a>
 </form>
 <form id='admin' class='input-group-admin' action="f.php" method="POST">
  <input type='text'class='input-field'placeholder='Email Id' name="email" required >
  <input type='password'class='input-field'placeholder='Enter Password' name="password" required>
  <br>
  <br>
  <input type='checkbox'class='check-box'><span>Remember Password</span>
  <br>
  <br>
  <button type="sumbit" class='submit-btn' name='submit'>Log In</button>
  <br>
  <a href="f2.html"><i class="fas fa-key"></i>Forgot password</a>
  <br>    
  <a href="index.html" class='btn1'>Home</a>
</form>
</div>   
     <script>
        
        var x=document.getElementById('login');
        var y=document.getElementById('admin');
        var z=document.getElementById('btn');
        function admin()
        {
            x.style.left='-400px';
            y.style.left='50px';
            z.style.left='110px';
        }
        function login()
        {
            x.style.left='50px';
            y.style.left='450px';
            z.style.left='0px';
        }
    </script>
    <script>
        var modal = document.getElementById('login-form');
        window.onclick = function(event) 
        {
            if (event.target == modal) 
            {
                modal.style.display = "none";
            }
        }
    </script>
    
</body>
</html>