<?php 
include('conn.php');
include('f.php');

$cour=$_SESSION['cou'];
$sql1 = ("SELECT * FROM uploadstudy where coursename='$cour'");
$result1 = mysqli_query($conn, $sql1);
$files=mysqli_fetch_all($result1,MYSQLI_ASSOC);


//$files= mysqli_fetch_all($result1);

?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <link rel="stylesheet" href="style.css">
  
  <title>Download files</title>
</head>
<body>

<img src="https://cdn.pixabay.com/photo/2017/02/13/09/53/download-2062197_960_720.png" class=image1  alt="trs" style=" width:645px;height:125px;">
<br/>
<br/>
<br/>
<center><table>
<thead bgcolor="ivory">
    <th>Coursename</th>
    <th>filename</th>
    <th>Download</th>
</thead>
<tbody bgcolor="white">
<?php foreach ($files as $file): ?>
    <tr>
      <td><?php echo $file['coursename']; ?></td>
      <td><?php echo $file['myfile']; ?></td>
      <td><a href="downloads.php?file_coursename=<?php echo $file['coursename'] ?>">Download</a></td>
    </tr>
  <?php endforeach;?>


</tbody>
</table></center>

</body>
</html>