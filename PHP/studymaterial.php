<?php ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="stylesheet" href="addcourse.css">
    <title>Files Upload and Download</title>
  </head>
  <body>
  <div class="msrcasclogo">
         <img src="logo1.png" style="align: left;" 
         width="750"
         height="78">
    </div> 
    <div class="container">
      <div class="row">
        <form action="study.php" method="POST" enctype="multipart/form-data" >
        <label for="firstname" class="label-title"><h3>Course name *</h3></label>
        
        <input type="text" id="coursename" name="coursename" class="form-input" placeholder="Course" required="required" />
          <h3>Upload Study Material</h3>
          <input type="file" name="myfile"> <br>
          <br>
          <br>
          <button type="submit" name="submit">Upload</button>
        </form>
      </div>
    </div>
  </body>
</html>