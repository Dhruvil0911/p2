<?php
include "conn.php";

 if (isset($_POST['delete'])) {
 $author = $_POST['Author'];
 $status = $_POST['Status'];
 $sr_no = $_POST['sr_no'];

 $sql = "DELETE FROM `blog_display`  WHERE `sr_no`=$sr_no";

 $result = $conn->query($sql);
 if ($result == TRUE) {
    echo '<script>alert("deleted")</script>';
 }else{
 echo "Error:". $sql . "<br>". $conn->error;
 }
 $conn->close();
 }
//best outside the if statement so user isn't stuck on a white blank page.
header("location: dashboard.php");
?>
