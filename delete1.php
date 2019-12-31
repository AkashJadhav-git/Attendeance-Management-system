<?php

    include './database.php';
      
    $subject = $_GET['subject'];
    $sql = "DELETE FROM classdetails WHERE subject='$subject'";
    
    if (mysqli_query($conn, $sql)) {
        
        header('location:ClassManage.php');
        
        } else {
        echo "Error: " . $sql . " " . mysqli_error($conn);
    }
     
   
?>