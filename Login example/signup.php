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