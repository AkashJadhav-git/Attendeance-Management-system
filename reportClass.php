<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Report by Class</title>
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
                <a class="navbar-brand" href="#">Staff</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="collapsibleNavbar">
                    <ul class="navbar-nav">
                         <li class="nav-item">
                             <a class="nav-link" href="staffDashboard.php">Dashboard</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="markedAttendence.php">Mark Attendence</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                                Reports
                            </a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="reportClass.php">By Class</a>
                                <a class="dropdown-item" href="reportStudent.php">By Student</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="Log.php">Log Out</a>
                        </li>
                    </ul>
                </div>  
            </nav>
            <br><br><br>

            <form class="form-horizontal" method="post" action="reportClass1.php">
                <div class="form-group">
                    <label class="control-label col-sm-2">Select Class</label>
                    <div class="col-sm-10">
                        <select class="form-control" id="exampleFormControlSelect1" name="class" required>
                        <option>Nothing Selected</option>
                        <option value="FE">FE</option>
                        <option value="SE">SE</option>
                        <option value="TE">TE</option>
                        <option value="BE">BE</option>
                    </select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2" for="pwd">Starting date:</label>
                    <div class="col-sm-10">          
                        <input type="date" class="form-control"  placeholder="Enter starting date" name="start" required>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2" for="pwd">Ending date:</label>
                    <div class="col-sm-10">          
                        <input type="date" class="form-control"  placeholder="Enter ending date" name="end" required>
                    </div>
                </div>
                <br><br>
                <div class="form-group">        
                    <div class="col-sm-offset-2 col-sm-10" align='center'>

                        <button type="submit" class="btn btn-primary" value="submit" name="submit">Click Here</button>

                    </div>
                </div>
            </form>
           
        </div>

    </body>
</html>
