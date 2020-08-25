<?php

include_once 'db1.php';



$firstName = mysqli_real_escape_string($connection, $_POST['firstName']);
$lastName = mysqli_real_escape_string($connection, $_POST['lastName']);
$user = mysqli_real_escape_string($connection, $_POST['user']);
$pw = mysqli_real_escape_string($connection, $_POST['pw']);

$sql = "INSERT INTO login(first_name, last_name, user_name, pw) 
VALUES ('$firstName', '$lastName', '$user', '$pw')";
mysqli_query($connection, $sql);

header("location: login.php")

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

<div class="jumbotron vertical-center signup">
            <div class="container-fluid">
                
                <div class="row align-items-center">
                    
                    <div class="col-sm-4 offset-sm-4 col-md-4 offset-md-4 mx-auto text-center signupform">
                        <h1><b>Sign up</b></h1>
                            <form action="login.php" method="post">
                                    <div class="usernameSi">
                                        <p>First name</p>
                                    </div>
                                <input type="text" name="firstName" placeholder="">
                                    <div class="usernameSi">
                                        <p>Last name</p>
                                    </div>
                                <input type="text" name="lastName" placeholder="">
                                    <div class="passwordSi">
                                        <p>User name</p>
                                    </div>
                                <input type="text" name="user" placeholder="">
                                <div class="usernameSi">
                                        <p>Password</p>
                                    </div>
                                <input type="password" name="pw" placeholder="">
                                    <div class="passwordSi">
                                        <p>Confirm password</p>
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

