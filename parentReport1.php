<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Report</title>
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
                            <a class="navbar-brand" href="parentReport.php">View Report</a>
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
            <br>
            <form action="parentReport.php" method="post">
                <table  id="tabledata" class=" table table-striped table-hover table-bordered">

                    <tr class="bg-dark text-white text-center">

                        <th>Class</th>
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
    
    
    $qq = "select class, name, status, date from attendence where class = '$class' and name = '$name' and date between '$start' and '$end'";

    $query = mysqli_query($conn, $qq);

}

while ($res = mysqli_fetch_array($query)) {
    ?>
                        <tr class="text-center">
                            <td> <?php echo $res['class']; ?></td>
                            <td> <?php echo $res['name']; ?></td>
                            <td><?php echo $res['status']; ?></td>
                            <td><?php echo $res['date']; ?></td>
                        </tr>

                        <?php
}
?>

                </table> 
                <br>
                <div align='center'>
                    <input type="submit" name="submit" value="submit" class="btn btn-primary">
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
