
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
          <br><button type="submit" name="submit">Remove</button>
        </form>
      </div>
    </div>
  </body>
</html>