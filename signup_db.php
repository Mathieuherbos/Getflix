<?php

include_once 'db.php';

$firstName = mysqli_real_escape_string($connection, $_POST['firstName']);
$lastName = mysqli_real_escape_string($connection, $_POST['lastName']);
$user = mysqli_real_escape_string($connection, $_POST['user']);
$email = mysqli_real_escape_string($connection, $_POST['email']);
$pw = mysqli_real_escape_string($connection, $_POST['pw']);
$pwConf = mysqli_real_escape_string($connection, $_POST['confirm_pw']);
//$premium = mysqli_real_escape_string($connection, $_POST['inlineRadioOptions']);

if (isset($_POST['premium'])){
    $premium = $_POST['premium'];
}
else {
    $premium = 0;
}

//check if any fields are empty
if (empty($firstName) || empty($lastName) || empty($user) || empty($email) || empty($pw) || empty($pwConf)){
    header("Location: signup.php?error=emptyfields");
    exit();
}
//check if first name contains only letters
elseif (!preg_match("/^[a-zA-Z]*/", $firstName)){
    header("Location: signup.php?error=invalidfirstName&lastName=" .$lastName. "&user=" .$user. "&email=" .$email);
    exit();
}
//check if last name contains only letters
elseif (!preg_match("/^[a-zA-Z]*/", $lastName)){
    header("Location: signup.php?error=invalidlastName&firstName=" .$firstName. "&user=" .$user. "&email=" .$email);
    exit();
}
// check if email is valid AND username contains only letters and/or numbrs
elseif (!filter_var($email, FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-zA-Z0-9]*/", $user)){
    header("Location: signup.php?error=invaliduseremail&firstName=" .$firstName. "&lastName=" .$lastName);
    exit();
}
// check if user contains only letters and/or numbers
elseif (!preg_match("/^[a-zA-Z0-9]*/", $user)){
    header("Location: signup.php?error=invaliduser&firstName=" .$firstName. "&lastName=" .$lastName. "&email=" .$email);
    exit();
}
// check if email is valid
elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)){
    header("Location: signup.php?error=invalidemail&firstName=" .$firstName. "&lastName=" .$lastName. "&user=" .$user);
    exit();
}
// check if paswords match
elseif ($pw !== $pwConf){
    header("Location: signup.php?error=passwordcheck&firstName=" .$firstName. "&lastName=" .$lastName. "&user=" .$user. "&email=" .$email);
    exit();
}
//connect to database with prepared statements
else {
    $sql = "SELECT userName FROM userdb WHERE userName=?";
    $stmt = mysqli_stmt_init($connection);
    // checking database connection
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("Location: signup.php?error=sqlerror&firstName" .$firstName. "&lastName=" .$lastName. "&user=" .$user. "&email=" .$email);
        exit();
    }
    else {
        mysqli_stmt_bind_param($stmt, "sssssi", $firstName, $lastName, $user, $email, $pw, $premium);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_store_result($stmt);

        //check if username taken NOT WORKING
        $resultcheck = mysqli_stmt_num_rows($stmt);
        if ($resultcheck > 0){
            header("Location: signup.php?error=usertaken&firstName" .$firstName. "&lastName=" .$lastName. "&email=" .$email);
            exit();
        }
        else {
            // prepared statement to insert data into database
            $sql = "INSERT INTO userdb (firstName, lastName, userName, email, password, premium) VALUES (?, ?, ?, ?, ?, ?);";
            $stmt = mysqli_stmt_init($connection);
            // checking connection to database
            if (!mysqli_stmt_prepare($stmt, $sql)) {
                header("Location: signup.php?error=sqlerror&firstName" .$firstName. "&lastName=" .$lastName. "&user=" .$user. "&email=" .$email);
                exit();
            }
            else {
                // hash password into random characters, e.g. $2y$10$WVoIuX2pQ5
                $hashedPw = password_hash($pw, PASSWORD_DEFAULT);
                // submit data to database
                mysqli_stmt_bind_param($stmt, "sssssi", $firstName, $lastName, $user, $email, $hashedPw, $premium);
                mysqli_stmt_execute($stmt);
                header("Location: login.php");
                exit();
            }
        }
    }
    // ends the database connection. Mysqli does this automatically 
    // but adding the manual version will help it do so quicker
    // and use less db/site resources = better experience for user
    mysqli_stmt_close($stmt);
    mysqli_close($connection);
    
}
?>