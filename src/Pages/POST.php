<?php
    
    $Student_ID = $_POST["studentId"];
    $Student_Name = $_POST["studentName"];
    $Student_Section = $_POST["gradeandsection"];
    $Student_Address = $_POST["address"];
    $Student_ContactNo = $_POST["contact"];

    $HOSTNAME = 'localhost';
    $USERNAME = 'root';
    $PASSWORD = '';
    $DB_NAME = 'page_student';

    $conn = mysqli_connect($HOSTNAME, $USERNAME, $PASSWORD, $DB_NAME);
                    
    if(!$conn){
        die("CONNECTION FAILED: " . mysqli_connect_error());
    }

    $SQL = "INSERT INTO `studentrecord` (
        `StudentId`,
        `name`,
        `gradeSection`,
        `address`,
        `contact`) 
        VALUES(
            '$Student_ID',
            '$Student_Name',
            '$Student_Section',
            '$Student_Address',
            '$Student_ContactNo'
    )";

    if(mysqli_query($conn, $SQL)) {
        echo "Record Successfully.";
    } else {
        echo "Error" . $SQL . "<br>" . mysqli_error($conn);
    }

    mysqli_close($conn);

    /*
    //connected to my localhost/phpmyadmin/
    $query = new mysqli('localhost', 'root', '', 'page_student');
    // ^ ('url', 'Dir(default: root), password(default: empty), DatabaseName');
    try {
        $in = $query->prepare("insert into studentrecord(StudentId, name, gradeSection, address, contact)
        values(?, ?, ?, ?, ?)");
        $in->bind_param("issss", $Student_ID,$Student_Name, $Student_Section, $Student_Address, $Student_ContactNo);
        $in->execute();
        $in->close();
        $query->close();
    } catch (mysqli_warning $err) {
        die("There was an Error: " . $err);
    }
    */
?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Record Form</title>
    <link rel="stylesheet" href="../style/POST.css">
    <link rel="shortcut icon" href="../img/Lagro.jpg" type="image/x-icon">
    <script src="https://kit.fontawesome.com/3f7e2d55ad.js" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
        <img src="../img/Lagro.jpg" alt="Lagro Logo" width="115px">
        <h1>LAGRO HIGH SCHOOL</h1>
    </div>
    <div class="message">
        <h4 id="msgName">Thank you for Submitting, <?php echo $Student_Name ?>.</h4>
        <h4 id="msg">Your record will be added.</h4>
    </div>
    <div class="btn">
        <button><a href="/student_form.html">Return</a></button>
        <button><a href="../config/student_record.php">View Record</a></button>
    </div>
</body>
</html>