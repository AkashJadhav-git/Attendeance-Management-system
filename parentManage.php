<!DOCTYPE html>
<html lang="en">
    <head>
        <title>View Parent Details</title>
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
            <br>

            <h3 class="text-warning text-center" > Display Parents Data </h3>
                <br>
                <table  id="tabledata" class=" table table-striped table-hover table-bordered">

                    <tr class="bg-dark text-white text-center">

                        <th> Name </th>
                        <th> Address</th>
                        <th>Relation</th>
                        <th>Contact</th>
                        <th>Email ID</th>
                        <th>Delete</th>

                    </tr >

                    <?php
                    include './database.php';
                    $q = "select * from parentdetails";

                    $query = mysqli_query($conn, $q);

                    while ($res = mysqli_fetch_array($query)) {
                        ?>
                        <tr class="text-center">
                            <td> <?php echo $res['name']; ?> </td>
                            <td> <?php echo $res['address']; ?> </td>
                            <td> <?php echo $res['relation']; ?> </td>
                            <td> <?php echo $res['contact']; ?> </td>
                            <td> <?php echo $res['email']; ?> </td>
                            <td> <button class="btn-danger btn"> <a href="delete.php?name=<?php echo $res['name']; ?>" class="text-white"> Delete </a>  </button> </td>

                        </tr>

                        <?php
                    }
                    ?>

                </table>  

            </div>
        </div>

        <script type="text/javascript">

            $(document).ready(function () {
                $('#tabledata').DataTable();
            })

        </script>


    </body>
</html>
