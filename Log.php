<?php

    require_once './database.php';
    if (isset($_POST['save'])) {
        
        $username = $_POST['username'];
        $password = $_POST['password'];
        $type = $_POST['type'];
        
        
        if ($type == "parent") {
            $sql = "SELECT *FROM parentdetails WHERE username = '$username' and password = '$password'";
            $result = mysqli_query($conn, $sql);
            $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
            $active = $row['active'];
            $count = mysqli_num_rows($result);

            if ($count == 1) {
                header("location: parentDashboard.php");
            }
        }
        elseif ($type == "student") {
            $sql = "SELECT *FROM studentdetails WHERE username = '$username' and password = '$password'";
            $result = mysqli_query($conn, $sql);
            $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
            $active = $row['active'];
            $count = mysqli_num_rows($result);

            if ($count == 1) {
                header("location: studentDashboard.php");
            }
        }
        elseif ($type == "staff") {
            $sql = "SELECT *FROM staffdetails WHERE username = '$username' and password = '$password'";
            $result = mysqli_query($conn, $sql);
            $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
            $active = $row['active'];
            $count = mysqli_num_rows($result);

            if ($count == 1) {
                header("location: StaffDashboard.php");
            }
        }
        elseif ($type == "admin") {

            if ($username == "Admin@123" && $password = "Admin@123") {
                header("location: Dashboard.php");
            }
        } 
    }
    
?>
<html> 
    <head>
        <title>Log in </title>
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
        <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
        <style>

            body, html {
                height: 100%;
                background-repeat: no-repeat;
                background-image: linear-gradient(rgb(104, 145, 162), rgb(12, 97, 33));
            }

            .card-container.card {
                max-width: 350px;
                padding: 40px 40px;
            }

            .btn {
                font-weight: 700;
                height: 36px;
                -moz-user-select: none;
                -webkit-user-select: none;
                user-select: none;
                cursor: default;
            }


            .card {
                background-color: #F7F7F7;
                /* just in case there no content*/
                padding: 20px 25px 30px;
                margin: 0 auto 25px;
                margin-top: 50px;
                /* shadows and rounded borders */
                -moz-border-radius: 2px;
                -webkit-border-radius: 2px;
                border-radius: 2px;
                -moz-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
                -webkit-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
                box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
            }

            .profile-img-card {
                width: 96px;
                height: 96px;
                margin: 0 auto 10px;
                display: block;
                -moz-border-radius: 50%;
                -webkit-border-radius: 50%;
                border-radius: 50%;
            }

            .profile-name-card {
                font-size: 16px;
                font-weight: bold;
                text-align: center;
                margin: 10px 0 0;
                min-height: 1em;
            }

            .reauth-email {
                display: block;
                color: #404040;
                line-height: 2;
                margin-bottom: 10px;
                font-size: 14px;
                text-align: center;
                overflow: hidden;
                text-overflow: ellipsis;
                white-space: nowrap;
                -moz-box-sizing: border-box;
                -webkit-box-sizing: border-box;
                box-sizing: border-box;
            }

            .form-signin #inputEmail,
            .form-signin #inputPassword {
                direction: ltr;
                height: 44px;
                font-size: 16px;
            }

            .form-signin input[type=email],
            .form-signin input[type=password],
            .form-signin input[type=text],
            .form-signin button {
                width: 100%;
                display: block;
                margin-bottom: 10px;
                z-index: 1;
                position: relative;
                -moz-box-sizing: border-box;
                -webkit-box-sizing: border-box;
                box-sizing: border-box;
            }

            .form-signin .form-control:focus {
                border-color: rgb(104, 145, 162);
                outline: 0;
                -webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,.075),0 0 8px rgb(104, 145, 162);
                box-shadow: inset 0 1px 1px rgba(0,0,0,.075),0 0 8px rgb(104, 145, 162);
            }

            .btn.btn-signin {
                /*background-color: #4d90fe; */
                background-color: rgb(104, 145, 162);
                /* background-color: linear-gradient(rgb(104, 145, 162), rgb(12, 97, 33));*/
                padding: 0px;
                font-weight: 700;
                font-size: 14px;
                height: 36px;
                -moz-border-radius: 3px;
                -webkit-border-radius: 3px;
                border-radius: 3px;
                border: none;
                -o-transition: all 0.218s;
                -moz-transition: all 0.218s;
                -webkit-transition: all 0.218s;
                transition: all 0.218s;
            }

            .btn.btn-signin:hover,
            .btn.btn-signin:active,
            .btn.btn-signin:focus {
                background-color: rgb(12, 97, 33);
            }

            .forgot-password {
                color: rgb(104, 145, 162);
            }

            .forgot-password:hover,
            .forgot-password:active,
            .forgot-password:focus{
                color: rgb(12, 97, 33);
            }
        </style>
        <script>
            $(document).ready(function () {

                loadProfile();
            });

            function getLocalProfile(callback) {
                var profileImgSrc = localStorage.getItem("PROFILE_IMG_SRC");
                var profileName = localStorage.getItem("PROFILE_NAME");
                var profileReAuthEmail = localStorage.getItem("PROFILE_REAUTH_EMAIL");

                if (profileName !== null
                        && profileReAuthEmail !== null
                        && profileImgSrc !== null) {
                    callback(profileImgSrc, profileName, profileReAuthEmail);
                }
            }

            function loadProfile() {
                if (!supportsHTML5Storage()) {
                    return false;
                }

                getLocalProfile(function (profileImgSrc, profileName, profileReAuthEmail) {
                    $("#profile-img").attr("src", profileImgSrc);
                    $("#profile-name").html(profileName);
                    $("#reauth-email").html(profileReAuthEmail);
                    $("#inputEmail").hide();
                    $("#remember").hide();
                });
            }

            function supportsHTML5Storage() {
                try {
                    return 'localStorage' in window && window['localStorage'] !== null;
                } catch (e) {
                    return false;
                }
            }

            function testLocalStorageData() {
                if (!supportsHTML5Storage()) {
                    return false;
                }
                localStorage.setItem("PROFILE_IMG_SRC", "//lh3.googleusercontent.com/-6V8xOA6M7BA/AAAAAAAAAAI/AAAAAAAAAAA/rzlHcD0KYwo/photo.jpg?sz=120");
                localStorage.setItem("PROFILE_NAME", "César Izquierdo Tello");
                localStorage.setItem("PROFILE_REAUTH_EMAIL", "oneaccount@gmail.com");
            }
        </script>
    </head>

    <body>
        <div class="container">
            <div class="card card-container">
                <h4 align="center">Online Attendence</h4><br>
                <img id="profile-img" class="profile-img-card" src="//ssl.gstatic.com/accounts/ui/avatar_2x.png" />
                <p id="profile-name" class="profile-name-card"></p>
                <form class="form-signin" method="POSt" action="">
                    <span id="reauth-email" class="reauth-email"></span>
                    <input type="text" id="inputEmail" class="form-control" placeholder="Username" name="username" required>
                    <input type="password" id="inputPassword" class="form-control" placeholder="Password" name="password" required>
                    <div class="form-group">
                        <select class="form-control" id="sel1" name="type" required>
                            <option>Select Option</option>
                            <option value="admin">Admin</option>
                            <option value="parent">Parent</option>
                            <option value="student">Student</option>
                            <option value="staff">Staff</option>
                        </select>
                    </div>
                    <br>

                    <button class="btn btn-lg btn-primary btn-block btn-signin" type="submit" name="save">Sign in</button>
                </form><!-- /form -->
               
            </div><!-- /card-container -->
        </div><!-- /container -->
    </body>
</html>