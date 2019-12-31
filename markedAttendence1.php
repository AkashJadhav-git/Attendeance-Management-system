<?php
include './database.php';
if (isset($_POST['submit'])) {

    foreach ($_POST['attendence_status'] as $id => $attendence_status) {
        $roll = $_POST['roll'][$id];
        $name = $_POST['name'][$id];
        $class = $_POST['class'][$id];
        $subject = $_POST['subject'][$id];
        $date = date("d-m-y");
        
        $qq = "insert into attendence(roll, name, class, subject, status, date) values('$roll','$name','$class','$subject','$attendence_status',CURDATE())";

        mysqli_query($conn, $qq);
        
        header("location: markedAttendence.php");
        
    }
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Mark Attendence</title>
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
                            <a class="navbar-brand" href="markedAttendence.php">Mark Attendence</a>
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
            <br>
            <h3><div class="well text-center">Date:<?php echo date("d-m-y"); ?></div></h3>
            <br>
            <form action="markedAttendence1.php" method="post">
                <table  id="tabledata" class=" table table-striped table-hover table-bordered">

                    <tr class="bg-dark text-white text-center">

                        <th>Roll</th>
                        <th>Name</th>
                        <th> Attendence Status </th>

                    </tr >

<?php
include './database.php';

if (isset($_POST['save'])) {
    $class = $_POST['class'];
    $subject = $_POST['subject'];
}
$q = "select * from studentdetails where class = '$class'";

$query = mysqli_query($conn, $q);
$counter = 0;
while ($res = mysqli_fetch_array($query)) {
    ?>
                        <tr class="text-center">
                            <td> <?php echo $res['roll']; ?>
                                <input type="hidden" value="<?php echo $res['roll']; ?>" name="roll[]">
                                <input type="hidden" value="<?php echo $res['class']; ?>" name="class[]">
                                <input type="hidden" value="<?php echo $subject; ?>" name="subject[]">
                            </td>
                            <td> <?php echo $res['name']; ?> 
                                <input type="hidden" value="<?php echo $res['name']; ?>" name="name[]">
                            </td>
                            <td>
                                <input type="radio" name="attendence_status[<?php echo $counter; ?>]" value="present">Present
                                <br>
                                <input type="radio" name="attendence_status[<?php echo $counter; ?>]" value="absent">Absent

                            </td>
                        </tr>

    <?php
    $counter++;
}
?>

                </table> 
                <br>
                <div align='center'>
                    <input type="submit" name="submit" value="submit" class="btn btn-primary">
                </div>
            </form>
        </div>
    </div>

    <script type="text/javascript">

        $(document).ready(function () {
            $('#tabledata').DataTable();
        })

    </script>


</div>

</body>
</html>
