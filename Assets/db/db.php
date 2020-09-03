<?php

$dbServer = 'localhost';
$dbUserName = "root";
$dbPw = "";
$dbName = "catflix";

$connection = mysqli_connect($dbServer, $dbUserName, $dbPw, $dbName);

//check connection

if ($connection === false){
    echo "Connection error";
}
// else {
//     echo "connected to database";
//     echo "<br><br>";
// }



?>