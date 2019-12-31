<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Dashboard</title>
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
                        <a class="navbar-brand" href="Dashboard.php">Dashboard</a>
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
            <br>

            <h2>Dashboard</h2>
            <br>
            <!-- Nav tabs -->
            <ul class="nav nav-tabs" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" data-toggle="tab" href="#home">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#menu1">Menu 1</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#menu2">Menu 2</a>
                </li>
            </ul>

            <!-- Tab panes -->
            <div class="tab-content">
                <div id="home" class="container tab-pane active"><br>
                    <h3>HOME</h3>
                    <p>welcome to Online Attendance System.</p>
                </div>
                <div id="menu1" class="container tab-pane fade"><br>
                    <h3>Note :</h3>
                    <p>Enter the valid details of staff , student and parents. Which is essential for access at any time.</p>
                </div>
                <div id="menu2" class="container tab-pane fade"><br>
                    <h3>About</h3>
                    <p>It design for both mobile and desktop view.</p>
                </div>
            </div>
        </div>

    </body>
</html>
