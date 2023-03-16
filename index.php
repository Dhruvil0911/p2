<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="formstyle.css">
</head>
<body>
    <form action="./function.php" method="POST">
        <div class="form">
        <div class="login"><img src="./img/l.png"></img></div>
        <div class="container">
            <div class="header" >Log in</div>
        Username :<br>
        <input type="text" name="username">
        <br><br>
        Password :<br>
        <input type="password" name="password">
        <br><br>
        
        <div class="btn-box"> 
        <input type="submit" class="btn" name="login" id="">
        <input type="reset" class="btn" name="Reset" id="">
</div>
</div>
</div>
</form>
</body>
</html>

<?php
    
include("conn.php");
 
if(isset($_POST['login'])) {
    $userName = $_POST["username"];
    $sql = mysqli_query($conn,
    "SELECT * FROM `admin` WHERE `username`='"
    . $_POST["username"] . "' AND
    `password`='" . $_POST["password"] . "'    ");
   
    $num = mysqli_num_rows($sql);
   
    if($num > 0) {
        $row = mysqli_fetch_array($sql);
        header("location:index.php");
        exit();
    }
    else {
?>
<hr>
<font color="red"><b>
        <h3>Sorry Invalid Username and Password<br>
            Please Enter Correct Credentials</br></h3>
    </b>
</font>
<hr>
 
<?php
      }
}
?>