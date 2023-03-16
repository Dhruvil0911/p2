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
    <form action="next.php" method="POST">
        <div class="form">
        <div><img src="./img/l.png"></img></div>
        <div class="container">
        <div class="header" >Add Post</div>
        Sr.no :<br>
        <input type="number" name="sr_no">
        <br><br>
        Title :<br>
        <input type="text" name="title">
        <br>
        Category :<br>
       
        <select name="category">
            <option value="course" selected>Course</option>
            <option value="career">Career</option>
            <option value="computer" selected>Computer</option>
            <option value="cuet" >cuet</option>
        </select>
        <br><br>
        Author:<br>
        <select name="Author">
            <option value="user1" selected>user1</option>
            <option value="user2">user2</option>
            <option value="user3">user3</option>
            <option value="unknown" selected>?</option>
        </select>
        <br><br>
        Status:<br>
        <select name="Status">
            <option value="Done" selected>Done</option>
            <option value="pending">pending</option>
            <option value="not started" selected>not started</option>
        </select>
        <br>   
        <br>  
        <div class="btn-box"> 
        <input type="submit" class="btn" name="submit" id="">
        <input type="reset" class="btn" name="Reset" id="">
</div>
</div>
</div>
</form>
</body>
</html>