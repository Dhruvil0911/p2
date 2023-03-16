<?php
include "conn.php";
 if (isset($_POST['submit'])) {
 $sr_no = $_POST['sr_no'];
 $title = $_POST['title'];
 $author = $_POST['Author'];
 $status = $_POST['Status'];
 $sql = "INSERT INTO `blog_display`(`sr_no`,`title`, `author`, `status`) VALUES ('$sr_no','$title','$author','$status')";

 $result = $conn->query($sql);
 if ($result == TRUE) {
 echo "New record created successfully.";
 }else{
 echo "Error:". $sql . "<br>". $conn->error;
 }
 $conn->close();
 }
//best outside the if statement so user isn't stuck on a white blank page.
header("location: dashboard.php");
?>
