<?php

    include './database.php';
      
    $conatct = $_GET['conatct'];
    
    $sql = "DELETE FROM staffdetails WHERE conatct='$conatct'";
    
    if (mysqli_query($conn, $sql)) {
        
        header('location:StaffManage.php');
        
        } else {
        echo "Error: " . $sql . " " . mysqli_error($conn);
    }
     
   
?>