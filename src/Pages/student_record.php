<?php
    include_once('../config/DataBase.php');

    $query = "SELECT * FROM `studentrecord`";
    $result = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/student_record.css">
    <link rel="shortcut icon" href="../img/Lagro.jpg" type="image/x-icon">
    <title>Student Record</title>
</head>
<body>
    <div class="border">
        <div class="container">
            <img src="../img/Lagro.jpg" alt="Lagro Logo" width="115px">
            <h1>LAGRO HIGH SCHOOL</h1>
        </div>

        <div class="container2">
            <div class="title">
                <h1>STUDENT RECORD</h1>
            </div>

            <div class="search-bar">
                <input type="text" name="search" id="searchBar">
                <input type="button" value="Search" id="search-btn">
            </div>
        </div>

        <table>
            <tr class="table-name">
                <td><h4>STUDENT ID</h4></td>
                <td><h4>NAME</h4></td>
                <td><h4>Grade & Section</h4></td>
                <td><h4>Address</h4></td>
                <td><h4>Contact No.</h4></td>
            </tr>
            
                <?php
                    while($row = mysqli_fetch_assoc($result)){
                ?>
            <tr> 
                <td><h5><?php echo "{$row['StudentId']}"?></h5></td>
                <td><h5><?php echo "{$row['name']}"?></h5></td>
                <td><h5><?php echo "{$row['gradeSection']}"?></h5></td>
                <td><h5><?php echo "{$row['address']}"?></h5></td>
                <td><h5><?php echo "{$row['contact']}"?></h5></td>
            </tr>
                <?php
                    }
                ?>
        </table>
    </div>
</body>
</html>