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
                <a class="navbar-brand" href="#">Parent</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="collapsibleNavbar">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="navbar-brand" href="parentDashboard.php">Dashboard</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="parentReport.php">View Report</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="parentProfile.php">My Profile</a>
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
                    <p>welcome to online attendance system.</p>
                </div>
                <div id="menu1" class="container tab-pane fade"><br>
                    <h3>Note :</h3>
                    <p>Easily get the attendence of your child.For check the profile enter the valid password.</p>
                </div>
                <div id="menu2" class="container tab-pane fade"><br>
                    <h3>Menu 2</h3>
                    <p>Use for both desktop and mobile view.</p>
                </div>
            </div>
        </div>

    </body>
</html>
