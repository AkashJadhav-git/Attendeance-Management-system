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
                            <a class="navbar-brand" href="studentReport.php">View Report</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="studentProfile.php">My Profile</a>
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
            <form action="studentReport.php" method="post" >
                <table  id="tabledata" class=" table table-striped table-hover table-bordered">

                    <tr class="bg-dark text-white text-center">

                        <th>Class</th>
                        <th>Subject</th>
                        <th>Name</th>
                        <th>Status </th>
                        <th>Date</th>
                    </tr >

<?php
include './database.php';

if (isset($_POST['submit'])) {
   $class = $_POST['class'];
    $start = $_POST['start'];
    $end = $_POST['end'];
    $name = $_POST['name'];
    
    
    $qq = "select class, subject, name, status, date from attendence where class = '$class' and name = '$name' and date between '$start' and '$end'";

    $query = mysqli_query($conn, $qq);

}

while ($res = mysqli_fetch_array($query)) {
    ?>
                        <tr class="text-center">
                            <td> <?php echo $res['class']; ?></td>
                            <td><?php echo $res['subject']; ?></td>
                            <td> <?php echo $res['name']; ?></td>
                            <td><?php echo $res['status']; ?></td>
                            <td><?php echo $res['date']; ?></td>
                        </tr>

                        <?php
}
?>

                </table> 
                <br>
                 <div class="form-group">        
                    <div class="col-sm-offset-2 col-sm-10" align='center'>

                        <button type="submit" class="btn btn-primary" value="submit" name="submit">Back</button>

                    </div>
                </div>
                
            </form>
        </div>
    

    <script type="text/javascript">

        $(document).ready(function () {
            $('#tabledata').DataTable();
        })

    </script>




</body>
</html>
