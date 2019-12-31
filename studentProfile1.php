<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Bootstrap Example</title>
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
                <a class="navbar-brand" href="#">Student </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="collapsibleNavbar">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="studentDashboard.php">Dashboard</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="studentReport.php">View Report</a>
                        </li>
                        <li class="nav-item">
                            <a class="navbar-brand" href="studentProfile.php">Profile</a>
                        </li>
                    </ul>
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="Log.php">LOG OUT</a>
                        </li>
                    </ul>
                </div>  
            </nav>
            <br>
            <br>
            <form class="form-horizontal" method="post" action="studentProfile.php">
                <?php
                include './database.php';
                if (isset($_POST['save'])) {
                    $password = $_POST['password'];
                }
                $q = "select *from studentdetails where password = '$password'";

                $query = mysqli_query($conn, $q);
                $counter = 0;
                while ($res = mysqli_fetch_array($query)) {
                    
                    $counter++;
                    if($counter == 2)
                    {
                        break;
                    }
               
                    ?>

                    <div class="form-group">
                        <div class="col-sm-10">
                            <input type="text" class="form-control" placeholder="Parent Name:<?php echo $res['pname']; ?>" name="<?php echo $res['pname']; ?>">
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-sm-10">          
                            <input type="text" class="form-control"  placeholder="Name:<?php echo $res['name']; ?>" name="name">
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-sm-10">
                            <input type="text" class="form-control" placeholder="Address:<?php echo $res['address']; ?>" name="address">
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-sm-10">          
                            <input type="text" class="form-control"  placeholder="Birthdate:<?php echo $res['birth']; ?>" name="dob">
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-sm-10">
                            <input type="text" class="form-control" placeholder="Contact:<?php echo $res['contact']; ?>" name="contact">
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-sm-10">          
                            <input type="text" class="form-control"  placeholder="Joined date:<?php echo $res['jdate']; ?>" name="jdate">
                        </div>

                    </div><div class="form-group">
                        <div class="col-sm-10">
                            <input type="text" class="form-control" placeholder="Class:<?php echo $res['class']; ?>" name="class">
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-sm-10">
                            <input type="text" class="form-control" placeholder="Roll No:<?php echo $res['roll']; ?>" name="roll">
                        </div>
                    </div>


                    <div class="form-group">
                        <div class="col-sm-10">          
                            <input type="text" class="form-control"  placeholder="Username:<?php echo $res['username']; ?>" name="username">
                        </div>



                    </div><div class="form-group">
                        <div class="col-sm-10">
                            <input type="text" class="form-control" placeholder="Passwoed:<?php echo $res['password']; ?>" name="password">
                    </div>
                </div>
                
                <?php }?>
                <div class="form-group">        
                    <div class="col-sm-offset-2 col-sm-10" align='center'>
                        <button type="submit" class="btn btn-primary" value="submit" name="save">Back</button>
                    </div>
                </div>

            </form>
        </div>
    </body>
</html>
