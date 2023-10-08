
<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="stylesheet" href="addcourse.css">
    <title>Course</title>
  </head>
  <body>
  <div class="msrcasclogo">
         <img src="logo1.png" style="align: left;" 
         width="750"
         height="78">
    </div> 
    <div class="container">
      <div class="row">
        <form action="adm.php" method="post" enctype="multipart/form-data" >
        <label class="label-title"><h3 >Course name *</h3></label>
        <input type="text" name="coursename" id="coursename" class="form-input" placeholder="Course" required="required" />
        <label class="label-title"><h3>Course by *</h3></label>
        <input type="text" name="faculty" id="faculty" class="form-input" placeholder="Course by" required="required" />
          <br><button type="submit" name="submit">Submit</button>
        </form>
      </div>
    </div>
  </body>
</html>