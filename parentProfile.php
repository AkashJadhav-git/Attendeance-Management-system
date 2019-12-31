<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Profile</title>
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
                <a class="navbar-brand" href="#">Parent</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="collapsibleNavbar">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="parentDashboard.php">Dashboard</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="parentReport.php">View Report</a>
                        </li>
                        <li class="nav-item">
                            <a class="navbar-brand" href="parentProfile.php">Profile</a>
                        </li>
                    </ul>
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="Log.php">LOG OUT</a>
                        </li>
                    </ul>
                </div>  
            </nav>
            <br><br>
            <form class="form-horizontal" method="post" action="parentProfile1.php">
                <div class="form-group">
                    <label class="control-label col-sm-2" for="email">Password:</label>
                    <div class="col-sm-10">
                        <input type="password" class="form-control" placeholder="Enter password to View and Update Profile" name="password" required>
                    </div>
                </div>
                
                <div class="form-group">        
                    <div class="col-sm-offset-2 col-sm-10" align='center'>
                    <input type="submit" name="save" value="submit" class="btn btn-primary">

                    </div>
                </div>
            </form>

        </div>

    </body>
</html>
