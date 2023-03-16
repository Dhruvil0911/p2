<?php
include "conn.php";

if (isset($_POST['update'])) {
   $author = $_POST['Author'];
   $status = $_POST['Status'];
   $category = $_POST['category'];
   $sr_no = $_POST['sr_no'];

   $sql = "UPDATE `blog_display` SET `author`='$author',`status`='$status', `category`='$category'  WHERE `sr_no`=$sr_no";

   $result = $conn->query($sql);
   if ($result == TRUE) {
      echo '<script>alert("Updated")</script>';
   } else {
      echo "Error:" . $sql . "<br>" . $conn->error;
   }
   $conn->close();
}

if (isset($_POST['delete'])) {
   $author = $_POST['Author'];
   $status = $_POST['Status'];
   $curr_date = $_POST['current_date'];
   $Category = $_POST['category'];
   $sr_no = $_POST['sr_no'];

   $sql = "DELETE FROM `blog_display`  WHERE `sr_no`=$sr_no";

   $result = $conn->query($sql);
   if ($result == TRUE) {
      echo '<script>alert("deleted")</script>';
   } else {
      echo "Error:" . $sql . "<br>" . $conn->error;
   }
   $conn->close();
}

//best outside the if statement so user isn't stuck on a white blank page.
header("location: dashboard.php");
?>