<?php
session_start();
include "conn.php";
$sql = "SELECT * FROM `blog_display` WHERE 1";
$result = $conn->query($sql);


$course = "Courses";
$career ="Career";
$college = "College";
$computer = "Computer";
$cuet = "CUET";


if(!isset($_SESSION['loggedin']))
{
    echo "you need to log in first";
    header('refresh:2;url=index.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Panel</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <div class="nav">
        <div class="left">
            <label for="category">Category :</label>
            <select id="category">
                <option value="Cource"><?php echo $course ?></option>
                <option value="Carrer"><?php echo $career ?></option>
                <option value="Certificate">Certificate</option>
                <option value="College">College</option>
            </select>
            <br>
            <label for="Author">Author :</label>
            <select id="Author">
                <option value="user1">user1</option>
                <option value="user2">user2</option>
                <option value="user3">user2</option>
                <option value="all" selected>All</option>
            </select>
        </div>
        <div class="middle">
            <img src="./img/l.png" alt="ABCD" srcset="">
        </div>
        <div class="right">
            <div class="user"><img src="./img/user.png"><span>hey ! <?=$_SESSION['name']?></span> <a href="logout.php"><img src="./img/logout.svg"></img></a> </div>

            <div class="total"><p>Total :

                <?php
                $row = mysqli_num_rows($result);
                echo $row;
                ?><p>
            </div>
            <div class="add"><a href="./add_post_form.php">Add Post +</a></div>
        </div>
    </div>
    <div class="content">
        <table>
            <tr class="header">
                <td id="th1" >Sr.no</td>
                <td id="th2">Title</td>
                <td id="th6">Category</td>
                <td id="th7">Date</td>
                <td id="th3">Author</td>
                <td id="th4">Status</td>
                <td id="th5">Update/Delete</td>
            </tr>
            <tbody>

                <?php
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        ?>
                        <tr>
                            <form action="operation.php" method="POST">
                                <td name="sr_no">
                                    <?php echo $row['sr_no']; ?>
                                </td>

                                <td>
                                    <?php echo $row['title']; ?>
                                </td>
                                <td>
                                <select name="Category" id="user">
                                        <option value="user1" selected><?php echo $course ?></option>
                                        <option value="user2">Career</option>
                                        <option value="user3"><?php echo $course ?></option>
                                        <option value="unknown" selected>
                                            <?php echo $row['author']; ?>
                                        </option>
                                    </select>
                                </td>
                                <td>
                                    Hii
                               </td>
                                <td><select name="Author" id="user">
                                        <option value="user1" selected>user1</option>
                                        <option value="user2">user2</option>
                                        <option value="user3">user3</option>
                                        <option value="unknown" selected>
                                            <?php echo $row['author']; ?>
                                        </option>
                                    </select></td>
                                <td>
                                    <select name="Status" id="status">
                                        <option value="Done" selected>Done</option>
                                        <option value="pending">pending</option>
                                        <option value="not_started">not started</option>
                                        <option value="not started" selected>
                                            <?php echo $row['status']; ?>
                                        </option>
                                    </select>
                                </td>
                                <td>
                                    <input type="text" class="final" name="sr_no" size="3" />
                                    <button type="submit" id="update-btn" name='update'>Update</button>
                                    <button type="submit" id="delete-btn" name='delete'>delete</button>
                                </td>
                            </form>
                        </tr>


                    <?php }
                }
                ?>
            </tbody>
        </table>
    </div>
</body>

</html>