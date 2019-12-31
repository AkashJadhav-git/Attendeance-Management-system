<?php
include_once 'database.php';
if (isset($_POST['save'])) {
    $name = $_POST['name'];
    $contact = $_POST['contact'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $sql = "INSERT INTO staffdetails  VALUES ('$name','$contact','$username','$password')";
    if (mysqli_query($conn, $sql)) {

        } else {
        echo "Error: " . $sql . "l̥īō
" . mysqli_error($conn);
    }
    mysqli_close($conn);
}
?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Add Staff Details</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    </head>
    <body>
        <br>

        <div class="container">

             <nav class="navbar navbar-expand-md bg-dark navbar-dark">
                <a class="navbar-brand" href="#">Admin</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                    <span class="navbar-toggler-icon"></span>
                </button>
               <div class="collapse navbar-collapse" id="collapsibleNavbar">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="Dashboard.php">Dashboard</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                            Parent Details
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="parentAdd.php">Add Details</a>
                            <a class="dropdown-item" href="parentManage.php">View Details</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                            Student Details
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="studentAdd.php">Add Details</a>
                            <a class="dropdown-item" href="studentManage.php">View Details</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                            Class Details
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="classAdd.php">Add Details</a>
                            <a class="dropdown-item" href="classManage.php">View Details</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                            Staff Details
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="staffAdd.php">Add Details</a>
                            <a class="dropdown-item" href="staffManage.php">View Details</a>
                        </div>
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link" href="Log.php">Log Out</a>
                    </li>
                </ul>
            </div> 
            </nav>
            <br><br><br>

            <h4>Add staff details:</h4>
            <br>
            <form class="form-horizontal" method="post" action="staffAdd.php">
                <div class="form-group">
                    <label class="control-label col-sm-2" for="email">Name:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" placeholder="Enter name" name="name" required>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2" for="pwd">Contact:</label>
                    <div class="col-sm-10">          
                        <input type="text" class="form-control"  placeholder="Enter comtact" name="contact" required>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2" for="email">Username:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" placeholder="Enter username" name="username" required>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2" for="pwd">Password:</label>
                    <div class="col-sm-10">          
                        <input type="text" class="form-control"  placeholder="Enter password" name="password" required>
                    </div>
                </div>

                <div class="form-group">        
                    <div class="col-sm-offset-2 col-sm-10" align='center'>
                        <button type="submit" class="btn btn-primary" value="submit" name="save">Submit</button>
                    </div>
                </div>
            </form>
        </div>

    </body>
</html>
