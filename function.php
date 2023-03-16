<?php
include("conn.php");
session_start();

if($stmt=$conn->prepare('SELECT `id`,`password` FROM `admin` WHERE  `username` = ? '))
{
    $stmt->bind_param('s',$_POST['username']);
    $stmt->execute();

    $stmt->store_result();

    if($stmt->num_rows > 0)
    {
        $stmt->bind_result($id,$password);
        $stmt->fetch();

        if($_POST['password'] ===$password )
        {
            session_regenerate_id();
            $_SESSION['loggedin'] = TRUE;
            $_SESSION['name'] = $_POST['username'];
            $_SESSION['id'] = $id;
            header('Location: dashboard.php');
        }
    }else
    {
        echo '<script>alert("incorrect username or password")</script>';
       
        header('refresh:0.2;url=index.php');
    }
    $stmt->close();
}

?>