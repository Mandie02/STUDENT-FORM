<?php
    $HOSTNAME = 'localhost';
    $USERNAME = 'root';
    $PASSWORD = '';
    $DB_NAME = 'page_student';
    
    $conn = mysqli_connect($HOSTNAME, $USERNAME, $PASSWORD, $DB_NAME);
                        
    if(!$conn){
        die("CONNECTION FAILED: " . mysqli_connect_error());
    }
?>