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
        <form action="adm1.php" method="POST" enctype="multipart/form-data" >
        <label for="firstname" class="label-title"><h3>Course name *</h3></label>
        <input type="text" id="coursename" name="coursename" class="form-input" placeholder="Course" required="required" />
        <label class="label-title"><h4>Duration of course</h4></label>
                            <select class="form-input" id="level" name="duration" required>
                            <option value="N">--none--</option>
                            <option value="A">Week 1</option>
                            <option value="B">Week 2</option>
                            <option value="C">Week 3</option>
                            <option value="D">Week 4</option>
                            <option value="E">Week 5</option>
                            </select>
          <h3>Upload File</h3>
          <input type="file" name="myfile"> <br>
          <button type="submit" name="submit">upload</button>
        </form>
      </div>
    </div>
  </body>
</html>