<?php

// if login details were submiteed
// if (isset($_POST['login-submit'])){
    if($_SERVER['REQUEST_METHOD'] == "POST") {
    require 'db.php';
    $user =  mysqli_real_escape_string($connection, $_POST['user']);
    $pw =  mysqli_real_escape_string($connection, $_POST['pw']);
    
    //checking if fields are empty
    if (empty($user) || empty($pw)) {
        header("Location: ../login.php?error=emptyfields");
        exit();
    }
    
    else {
        // allows user to login with username or email
        $sql = "SELECT * FROM userdb WHERE userName=? OR email=?;";
        // $sql = "SELECT * FROM userdb WHERE userName=?;";
        $stmt = mysqli_stmt_init($connection);
        // check if there is a connection error
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("Location: ../login.php?error=sqlerror");
            exit();
        }
        else {
            mysqli_stmt_bind_param($stmt, "ss", $user, $user);
            mysqli_stmt_execute($stmt);
            $results = mysqli_stmt_get_result($stmt);
            //$row = mysqli_fetch_assoc($results)
            if ($row = mysqli_fetch_assoc($results)){
                $pwCheck = password_verify($pw, $row['password']);
                if ($pwCheck == false) {
                    header("Location: ../login.php?error=wrongpassword");
                    exit();
                }
                elseif ($pwCheck == true) {
                    // start the session
                    session_start();
                    $_SESSION['userN'] = $row['userName'];
                    $_SESSION['userId'] = $row['ID'];
                    header("Location: ../home.php");

                }
                else {
                    header("Location: ../login.php?error=codingerror");
                    exit();
                }
            }
            else {
                header("Location: ../login.php?error=nouserfound");
                exit();
            }
        }
    }

}
// else {
//     header("Location: login.php?SUCCESS");
//     exit();
// }





// include 'db.php';

//     if($_SERVER['REQUEST_METHOD'] == "POST") {

//         $myUser = mysqli_real_escape_string($connection, $_POST['user']);
//         $myPw = mysqli_real_escape_string($connection, $_POST['pw']);

//         $sql = "SELECT userName FROM userdb WHERE userName = '$myUser' AND pw = '$myPw';";
//         $result = mysqli_query($connection, $sql);
//         $row = mysqli_fetch_array($result, mysqli_assoc);
//         $active = $row['active'];

//         $count = mysqli_num_rows($result);

//         //if result matches $myUser and $myPw, the table row must be 1 row

//         if($count == 1) {
//             //session_register("myusername"); //not sure where myusername refers to
//             $_SESSION['login_user'] = $myUser; //not sure where login_user refers to

//             header("location: login.php?SUCCESS");
//         } elseif ($count !== 1) {
//             header("location: login.php?userorpwwrong");
//         }
//     }
//     else {
//         header("Location: login.php?codingerror");
//     }



