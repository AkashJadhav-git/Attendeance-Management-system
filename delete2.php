<?php

    include './database.php';
      
    $roll = $_GET['roll'];
    $sql = "DELETE FROM studentdetails WHERE roll='$roll'";
    
    if (mysqli_query($conn, $sql)) {
        
        header('location:StudentManage.php');
        
        } else {
        echo "Error: " . $sql . " " . mysqli_error($conn);
    }
     
   
?>