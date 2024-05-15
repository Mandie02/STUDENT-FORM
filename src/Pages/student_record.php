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
        </div>
        
        <div class="searchbar">
            <input type="text">
            <button type="submit" class="submit_btn" name="search">Search</button>
        </div>

        <table>
            <tr>
                <td><h2>STUDENT ID</h2></td>
                <td><h2>NAME</h2></td>
                <td><h2>Grade & Section</h2></td>
                <td><h2>Address</h2></td>
                <td><h2>Contact No.</h2></td>
            </tr>
            
                <?php
                    while($row = mysqli_fetch_assoc($result)){
                ?>
            <tr> 
                <td><h3><?php echo "{$row['StudentId']}"?></h3></td>
                <td><h3><?php echo "{$row['name']}"?></h3></td>
                <td><h3><?php echo "{$row['gradeSection']}"?></h3></td>
                <td><h3><?php echo "{$row['address']}"?></h3></td>
                <td><h3><?php echo "{$row['contact']}"?></h3></td>
            </tr>
                <?php
                    }
                ?>
        </table>
    </div>
</body>
</html>