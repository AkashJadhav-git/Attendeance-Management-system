<?php

    include './database.php';
      
    $name = $_GET['name'];
    $sql = "DELETE FROM parentdetails WHERE name='$name'";
    
    if (mysqli_query($conn, $sql)) {
        
        header('location:ParentManage.php');
        
        } else {
        echo "Error: " . $sql . " " . mysqli_error($conn);
    }
     
   
?>