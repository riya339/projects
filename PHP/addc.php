<?php
include_once 'removedata.php';
$sql = "DELETE FROM addcourse WHERE coursename='" . $_GET["coursename"] . "'";
if (mysqli_query($conn, $sql)) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}
mysqli_close($conn);
?>