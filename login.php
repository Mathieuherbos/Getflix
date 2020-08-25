<?php

    include_once "db1.php";
    session_start();

    if($_SERVER['REQUEST_METHOD'] == "POST") {

        $myUser = mysqli_real_escape_string($connection, $_POST['user']);
        $myPw = mysqli_real_escape_string($connection, $_POST['pw']);

        $sql = "SELECT user_name FROM login WHERE user_name = '$myUser' AND pw = '$myPw';";
        $result = mysqli_query($connection, $sql);
        $row = mysqli_fetch_array($result, mysqli_assoc);
        $active = $row['active'];

        $count = mysqli_num_rows($result);

        //if result matches $myUser and $myPw, the table row must be 1 row

        if($count == 1) {
            //session_register("myusername"); //not sure where myusername refers to
            $_SESSION['login_user'] = $myUser; //not sure where login_user refers to

            header("location: landing.php");
        } else {
            echo "User name or Password incorrect";
        }
    }

?>

<!DOCTYPE HTML>
<html>
<head>
    <title>LOGIN</title>
</head>
<body>
    
<?php

    include_once "db1.php";
    session_start();

    if($_SERVER['REQUEST_METHOD'] == "POST") {

        $myUser = mysqli_real_escape_string($connection, $_POST['user']);
        $myPw = mysqli_real_escape_string($connection, $_POST['pw']);

        $sql = "SELECT user_name FROM login WHERE user_name = '$myUser' AND pw = '$myPw';";
        $result = mysqli_query($connection, $sql);
        $row = mysqli_fetch_array($result, mysqli_assoc);
        $active = $row['active'];

        $count = mysqli_num_rows($result);

        //if result matches $myUser and $myPw, the table row must be 1 row

        if($count == 1) {
            //session_register("myusername"); //not sure where myusername refers to
            $_SESSION['login_user'] = $myUser; //not sure where login_user refers to

            header("location: landing.php");
        } else {
            echo "User name or Password incorrect";
        }
    }

?>

<!DOCTYPE HTML>
<html>
<head>
    <title>LOGIN</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css"/>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;900&display=swap" rel="stylesheet">
</head>
<body>

<div class="jumbotron vertical-center login">
            <div class="container-fluid">
                
                <div class="row align-items-center">
                    
                    <div class="col-sm-4 offset-sm-4 col-md-4 offset-md-4 mx-auto text-center signinform">
                        <h1><b>Log in</b></h1>
                            <form action="login.php" method="post">
                                    <div class="usernameSi">
                                        <p>User name</p>
                                    </div>
                                <input type="text" name="user" placeholder="">
                                    <div class="passwordSi">
                                        <p>Password</p>
                                    </div>
                                <input type="password" name="pw" placeholder="">
                                <br>
                                <button type="submit" name="submit" class="btn btn-danger gobtn"><b>GO !</b></button>
                            </form>
                    </div>
                </div>
            </div>
        </div>
    



</body>

</html>

