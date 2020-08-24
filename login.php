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
    
<h1>Log in</h1>
    <form action="login.php" method="post">

        <input type="text" name="user" placeholder="username">
        <br>
        <input type="password" name="pw" placeholder="password">
        <br><br>
        <button type="submit" name="submit">login</button>
    </form>


</body>

</html>